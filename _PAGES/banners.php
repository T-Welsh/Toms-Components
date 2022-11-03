<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components Gallery</title>

    <!--jQuery-->
    <script type="application/javascript" src="../_LIBS/js/jquery-3.6.0.min.js" defer></script>

    <!--My Styles-->
    <link rel="stylesheet" href="../_LIBS/css/vars.css.php">
    <link rel="stylesheet" href="../_LIBS/css/main.css">

</head>
<body>
    <h1>Toms Banners</h1>

<!-- ======================== Simple Banner ======================== -->

    <link rel="stylesheet" type="text/css" href="../_INC/BANNERS/simple-banner/simple-banner.css"/>
    <?php
    $simple_banner_data = (object)[
        'banner_name' => "Banner Name",
        'background_image_url' => "../_LIBS/images/image2.jpg",
        'content' => "Some Banner Text aaaaaaa aaaaaa",
        'button_content' => "Click Me",
        'button_url' => "#"
    ];
    /*
    $simple_banner_data->banner_name = "Banner Name";
    $simple_banner_data->background_image_url = "../_LIBS/images/image2.jpg";
    $simple_banner_data->content = "Some Banner Text";
    $simple_banner_data->button_content = "Click Me";
    $simple_banner_data->button_url = "#";*/
    include "../_INC/BANNERS/simple-banner/simple-banner.php";
    ?>  

    
<!-- ========================  ======================== -->
</body>


