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

    <hr/>
<!-- ======================== Logo Banner ======================== -->
    <h2>Logo Banner</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/BANNERS/logo-banner/logo-banner.css"/>
    <?php
    $logo_banner_data = (object)[
        'id' => 'banner-2',
        'logo_url' => "../_LIBS/images/logoipsum-215.svg",
        'logo_alt' => "image alt text",
        'background_color' => 'rgb(219,112,147)',
        'button_url' => "#"
    ];
    include "../_INC/BANNERS/logo-banner/logo-banner.php";
    ?>  
</body>


