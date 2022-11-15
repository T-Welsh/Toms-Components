<?php
/*
    // DATA SCHEMA:
        $carousel_gallery_data = (object)[
            'id' => 'Gallery 1',
            'heading' => 'Carousel Gallery'
            'cards' => [
                (object)[
                    'url' => '_LIBS/images/image1.jpg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '_LIBS/images/image2.jpg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '_LIBS/images/image3.jpg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '_LIBS/images/image4.jpg',
                    'alt' => 'image alt text'
                ],
                (object)[
                    'url' => '_LIBS/images/image5.jpg',
                    'alt' => 'image alt text'
                ]
            ]
        ];

*/
?>

<section class='tc-carousel-gallery' id="<?php echo $carousel_gallery_data->id ;?>">
    <h2><?php echo $carousel_gallery_data->heading ;?></h2>
    <div class='tc-carousel-gallery-content-container'>
        <?php
            foreach($carousel_gallery_data->cards as $card) {
                echo "<div class='tc-carousel-gallery-card'>" ;
                    //echo "<img src='{$card->url}' alt='{$card->alt}'>" ;
                    echo "<h3>{$card->alt}</h3>";
                echo "</div>" ;
            }
        ?>
    </div>
</section>
