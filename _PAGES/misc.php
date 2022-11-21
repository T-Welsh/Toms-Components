<?php
 include "./_page-inc/head.php";
?>

<body>
    <h1 class='component-label'>Toms Misc. Components</h1>
    <hr/>
    <!-- ======================== Simple Google Map ======================== -->
    <h2 class='component-label'>Simple Google Map</h2>
    <!-- CSS & JS imports are contained within the simple-google-map.php file, their paths will need to be updated to reflect project file structure there-->
    <?php
        $simple_google_map_data = (object)[
            'id' => 'simple-google-map-1',
            'marker' => (object)[
                'lat' => '52.230701',
                'lng' => '0.862048',
                'zoom' => '11'
            ],
            'script' => '../_INC/Misc/simple-google-map/simple-google-map.js',
            'style' => '../_INC/Misc/simple-google-map/simple-google-map.css'
        ];
        include "../_INC/Misc/simple-google-map/simple-google-map.php";
    ?>  

    <hr/>
<!-- ========================  ======================== -->
    <h2 class='component-label'>Simple Contact Form</h2>
    <?php
        $simple_contact_form_data = (object)[
            'id' => 'simple-contact-form-1',
            'terms_url' => '#',
            'background_image_url' => '../_LIBS/images/image2.jpg',
            'background_overlay' => 'transparent'
        ];
        include "../_INC/Misc/simple-contact-form/simple-contact-form.php";
    ?>  
    <hr/>
</body>