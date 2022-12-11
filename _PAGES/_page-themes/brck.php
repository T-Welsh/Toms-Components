<?php
 include "../_page-inc/theme-head.php";
?>

<!-- Navbar -->
<link rel="stylesheet" type="text/css" href="../../_INC/Headers/girder-navbar/girder-navbar.css"/>
<script type="application/javascript" src="../../_INC/HEADERS/girder-navbar/girder-navbar.js" defer></script>
<?php
    $girder_nav_bar_data = (object)[
        'id' => "brck-nav-2",
        'logo_url' => '../../_LIBS/images/BRCK_Logo.png',
        'home_url' => '#',
        'nav_links_1' => [
            (object)[
                'name' => 'About',
                'link_url' => '#',
                'children' => []
            ],
            (object)[
                'name' => 'Services',
                'link_url' => '#',
                'children' => []
            ],
            (object)[
                'name' => 'Our Work',
                'link_url' => '#',
                'children' => []
            ]
            ],
            'facebook_url' => '#',
            'Instagram_url' => '#',
            'Twitter_url' => '#',
            'Linkedin_url' => '#',
            'Pinterest_url' => '#',
            'YouTube_url' => '#',
            'CheckaTrade_url' => '',
            'Houzz_url' => '' ,
            'nav_links_2' => [
                (object)[
                    'name' => 'Contact',
                    'link_url' => '#',
                    'children' => []
                ]
                ],   
    ];
    include "../../_INC/Headers/girder-navbar/girder-navbar.php";
?>
<!-- HERO -->
<link rel="stylesheet" type="text/css" href="../../_INC/Heros/zen-hero/zen-hero.css"/>
    <?php
        $zen_hero_data = (object)[
            'id' => 'brck-hero',
            'image_url' => "../../_LIBS/images/red-brown-vintage-brick-wall-with-shabby-structure-horizontal-wide-brickwall-background-grungy-red-brick-blank-wall-texture-.jpg",
            'overlay_color' => 'rgba(0,0,0,0.5)',
            'hero_height' => '80',
            'hero_content' => '<h1>BRCK</h1>
            <br>
            <p>Professional bricklaying services in Norfolk, Suffolk and surrounding areas</p>
            <br>
            <span class="button">Request A Quote</span>
            '
        ];
        include "../../_INC/Heros/zen-hero/zen-hero.php";
    ?>  
    
    <!-- Fully Qualified -->
<link rel="stylesheet" type="text/css" href="../../_INC/Carousels-and-Galleries/logo-ticker/logo-ticker.css"/>
<script type="application/javascript" src="../../_INC/Carousels-and-Galleries/logo-ticker/logo-ticker.js" defer></script>
<?php
        $logo_ticker_data = (object)[
            'id' => 'BRCK-logo-carousel',
            'heading' => '',
            'cards' => [
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-226.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/spi-des-ign_logo_final.png',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-230.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-241.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-226.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/spi-des-ign_logo_final.png',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-230.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-241.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-226.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/spi-des-ign_logo_final.png',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-230.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-241.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-226.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/spi-des-ign_logo_final.png',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-230.svg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '../../_LIBS/images/logoipsum-241.svg',
                    'alt' => 'image alt text'
                ]
            ]
        ];
include "../../_INC/Carousels-and-Galleries/logo-ticker/logo-ticker.php";
?>

<!-- About Us -->
<link rel="stylesheet" type="text/css" href="../../_INC/CONTENT-BLOCKS/split-content-block/split-content-block.css"/>
<?php

    $split_content_block_data = (object) [
        'id' => 'brck-about-us',
        'background_color' => 'rgb(255,100,60,1)',
        'image1_url' => '../../_LIBS/images/workers.jpg',
        'image1_alt' => 'image 1',
        'reversed' => true,
        'column1' => '<h2>About Us</h2><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p><br><br><span class="button">Our Services</span>
        '
    ];
    include "../../_INC/CONTENT-BLOCKS/split-content-block/split-content-block.php";
    
?>  