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
<!-- ========================  ======================== -->

</body>