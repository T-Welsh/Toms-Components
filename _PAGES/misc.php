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
            'heading' => 'Get in Touch',
            'terms_url' => '#',
            'background_image_url' => '../_LIBS/images/image2.jpg',
            'background_overlay' => 'transparent'
        ];
        include "../_INC/Misc/simple-contact-form/simple-contact-form.php";
    ?>  
    <hr/>
    <!-- ======================== Go To Top Btn ======================== -->
    <h2 class='component-label'>Go To Top Button</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Misc/go-to-top-btn/go-to-top-btn.css"/>
    <script type="application/javascript" src="../_INC/Misc/go-to-top-btn/go-to-top-btn.js" defer></script>
    <?php
        $go_to_top_btn_data = (object)[
            'id' => 'go-to-top-btn-1',
            'scroll_trigger' => '10',
            'content' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/></svg>',
            'style' => (object)[
                'bottom_offset' => '10vh',
                'right_offset' => '5vw'
            ]
        ];
        include "../_INC/Misc/go-to-top-btn/go-to-top-btn.php";
    ?>  

    <hr/>
</body>