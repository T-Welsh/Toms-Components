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
                        'testimonial' => "<p>This company listens to everything i want and delivers exactly that. Really Long testimonials are a waste of everyones time but people insist on using them so the CSS needs to take that into account. Seriously though who reads this sort of nonsense. It's not like business owners will publish a poor review to their site.</p>",
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

    <hr>
    <!-- ======================== Logo Ticker ======================== -->
    <h2 class='component-label'>Logo Ticker</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Carousels-and-Galleries/logo-ticker/logo-ticker.css"/>
    <script type="application/javascript" src="../_INC/Carousels-and-Galleries/logo-ticker/logo-ticker.js" defer></script>
    <?php
            $logo_ticker_data = (object)[
                'id' => 'Logo-ticker-1',
                'heading' => 'Logo Ticker Heading',
                'cards' => [
                    (object)[
                        'url' => '../_LIBS/images/logoipsum-226.svg',
                        'alt' => 'image alt text'
                    ],
                    (object)[
                        'url' => '../_LIBS/images/spi-des-ign_logo_final.png',
                        'alt' => 'image alt text'
                    ],
                    (object)[
                        'url' => '../_LIBS/images/logoipsum-289.svg',
                        'alt' => 'image alt text'
                    ],
                    (object)[
                        'url' => '../_LIBS/images/logoipsum-230.svg',
                        'alt' => 'image alt text'
                    ],
                    (object)[
                        'url' => '../_LIBS/images/logoipsum-241.svg',
                        'alt' => 'image alt text'
                    ]
                ]
            ];
    include "../_INC/Carousels-and-Galleries/logo-ticker/logo-ticker.php";
    ?>

    <hr>
</body>