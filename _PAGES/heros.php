<?php
 include "./_page-inc/head.php";
?>
<body>
    <h1 class='component-label'>Toms Hero Components</h1>
    <hr/>
    <!-- ======================== Simple Hero ======================== -->
    <h2 class='component-label'>Simple Hero</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Heros/simple-hero/simple-hero.css"/>
    <script type="application/javascript" src="../_INC/Heros/simple-hero/simple-hero.js" defer></script>
    <?php
        $simple_hero_data = (object)[
            'id' => 'id-1',
            'image_url' => "../_LIBS/images/image4.jpg",
            'hero_content' => '<h1>Hero Text</h1>'
        ];
        include "../_INC/Heros/simple-hero/simple-hero.php";
    ?>  

    <hr/>
<!-- ========================  ======================== -->

</body>