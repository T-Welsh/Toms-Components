<?php
//Logo Ticker v1.0.0
//Schema
/*
    $carousel_gallery_data = (object)[
        'id' => 'Gallery 1',
        'heading' => 'Carousel Gallery',
        'cards' => [
            (object)[
                'url' => '../_LIBS/images/image1.jpg',
                'alt' => 'image alt text'
            ],
            (object)[
                'url' => '../_LIBS/images/image2.jpg',
                'alt' => 'image alt text'
            ],
            (object)[
                'url' => '../_LIBS/images/image3.jpg',
                'alt' => 'image alt text'
            ],
            (object)[
                'url' => '../_LIBS/images/image4.jpg',
                'alt' => 'image alt text'
            ],
            (object)[
                'url' => '../_LIBS/images/image5.jpg',
                'alt' => 'image alt text'
            ]
        ]
    ];
*/
?>

<section class="tc-logo-ticker" id="<?php echo $logo_ticker_data->id ;?>">
    <h2><?php echo $logo_ticker_data->heading ;?></h2>
    <div class="tc-logo-ticker-content-container">
        <?php
            foreach($logo_ticker_data->cards as $card) {
                echo "<div class='tc-logo-ticker-card'>" ;
                    echo "<img src='{$card->url}' alt='{$card->alt}'>" ;
                echo "</div>" ;
            }
        ?>
    </div>
</section>