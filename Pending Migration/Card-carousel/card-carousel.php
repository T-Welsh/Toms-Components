<?php 
    $carousel_data = array("A","B","C","D","E","F","G","H","I","J");
    $encoded_data = json_encode($carousel_data);
?>

<!-- VANILLA -->
<link rel="stylesheet" type="text/css" href="./_INC/Card-carousel/Card-carousel.css"/>
<script type="application/javascript" src="./_INC/Card-carousel/Card-carousel.js" defer></script>

<section class="card-carousel full-width placeholder" id="card-carousel">
    <div class="card-carousel-content-wrapper" data-card-content="<?php echo "$encoded_data" ?>">
    placeholder
        <?php 
        // foreach ($carousel_data as $card_data) {
        //     echo "
        //         <div class='carousel-card'>
        //             $card_data
        //         </div>
        //     ";
        // }
        ?>
    </div>
</section>