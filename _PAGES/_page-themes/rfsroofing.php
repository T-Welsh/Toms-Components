<?php
 include "../_page-inc/theme-head.php";
?>
<body>

    <!-- Navbar -->
    <link rel="stylesheet" type="text/css" href="../../_INC/Headers/purlin-navbar/purlin-navbar.css"/>
    <script type="application/javascript" src="../../_INC/Headers/purlin-navbar/purlin-navbar.js" defer></script>
    <?php
        $purlin_navbar_data = (object)[
            'id' => "purlin-nav-bar-1",
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
            'style' => (object)[
                'container_1_clr' => '19,49,58',
                'container_2_clr' => '65,149,178',
                'txt_clr' => '255,255,255',
                'logo_width' => '200px'
            ] 
        ];
        include "../../_INC/Headers/purlin-navbar/purlin-navbar.php";
    ?>

    <!-- Hero -->
    <link rel="stylesheet" type="text/css" href="../../_INC/Heros/simple-hero/simple-hero.css"/>
    <?php
        $simple_hero_data = (object)[
            'id' => 'rfsroofing-hero',
            'image_url' => "../../_LIBS/images/image4.jpg",
            'overlay_color' => 'rgb(19,49,58,0.8)',
            'hero_content' => '<p>Are You Looking To Refresh Your Roof?</p>
            <br/>
            <p>We\'re Here To Help!</p>
            '
        ];
        include "../../_INC/Heros/simple-hero/simple-hero.php";
    ?>  

    <!-- About -->
    <link rel="stylesheet" type="text/css" href="../../_INC/CONTENT-BLOCKS/simple-content-block/simple-content-block.css"/>
    <?php
    
        $content_block_data = (object) [
            'id' => 'rfsroofing-about',
            'background_color' => '65,149,178',
            'justify_article' => 'top',
            'heading' => '<h1>Your local roofing specialist in Middlesbrough</h1><br/><br/>',
            'column1' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat vitae tellus ac porta. Fusce maximus sem ac porttitor auctor. Morbi tempus libero quis turpis lacinia lobortis. Mauris a tempor lacus, sit amet vulputate massa. Donec tempor dui iaculis ante porta, et dignissim odio dapibus. Vestibulum venenatis lorem libero, vel porttitor nunc porta ut. Sed ut elit quis lacus volutpat scelerisque nec ac tortor.</p>
            <br/>
            <p>Suspendisse sed mollis nunc. In lobortis est ac tincidunt blandit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent libero augue, vehicula eget vulputate ac, auctor non nisl. Curabitur interdum dolor a arcu fermentum dictum et vitae purus. Ut vitae sem tempus, porttitor ante eu, congue ipsum.</p>',
            'column2' => '',
            'column3' => ''
        ];
        include "../../_INC/CONTENT-BLOCKS/simple-content-block/simple-content-block.php";
        
    ?>  
    
</body>
</html>