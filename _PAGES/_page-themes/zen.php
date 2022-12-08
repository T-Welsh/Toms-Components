<?php
 include "../_page-inc/theme-head.php";
?>

<!-- Navbar -->
<link rel="stylesheet" type="text/css" href="../../_INC/Headers/zen-navbar/zen-navbar.css"/>
    <script type="application/javascript" src="../../_INC/HEADERS/zen-navbar/zen-navbar.js" defer></script>
    <?php
        $zen_navbar_data = (object)[
            'id' => "zen-nav-bar-1",
            'background_color'=> 'rgba(0,0,0,0)',
            'backdrop_blur' => '1',
            'panel_angle' => '15',
            'panel_color' => 'rgba(0,0,0,0.3)',
            'logo_url' => '../../_LIBS/images/logoipsum-289.svg',
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
                    'name' => 'News',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Portfolio',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Contact',
                    'link_url' => '#',
                    'children' => []
                ]
            ],
            'phone' => '075 5555 5555',
            'email' => 'Email@email.com',
            'facebook_url' => '#',
            'Instagram_url' => '#',
            'Twitter_url' => '#',
            'Linkedin_url' => '#',
            'Pinterest_url' => '#',
            'YouTube_url' => '#',
            'CheckaTrade_url' => '',
            'Houzz_url' => ''
            
        ];
        include "../../_INC/Headers/zen-navbar/zen-navbar.php";
    ?>
<!-- HERO -->
<link rel="stylesheet" type="text/css" href="../../_INC/Heros/zen-hero/zen-hero.css"/>
    <?php
        $zen_hero_data = (object)[
            'id' => 'id-hero-2',
            'image_url' => "../../_LIBS/images/image6.jpg",
            'overlay_color' => 'rgba(0,0,0,0.5)',
            'hero_height' => '100',
            'hero_content' => '<h1>Zen Theme</h1>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat, velit ac gravida bibendum.</p>
            <br>
            <span class="button">Learn More</span>
            '
        ];
        include "../../_INC/Heros/zen-hero/zen-hero.php";
    ?>  

