<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components Gallery</title>

    <!--jQuery-->
    <script type="application/javascript" src="./_LIBS/js/jquery-3.6.0.min.js" defer></script>

    <!--My Styles-->
    <link rel="stylesheet" href="./_LIBS/css/vars.php">
    <link rel="stylesheet" href="./_LIBS/css/main.css">

</head>
<body>
    <header>
        <h1>Toms Components</h1>
    </header>
    <nav>
        <ul>
            <li><a href="./_PAGES/navigation_bars.php">Navigation Bars</a></li>
            <li><a href="./_PAGES/heros.php">Heros</a></li>
            <li><a href="./_PAGES/content_blocks.php">Content Blocks</a></li>
            <li><a href="./_PAGES/galleries.php">Galleries</a></li>
            <li><a href="./_PAGES/banners.php">Banners</a></li>
            <li><a href="./_PAGES/misc.php">Misc</a></li>
            <li><a href="./_PAGES/footers.php">Footers</a></li>
        </ul>
    </nav>
    <!-- NAVBAR -->
    <?php include './_INC/Navbar/navbar.php' ?>
    <hr>
    <?php 

    // CALL TO ACTION
    $cta_background_url = "./_LIBS/images/image1.jpg";
    include "./_INC/Call-to-action-banner/call-to-action-banner.php" 
    ?>
    <hr>
    <?php 

    // CARD CAROUSEL
    $card_carousel_id = 1;
    include './_INC/Product-carousel/product-carousel.php' 
    ?>

</body>
</html>