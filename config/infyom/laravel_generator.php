<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    */

    'path' => [

        'migration'         => base_path('database/migrations/'),

        'model'             => app_path('Models/'),

        'datatables'        => app_path('DataTables/'),

        'repository'        => app_path('Repositories/'),

        'routes'            => base_path('routes/web.php'),

        'api_routes'        => base_path('routes/api.php'),

        'request'           => app_path('Http/Requests/'),

        'api_request'       => app_path('Http/Requests/API/'),

        'controller'        => app_path('Http/Controllers/'),

        'api_controller'    => app_path('Http/Controllers/API/'),

        'test_trait'        => base_path('tests/Traits/'),

        'repository_test'   => base_path('tests/Repositories/'),

        'api_test'          => base_path('tests/APIs/'),

        'tests'             => base_path('tests/'),

        'views'             => base_path('resources/views/'),

        'schema_files'      => base_path('resources/model_schemas/'),

        'templates_dir'     => base_path('resources/infyom/infyom-generator-templates/'),

        'modelJs'           => base_path('resources/assets/js/models/'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => [

        'model'             => 'agoqra\Models',

        'datatables'        => 'agoqra\DataTables',

        'repository'        => 'agoqra\Repositories',

        'controller'        => 'agoqra\Http\Controllers',

        'api_controller'    => 'agoqra\Http\Controllers\API',

        'request'           => 'agoqra\Http\Requests',

        'api_request'       => 'agoqra\Http\Requests\API',

        'test_trait'        => 'Tests\Traits',

        'repository_test'   => 'Tests\Repositories',

        'api_test'          => 'Tests\APIs',

        'tests'             => 'Tests',
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    'templates'         => 'adminlte-templates',

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    'model_extend_class' => 'Eloquent',

    /*
    |--------------------------------------------------------------------------
    | API routes prefix & version
    |--------------------------------------------------------------------------
    |
    */

    'api_prefix'  => 'api',

    'api_version' => 'v1',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    */

    'options' => [

        'softDelete' => true,

        'tables_searchable_default' => false,

        'excluded_fields' => ['id'], // Array of columns that doesn't required while creating module
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefixes
    |--------------------------------------------------------------------------
    |
    */

    'prefixes' => [

        'route' => '',  // using admin will create route('admin.?.index') type routes

        'path' => '',

        'view' => '',  // using backend will create return view('backend.?.index') type the backend views directory

        'public' => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Add-Ons
    |--------------------------------------------------------------------------
    |
    */

    'add_on' => [

        'swagger'       => true,

        'tests'         => true,

        'datatables'    => false,

        'menu'          => [

            'enabled'       => true,

            'menu_file'     => 'layouts/menu.blade.php',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Timestamp Fields
    |--------------------------------------------------------------------------
    |
    */

    'timestamps' => [

        'enabled'       => true,

        'created_at'    => 'created_at',

        'updated_at'    => 'updated_at',

        'deleted_at'    => 'deleted_at',
    ],

    /*
    |--------------------------------------------------------------------------
    | Save model files to `App/Models` when use `--prefix`. see #208
    |--------------------------------------------------------------------------
    |
    */
    'ignore_model_prefix' => false,

    /*
    |--------------------------------------------------------------------------
    | Specify custom doctrine mappings as per your need
    |--------------------------------------------------------------------------
    |
    */
    'from_table' => [

        'doctrine_mappings' => [],
    ],

];
