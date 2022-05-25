<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

add_action( 'init', function() {
    register_extended_post_type( 'casino', [

        'show_in_feed' => true,
        'show_in_rest' => true,
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "post-formats" ],
        'menu_icon'    => 'dashicons-shield-alt',

        # Add some custom columns to the admin screen:
        'admin_cols' => [
            'casino_role' => [
                'taxonomy' => 'casino-roles'
            ]
        ],

        'archive' => [
            'nopaging' => true,
        ],
        'rewrite'  => [
            'slug' => 'casinos',
        ],

    ], [

        'singular' => 'Casino',
        'plural'   => 'Casinos',
        'slug'     => 'casinos',
    ]);

    register_extended_taxonomy( 'casino-roles', 'casino', [

        'dashboard_glance' => true,

        'admin_cols' => [
            'updated' => [
                'title'       => 'Updated',
                'meta_key'    => 'updated_date',
                'date_format' => 'd/m/Y'
            ],
        ],

    ], [
        'singular' => 'Role',
        'plural'   => 'Roles',
        'slug'     => 'casino-roles'
    ]);

} );
