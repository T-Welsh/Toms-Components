<?php
 include "./_page-inc/head.php";
?>

<body>
    <h1 class='component-label'>Toms Gallery Components</h1>
    <hr/>
    <!-- ======================== Carousel Gallery ======================== -->
    <h2 class='component-label'>Carousel Gallery</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Carousels-and-Galleries/carousel-gallery/carousel-gallery.css"/>
    <script type="application/javascript" src="../_INC/Carousels-and-Galleries/carousel-gallery/carousel-gallery.js" defer></script>
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
        include "../_INC/Carousels-and-Galleries/carousel-gallery/carousel-gallery.php";
    ?>  

    <hr/>
<!-- ========================  ======================== -->
    <h2 class='component-label'>Testimonial Carousel</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Carousels-and-Galleries/testimonial-carousel/testimonial-carousel.css"/>
    <script type="application/javascript" src="../_INC/Carousels-and-Galleries/testimonial-carousel/testimonial-carousel.js" defer></script>
    <?php
            $testimonial_carousel_data = (object)[
                'id' => 'Gallery 2',
                'heading' => 'Testimonial Carousel',
                'background_image' => '../_LIBS/images/image5.jpg',
                'background_overlay' => '0,0,0,0.5',
                'cards' => [
                    (object)[
                        'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                        'caption' => 'Mr Paid Shill'
                    ],
                    (object)[
                        'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                        'caption' => 'Mr Paid Shill'
                    ],
                    (object)[
                        'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                        'caption' => 'Mr Paid Shill'
                    ],
                    (object)[
                        'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                        'caption' => 'Mr Paid Shill'
                    ],
                    (object)[
                        'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                        'caption' => 'Mr Paid Shill'
                    ],
                ]
            ];
    include "../_INC/Carousels-and-Galleries/testimonial-carousel/testimonial-carousel.php";
    ?>
</body>