<?php
 include "./_page-inc/head.php";
?>

<body>
    <h1 class='component-label'>Toms Gallery Components</h1>
    <hr/>
    <!-- ======================== Carousel Gallery ======================== -->
    <h2 class='component-label'>Carousel Gallery</h2>
    <?php
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
        include "../_INC/Galleries/carousel-gallery/carousel-gallery.php";
    ?>  

    <hr/>
<!-- ========================  ======================== -->

</body>