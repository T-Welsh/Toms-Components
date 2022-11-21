<?php
 include "./_page-inc/head.php";
?>

<body>
    <h1>Toms Banners</h1>
    <hr/>
<!-- ======================== Simple Banner ======================== -->
    <h2>Simple Banner</h2>

    <link rel="stylesheet" type="text/css" href="../_INC/BANNERS/simple-banner/simple-banner.css"/>
    <?php
    $simple_banner_data = (object)[
        'id' => 'banner-1',
        'banner_name' => "Banner Name",
        'background_image_url' => "../_LIBS/images/image2.jpg",
        'overlay_color' => 'transparent',
        'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        'button_content' => "Click Me",
        'button_url' => "#"
    ];
    include "../_INC/BANNERS/simple-banner/simple-banner.php";
    ?>  

<!-- ========================  ======================== -->
    <hr/>
</body>


