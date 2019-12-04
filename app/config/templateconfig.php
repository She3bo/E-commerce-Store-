<?php
return [
    'template' => [
          'wrapperstart'    => TEMPLATE_PATH . 'wrapperstart.php',
          'header'          => TEMPLATE_PATH . 'header.php',
          'nav'             => TEMPLATE_PATH . 'nav.php',
          ':view'           => ':action_view',
          'wrapperend'      => TEMPLATE_PATH . 'wrapperend.php'
    ],
    'header_resources' =>[
        'css' => [
            'normalize'     => CS . "normalize.css",
            'fawsome'       => CS . "fawsome.min.css",
            'googleicons'   => CS . "googleicons.css",
            'mainar'          => CS . "mainar.css",
            'mainen'          => CS . "mainen.css"
        ],
       'js'=> [
            'modernizr'     => JS . "vendor/modernizr-2.8.3.min.js"
       ]
       ],
    'footer_resources' =>[
        'jquery'            => JS . "vendor/jquery-1.12.0.min.js",
        'helper'            => JS . "helper.js",
        'custom'            => JS . "custom.js"
    ]

       ];
?>