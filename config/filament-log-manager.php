<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Navigation group
    |--------------------------------------------------------------------------
    */
    'navigation_group' => 'Settings',

    /*
    |--------------------------------------------------------------------------
    | Navigation icon
    |--------------------------------------------------------------------------
    */
    'navigation_icon' => 'heroicon-o-server',

    /*
    |--------------------------------------------------------------------------
    | Navigation title
    |--------------------------------------------------------------------------
    */
    'title' => 'Logs',

    /*
    |--------------------------------------------------------------------------
    | Navigation label
    |--------------------------------------------------------------------------
    */
    'label' => 'Logs',

    /*
    |--------------------------------------------------------------------------
    | The directory(ies) containing the log files.
    |--------------------------------------------------------------------------
    */
    'logs_directory' => storage_path('logs'),

    /*
    |--------------------------------------------------------------------------
    | Allow deleting logs from the user interface.
    |--------------------------------------------------------------------------
    */
    'allow_delete' => true,

    /*
    |--------------------------------------------------------------------------
    | Allow downloading logs from the user interface.
    |--------------------------------------------------------------------------
    */
    'allow_download' => true,
];
