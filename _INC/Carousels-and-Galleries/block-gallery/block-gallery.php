<?php
// Block Gallery v1.0.0
/*
        $block_gallery_data = (object)[
            'id' => 'block-gallery-1',
            'heading' => 'Logo Ticker Heading',
            'images' => [
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

<section class="tc-block-gallery" id="<?php echo $block_gallery_data->id;?>">
    <?php
        foreach ($block_gallery_data->images as $image) {
            echo "<img src='{$image->url}' alt='{$image->alt}'>";
        }
    ?>
</section>

