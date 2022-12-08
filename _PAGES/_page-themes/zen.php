<?php
 include "../_page-inc/theme-head.php";
?>

<!-- HERO -->
<link rel="stylesheet" type="text/css" href="../../_INC/Heros/zen-hero/zen-hero.css"/>
    <?php
        $zen_hero_data = (object)[
            'id' => 'id-hero-2',
            'image_url' => "../../_LIBS/images/image6.jpg",
            'overlay_color' => 'rgba(0,0,0,0.5)',
            'hero_height' => '90',
            'hero_content' => '<h1>Company Name</h1>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat, velit ac gravida bibendum.</p>
            <br>
            <span class="button">Learn More</span>
            '
        ];
        include "../../_INC/Heros/zen-hero/zen-hero.php";
    ?>  

