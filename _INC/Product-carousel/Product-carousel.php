<?php 
    $carousel_data = array("A","B","C","D","E","F","G","H","I","J");
    $encoded_data = json_encode($carousel_data);
?>

<!-- VANILLA -->
<link rel="stylesheet" type="text/css" href="./_INC/Product-carousel/product-carousel.css"/>
<script type="application/javascript" src="./_INC/Product-carousel/product-carousel.js" defer></script>

<section class="product-carousel placeholder" id="product-carousel">
    <div class="placeholder" id="product-carousel-left-arrow">LEFT ARROW</div>
    <div class="product-carousel-content-track" data-card-content="<?php echo "$encoded_data" ?>">
        <?php 
        // foreach ($carousel_data as $card_data) {
        //     echo "
        //         <div class='carousel-card'>
        //             $card_data
        //         </div>
        //     ";
        // }
        ?>
        <div class='carousel-card'>
            A
        </div>
        <div class='carousel-card'>
            B
        </div>
        <div class='carousel-card'>
            C
        </div>
        <div class='carousel-card'>
            D
        </div>
        <div class='carousel-card'>
            E
        </div>
        <div class='carousel-card'>
            F
        </div>
        <div class='carousel-card'>
            G
        </div>
        <div class='carousel-card'>
            H
        </div>
        <div class='carousel-card'>
            I
        </div>
        <div class='carousel-card'>
            J
        </div>
    </div>
    <div class="placeholder" id="product-carousel-right-arrow">RIGHT ARROW</div>
</section>