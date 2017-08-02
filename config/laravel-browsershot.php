<?php

/*
 * This file is part of Laravel Browsershot.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Preset
    |--------------------------------------------------------------------------
    */

    'preset' => 'apple_iphone_7',

    /*
    |--------------------------------------------------------------------------
    | PhantomJS
    |--------------------------------------------------------------------------
    */

    'bin' => '/usr/local/bin/phantomjs',

    /*
    |--------------------------------------------------------------------------
    | Image Quality
    |--------------------------------------------------------------------------
    */

    'quality' => 100,

    /*
    |--------------------------------------------------------------------------
    | Background Color
    |--------------------------------------------------------------------------
    */

    'background_color' => null,

    /*
    |--------------------------------------------------------------------------
    | Timeout
    |--------------------------------------------------------------------------
    */

    'timeout' => 5000,

    /*
    |--------------------------------------------------------------------------
    | Available Preset
    |--------------------------------------------------------------------------
    */

    'presets' => [
        // Phones
        'apple_iphone_7' => [
            'title'  => 'Apple iPhone 7',
            'width'  => 375,
            'height' => 667,
        ],
        'apple_iphone_6_plus_6s_plus' => [
            'title'  => 'Apple iPhone 6 Plus, 6s Plus',
            'width'  => 414,
            'height' => 736,
        ],
        'apple_iphone_6_6s' => [
            'title'  => 'Apple iPhone 6, 6s',
            'width'  => 375,
            'height' => 667,
        ],
        'apple_iphone_5' => [
            'title'  => 'Apple iPhone 5',
            'width'  => 320,
            'height' => 568,
        ],
        'apple_iphone_4' => [
            'title'  => 'Apple iPhone 4',
            'width'  => 320,
            'height' => 480,
        ],
        'apple_iphone_3' => [
            'title'  => 'Apple iPhone 3',
            'width'  => 320,
            'height' => 480,
        ],
        'apple_ipod_touch' => [
            'title'  => 'Apple iPod Touch',
            'width'  => 320,
            'height' => 568,
        ],
        'lg_g5' => [
            'title'  => 'LG G5',
            'width'  => 360,
            'height' => 640,
        ],
        'lg_g4' => [
            'title'  => 'LG G4',
            'width'  => 360,
            'height' => 640,
        ],
        'lg_g3' => [
            'title'  => 'LG G3',
            'width'  => 360,
            'height' => 640,
        ],
        'lg_optimus_g' => [
            'title'  => 'LG Optimus G',
            'width'  => 384,
            'height' => 640,
        ],
        'samsung_galaxy_s7_s7_edge' => [
            'title'  => 'Samsung Galaxy S7, S7 edge',
            'width'  => 360,
            'height' => 640,
        ],
        'samsung_galaxy_s6' => [
            'title'  => 'Samsung Galaxy S6',
            'width'  => 360,
            'height' => 640,
        ],
        'samsung_galaxy_s5' => [
            'title'  => 'Samsung Galaxy S5',
            'width'  => 360,
            'height' => 640,
        ],
        'samsung_galaxy_s4' => [
            'title'  => 'Samsung Galaxy S4',
            'width'  => 360,
            'height' => 640,
        ],
        'samsung_galaxy_s4_mini' => [
            'title'  => 'Samsung Galaxy S4 mini',
            'width'  => 360,
            'height' => 640,
        ],
        'samsung_galaxy_s3' => [
            'title'  => 'Samsung Galaxy S3',
            'width'  => 360,
            'height' => 640,
        ],
        'samsung_galaxy_s3_mini' => [
            'title'  => 'Samsung Galaxy S3 mini',
            'width'  => 320,
            'height' => 533,
        ],
        'samsung_galaxy_s2' => [
            'title'  => 'Samsung Galaxy S2',
            'width'  => 320,
            'height' => 533,
        ],
        'samsung_galaxy_s' => [
            'title'  => 'Samsung Galaxy S',
            'width'  => 320,
            'height' => 533,
        ],
        'samsung_galaxy_nexus' => [
            'title'  => 'Samsung Galaxy Nexus',
            'width'  => 360,
            'height' => 600,
        ],
        'samsung_galaxy_note_4' => [
            'title'  => 'Samsung Galaxy Note 4',
            'width'  => 360,
            'height' => 640,
        ],
        'samsung_galaxy_note_3' => [
            'title'  => 'Samsung Galaxy Note 3',
            'width'  => 360,
            'height' => 640,
        ],
        'samsung_galaxy_note_2' => [
            'title'  => 'Samsung Galaxy Note 2',
            'width'  => 360,
            'height' => 640,
        ],
        'samsung_galaxy_note' => [
            'title'  => 'Samsung Galaxy Note',
            'width'  => 400,
            'height' => 640,
        ],
        'lg_nexus_5' => [
            'title'  => 'LG Nexus 5',
            'width'  => 360,
            'height' => 640,
        ],
        'lg_nexus_4' => [
            'title'  => 'LG Nexus 4',
            'width'  => 384,
            'height' => 640,
        ],
        'microsoft_lumia_1520' => [
            'title'  => 'Microsoft Lumia 1520',
            'width'  => 432,
            'height' => 768,
        ],
        'microsoft_lumia_1020' => [
            'title'  => 'Microsoft Lumia 1020',
            'width'  => 320,
            'height' => 480,
        ],
        'microsoft_lumia_925' => [
            'title'  => 'Microsoft Lumia 925',
            'width'  => 320,
            'height' => 480,
        ],
        'microsoft_lumia_920' => [
            'title'  => 'Microsoft Lumia 920',
            'width'  => 320,
            'height' => 480,
        ],
        'microsoft_lumia_900' => [
            'title'  => 'Microsoft Lumia 900',
            'width'  => 320,
            'height' => 480,
        ],
        'microsoft_lumia_830' => [
            'title'  => 'Microsoft Lumia 830',
            'width'  => 320,
            'height' => 480,
        ],
        'microsoft_lumia_620' => [
            'title'  => 'Microsoft Lumia 620',
            'width'  => 320,
            'height' => 480,
        ],
        'motorola_nexus_6' => [
            'title'  => 'Motorola Nexus 6',
            'width'  => 412,
            'height' => 690,
        ],
        'htc_one' => [
            'title'  => 'HTC One',
            'width'  => 360,
            'height' => 640,
        ],
        'htc_8x' => [
            'title'  => 'HTC 8X',
            'width'  => 320,
            'height' => 480,
        ],
        'htc_evo_3_d' => [
            'title'  => 'HTC Evo 3D',
            'width'  => 360,
            'height' => 640,
        ],
        'sony_xperia_z3' => [
            'title'  => 'Sony Xperia Z3',
            'width'  => 360,
            'height' => 598,
        ],
        'sony_xperia_z' => [
            'title'  => 'Sony Xperia Z',
            'width'  => 360,
            'height' => 640,
        ],
        'sony_xperia_s' => [
            'title'  => 'Sony Xperia S',
            'width'  => 360,
            'height' => 640,
        ],
        'sony_xperia_p' => [
            'title'  => 'Sony Xperia P',
            'width'  => 360,
            'height' => 640,
        ],
        'xiaomi_mi_4' => [
            'title'  => 'Xiaomi Mi 4',
            'width'  => 360,
            'height' => 640,
        ],
        'xiaomi_mi_3' => [
            'title'  => 'Xiaomi Mi 3',
            'width'  => 360,
            'height' => 640,
        ],
        'lenovo_k900' => [
            'title'  => 'Lenovo K900',
            'width'  => 360,
            'height' => 640,
        ],
        'pantech_vega_n_6' => [
            'title'  => 'Pantech Vega n°6',
            'width'  => 360,
            'height' => 640,
        ],
        'blackberry_leap' => [
            'title'  => 'Blackberry Leap',
            'width'  => 390,
            'height' => 695,
        ],
        'blackberry_passport' => [
            'title'  => 'Blackberry Passport',
            'width'  => 504,
            'height' => 504,
        ],
        'blackberry_classic' => [
            'title'  => 'Blackberry Classic',
            'width'  => 390,
            'height' => 390,
        ],
        'blackberry_q10' => [
            'title'  => 'Blackberry Q10',
            'width'  => 346,
            'height' => 346,
        ],
        'blackberry_z30' => [
            'title'  => 'Blackberry Z30',
            'width'  => 360,
            'height' => 640,
        ],
        'blackberry_z10' => [
            'title'  => 'Blackberry Z10',
            'width'  => 384,
            'height' => 640,
        ],
        'blackberry_torch_9800' => [
            'title'  => 'Blackberry Torch 9800',
            'width'  => 360,
            'height' => 480,
        ],
        'zte_grand_s' => [
            'title'  => 'ZTE Grand S',
            'width'  => 360,
            'height' => 640,
        ],
        'zte_open_firefox_o_s' => [
            'title'  => 'ZTE Open (Firefox OS)',
            'width'  => 320,
            'height' => 480,
        ],

        // Tablets
        'apple_ipad_pro' => [
            'title'  => 'Apple iPad Pro',
            'width'  => 1024,
            'height' => 1366,
        ],
        'apple_ipad_3_4_air_air2' => [
            'title'  => 'Apple iPad 3, 4, Air, Air2',
            'width'  => 768,
            'height' => 1024,
        ],
        'apple_ipad_1_2' => [
            'title'  => 'Apple iPad 1, 2',
            'width'  => 768,
            'height' => 1024,
        ],
        'apple_ipad_mini_2_3' => [
            'title'  => 'Apple iPad mini 2, 3',
            'width'  => 768,
            'height' => 1024,
        ],
        'apple_ipad_mini' => [
            'title'  => 'Apple iPad mini',
            'width'  => 768,
            'height' => 1024,
        ],
        'samsung_galaxy_tab_3_10' => [
            'title'  => 'Samsung Galaxy Tab 3 10',
            'width'  => 800,
            'height' => 1280,
        ],
        'samsung_galaxy_tab_2_10' => [
            'title'  => 'Samsung Galaxy Tab 2 10',
            'width'  => 800,
            'height' => 1280,
        ],
        'samsung_galaxy_tab_8_9' => [
            'title'  => 'Samsung Galaxy Tab (8.9")',
            'width'  => 800,
            'height' => 1280,
        ],
        'samsung_galaxy_tab_2_7' => [
            'title'  => 'Samsung Galaxy Tab 2 (7")',
            'width'  => 600,
            'height' => 1024,
        ],
        'samsung_nexus_10' => [
            'title'  => 'Samsung Nexus 10',
            'width'  => 800,
            'height' => 1280,
        ],
        'htc_nexus_9' => [
            'title'  => 'HTC Nexus 9',
            'width'  => 768,
            'height' => 1024,
        ],
        'asus_nexus_7_v2' => [
            'title'  => 'Asus Nexus 7 (v2)',
            'width'  => 600,
            'height' => 960,
        ],
        'asus_nexus_7_v1' => [
            'title'  => 'Asus Nexus 7 (v1)',
            'width'  => 604,
            'height' => 966,
        ],
        'lg_g_pad_8_3' => [
            'title'  => 'LG G Pad 8.3',
            'width'  => 600,
            'height' => 960,
        ],
        'amazon_kindle_fire_hd_8_9' => [
            'title'  => 'Amazon Kindle Fire HD 8.9',
            'width'  => 800,
            'height' => 1280,
        ],
        'amazon_kindle_fire_hd_7' => [
            'title'  => 'Amazon Kindle Fire HD 7',
            'width'  => 480,
            'height' => 800,
        ],
        'amazon_kindle_fire' => [
            'title'  => 'Amazon Kindle Fire',
            'width'  => 600,
            'height' => 1024,
        ],
        'microsoft_surface_pro_3' => [
            'title'  => 'Microsoft Surface Pro 3',
            'width'  => 1024,
            'height' => 1440,
        ],
        'microsoft_surface_pro_2' => [
            'title'  => 'Microsoft Surface Pro 2',
            'width'  => 720,
            'height' => 1280,
        ],
        'microsoft_surface_pro' => [
            'title'  => 'Microsoft Surface Pro',
            'width'  => 720,
            'height' => 1280,
        ],
        'microsoft_surface' => [
            'title'  => 'Microsoft Surface',
            'width'  => 768,
            'height' => 1366,
        ],
        'blackberry_playbook' => [
            'title'  => 'Blackberry Playbook',
            'width'  => 600,
            'height' => 1024,
        ],

        // Notebooks
        'laptop_with_touch' => [
            'name'   => 'Laptop with touch',
            'width'  => 950,
            'height' => 1280,
        ],
        'laptop_with_hidpi_screen' => [
            'name'   => 'Laptop with HiDPI screen',
            'width'  => 900,
            'height' => 1440,
        ],
        'laptop_with_mdpi_screen' => [
            'name'   => 'Laptop with MDPI screen',
            'width'  => 800,
            'height' => 1280,
        ],
    ],

];
