#!/bin/bash

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Configuration
TEMP_DIR=$(mktemp -d)
REPO_URL="https://github.com/Laravel-Lang/lang.git"
REPO_DIR="$TEMP_DIR/lang"
SOURCE_DIR="$REPO_DIR/source/framework/12.x"
LOCALES_DIR="$REPO_DIR/locales"

echo -e "${GREEN}Laravel Translation Update Script${NC}"
echo "=================================="
echo ""

# Cleanup function
cleanup() {
    if [ -d "$TEMP_DIR" ]; then
        echo -e "${YELLOW}Cleaning up temporary files...${NC}"
        rm -rf "$TEMP_DIR"
    fi
}

# Set trap to cleanup on exit
trap cleanup EXIT

# Clone the Laravel-Lang repository
echo -e "${YELLOW}Cloning Laravel-Lang/lang repository...${NC}"
git clone --depth 1 "$REPO_URL" "$REPO_DIR" 2>&1 | grep -v "Cloning into" || true
echo -e "${GREEN}✓ Repository cloned${NC}"
echo ""

# Check if source directory exists
if [ ! -d "$SOURCE_DIR" ]; then
    echo -e "${RED}Error: Source directory not found at $SOURCE_DIR${NC}"
    exit 1
fi

# Get the current script directory and project root
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_ROOT="$(dirname "$SCRIPT_DIR")"

# Function to extract keys from source PHP file
extract_keys_from_php() {
    local php_file="$1"
    # Extract array keys from PHP return array
    grep -oE "'[^']+'\s*=>" "$php_file" | sed -E "s/'([^']+)'.*/\1/" || echo ""
}

# Function to get value from JSON using jq
get_json_value() {
    local json_file="$1"
    local key="$2"

    if [ ! -f "$json_file" ]; then
        echo ""
        return
    fi

    # Try to get the value, return empty if key doesn't exist
    jq -r --arg key "$key" '.[$key] // empty' "$json_file" 2>/dev/null || echo ""
}

# Function to escape single quotes for PHP
escape_php_string() {
    # Replace single quotes with escaped single quotes
    echo "$1" | sed "s/'/'\\\\'/g"
}

# Function to generate PHP array file from JSON
generate_php_from_json() {
    local source_php="$1"
    local json_file="$2"
    local json_inline_file="$3"
    local output_php="$4"

    if [ ! -f "$source_php" ]; then
        return 1
    fi

    if [ ! -f "$json_file" ]; then
        return 1
    fi

    # Extract keys from source PHP file
    local keys=$(extract_keys_from_php "$source_php")

    if [ -z "$keys" ]; then
        return 1
    fi

    # Merge inline and main JSON if inline exists
    local merged_json
    if [ -f "$json_inline_file" ]; then
        merged_json=$(jq -s '.[0] * .[1]' "$json_file" "$json_inline_file" 2>/dev/null || cat "$json_file")
    else
        merged_json=$(cat "$json_file")
    fi

    # Start building the PHP file
    {
        echo "<?php"
        echo ""
        echo "return ["

        # For each key, get the translation from merged JSON
        while IFS= read -r key; do
            if [ -n "$key" ]; then
                # Get value from JSON
                local value=$(echo "$merged_json" | jq -r --arg k "$key" '.[$k] // empty' 2>/dev/null)

                if [ -n "$value" ]; then
                    # Escape single quotes in the value
                    local escaped_value=$(echo "$value" | sed "s/'/'\\\\'/g")
                    echo "    '$key' => '$escaped_value',"
                fi
            fi
        done <<< "$keys"

        echo "];"
        echo ""
    } > "$output_php"
}

# Counter for updated locales
updated_count=0
skipped_count=0

echo -e "${YELLOW}Updating translations...${NC}"
echo ""

# Define the PHP files to process
php_files=("auth.php" "passwords.php" "pagination.php" "validation.php")

# Iterate through each locale directory in the locales folder
for locale_dir in "$LOCALES_DIR"/*/ ; do
    if [ -d "$locale_dir" ]; then
        locale=$(basename "$locale_dir")

        # Create locale directory in our project if it doesn't exist
        target_locale_dir="$PROJECT_ROOT/$locale"
        target_dir="$target_locale_dir/$locale"
        mkdir -p "$target_dir"

        # JSON files for this locale
        php_json="$locale_dir/php.json"
        php_inline_json="$locale_dir/php-inline.json"

        if [ ! -f "$php_json" ]; then
            echo -e "${YELLOW}⊘ No translations for $locale${NC}"
            ((skipped_count++))
            continue
        fi

        # Generate PHP files from JSON
        files_generated=0
        for filename in "${php_files[@]}"; do
            source_file="$SOURCE_DIR/$filename"
            target_file="$target_dir/$filename"

            if generate_php_from_json "$source_file" "$php_json" "$php_inline_json" "$target_file" 2>/dev/null; then
                ((files_generated++))
            fi
        done

        if [ $files_generated -gt 0 ]; then
            echo -e "${GREEN}✓ Updated $locale ($files_generated files)${NC}"
            ((updated_count++))
        else
            echo -e "${YELLOW}⊘ No files generated for $locale${NC}"
            ((skipped_count++))
        fi
    fi
done

echo ""
echo "=================================="
echo -e "${GREEN}Update complete!${NC}"
echo -e "Updated: ${GREEN}$updated_count${NC} locales"
echo -e "Skipped: ${YELLOW}$skipped_count${NC} locales"
echo ""
