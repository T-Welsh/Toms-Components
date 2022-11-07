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
    <link rel="stylesheet" href="../_LIBS/css/vars.php">
    <link rel="stylesheet" href="../_LIBS/css/main.css">

</head>
<body>
    <h1>Toms Banners</h1>
    <hr/>
<!-- ======================== Simple Banner ======================== -->
    <h2>Simple Banner</h2>

    <link rel="stylesheet" type="text/css" href="../_INC/BANNERS/simple-banner/simple-banner.css"/>
    <?php
    $simple_banner_data = (object)[
        'banner_name' => "Banner Name",
        'background_image_url' => "../_LIBS/images/image2.jpg",
        'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        'button_content' => "Click Me",
        'button_url' => "#"
    ];
    include "../_INC/BANNERS/simple-banner/simple-banner.php";
    ?>  

<!-- ========================  ======================== -->
    <hr/>
</body>


