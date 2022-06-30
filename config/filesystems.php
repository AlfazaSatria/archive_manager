<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'admintools' => [
            'driver' => 'local',
            'root' =>env('APP_ENV') == 'production'?
                    '/var/www/toolbox.bisniso.id/storage/app/public':
                    '/var/www/toolbox.bisniso.id/storage/app/public',
        ],

        'marketplace' => [
            'driver' => 'local',
            'root' =>env('APP_ENV') == 'production'?
                    '/var/www/endmarket.bisniso.id/storage/app/public':
                    '/var/www/endmarket.bisniso.id/storage/app/public',
        ],

        // 'pembudidaya' => [
        //     'driver' => 'local',
        //     'root' =>env('APP_ENV') == 'production'?
        //             '/var/www/fishery.panenpanen.id/storage/app/public':
        //             '/public_html/lelenesia/panen-ikan-backend/storage/app/public',
        // ],

        // 'petani' => [
        //     'driver' => 'local',
        //     'root' =>env('APP_ENV') == 'production'?
        //             '/var/www/agriculture.panenpanen.id/storage/app/public':
        //             '/public_html/panenpanen.com/panen-sayur-backend/storage/app/public',
        // ],

        // 'pebuah' => [
        //     'driver' => 'local',
        //     'root' =>env('APP_ENV') == 'production'?
        //             '/var/www/fruit.panenpanen.id/storage/app/public':
        //             '/public_html/panenpanen.com/panen-buah-backend/storage/app/public',
        // ],

        // 'peternak' => [
        //     'driver' => 'local',
        //     'root' =>env('APP_ENV') == 'production'?
        //             '/var/www/husbandry.panenpanen.id/storage/app/public':
        //             '/public_html/panenpanen.com/panen-ternak-backend/storage/app/public',
        // ],

        'pabrik' => [
            'driver' => 'local',
            'root' =>env('APP_ENV') == 'production'?
                    '/var/www/supplier.panenpanen.id/storage/app/public':
                    '/public_html/panenpanen.com/panen-ternak-backend/storage/app/public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
