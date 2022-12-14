<?php
 include "./_page-inc/head.php";
?>
<body>
    <h1 class='component-label'>Toms Hero Components</h1>
    <hr/>
    <!-- ======================== Simple Hero ======================== -->
    <h2 class='component-label'>Simple Hero</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Heros/simple-hero/simple-hero.css"/>
    <?php
        $simple_hero_data = (object)[
            'id' => 'id-1',
            'image_url' => "../_LIBS/images/image4.jpg",
            'overlay_color' => 'transparent',
            'hero_content' => '<h1>HERO HEADING/LOGO GOES HERE </h1>'
        ];
        include "../_INC/Heros/simple-hero/simple-hero.php";
    ?>  

    <hr/>
<!-- ======================== Zen Hero ======================== -->
    <h2 class='component-label'>Zen Hero</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Heros/zen-hero/zen-hero.css"/>
    <?php
        $zen_hero_data = (object)[
            'id' => 'id-hero-2',
            'image_url' => "../_LIBS/images/image6.jpg",
            'overlay_color' => 'rgba(0,0,0,0.5)',
            'hero_height' => '90',
            'hero_content' => '<h1>Company Name</h1>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat, velit ac gravida bibendum.</p>
            <br>
            <span class="button">Learn More</span>
            '
        ];
        include "../_INC/Heros/zen-hero/zen-hero.php";
    ?>  

    <hr/>
<!-- ======================== Split Hero ======================== -->
<h2 class='component-label'>Split Hero</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Heros/split-hero/split-hero.css"/>
    <?php
        $split_hero_data = (object)[
            'id' => 'goldelec-hero',
            'hero_height' => '70',
            'background_image_url' => '../_LIBS/images/image6.jpg',
            'container1' => (object) [
                'background_image_url' => '',
                'background_overlay' => 'rgb(0,0,0,1)',
                'content' => '<h1>SPLIT HERO</h1>'
            ],
            'container2' => (object) [
                'background_image_url' => '',
                'background_overlay' => 'rgb(0,0,0,1)',
                'content' => '<h2>SPLIT HERO Section 2</h2>'
            ]
        ];
        include "../_INC/Heros/split-hero/split-hero.php";
    ?>  

    <hr/>
</body>