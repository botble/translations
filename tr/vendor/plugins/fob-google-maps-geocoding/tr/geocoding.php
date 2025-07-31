<?php

return [
    'settings' => [
        'title' => 'FOB Google Maps Geocoding',
        'description' => 'Configure Google Maps API for automatic geocoding with Places autocomplete',
        'api_key' => 'Google Maps API Key',
        'api_key_placeholder' => 'Enter your Google Maps API key',
        'api_key_helper' => 'Get your API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">Google Cloud Console</a>. Enable Geocoding API and Places API.',
        'enabled' => 'Enable Geocoding',
        'enabled_helper' => 'Enable automatic geocoding with Places autocomplete when entering location',
        'auto_fill' => 'Auto-fill Coordinates',
        'auto_fill_helper' => 'Automatically fill latitude and longitude fields when location is selected from autocomplete or manually entered',
        'save_settings' => 'Save Settings',
        'saved_successfully' => 'Settings saved successfully!',
    ],
    'geocoding' => [
        'error' => 'Failed to get coordinates for this location',
        'no_results' => 'No results found for this location',
        'api_error' => 'Google Maps API error',
        'success' => 'Coordinates updated successfully',
    ],
];
