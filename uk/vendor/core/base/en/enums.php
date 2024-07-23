<?php

return [
    'statuses' => [
        'draft' => 'Draft',
        'pending' => 'Pending',
        'published' => 'Published',
    ],
    'system_updater_steps' => [
        'download' => 'Download update files',
        'update_files' => 'Update system files',
        'update_database' => 'Update databases',
        'publish_core_assets' => 'Publish core assets',
        'publish_packages_assets' => 'Publish packages assets',
        'clean_up' => 'Clean up system update files',
        'done' => 'System updated successfully',

        'messages' => [
            'download' => 'Downloading update files...',
            'update_files' => 'Updating system files...',
            'update_database' => 'Updating databases...',
            'publish_core_assets' => 'Publishing core assets...',
            'publish_packages_assets' => 'Publishing packages assets...',
            'clean_up' => 'Cleaning up system update files...',
            'done' => 'Done! Your browser will be refreshed in 30 seconds.',
        ],

        'failed_messages' => [
            'download' => 'Could not download update files',
            'update_files' => 'Could not update system files',
            'update_database' => 'Could not update databases',
            'publish_core_assets' => 'Could not publish core assets',
            'publish_packages_assets' => 'Could not publish packages assets',
            'clean_up' => 'Could not clean up system update files',
        ],

        'success_messages' => [
            'download' => 'Downloaded update files successfully.',
            'update_files' => 'Updated system files successfully.',
            'update_database' => 'Updated databases successfully.',
            'publish_core_assets' => 'Published core assets successfully.',
            'publish_packages_assets' => 'Published packages assets successfully.',
            'clean_up' => 'Cleaned up system update files successfully.',
        ],
    ],
];
