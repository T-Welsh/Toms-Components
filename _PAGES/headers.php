<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components Gallery</title>

    <!--jQuery-->
    <script type="application/javascript" src="../_LIBS/js/jquery-3.6.0.min.js" defer></script>

    <!--My Styles-->
    <link rel="stylesheet" href="../_LIBS/css/vars.php">
    <link rel="stylesheet" href="../_LIBS/css/main.css">

</head>
<body>
    <h1>Toms Headers</h1>
    <hr/>
<!-- ======================== Simple Nav Bar ======================== -->
    <!-- <h2>Simple Nav Bar</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Headers/simple-nav-bar/simple-nav-bar.css"/>
    <script type="application/javascript" src="../_INC/HEADERS/simple-nav-bar/simple-nav-bar.js" defer></script> -->

    <?php
    /*$simple_nav_bar_data = (object)[
        'id' => "nav-bar-1",
        'logo_url' => '../_LIBS/images/logoipsum-215.svg',
        'nav_links' => [
            (object)[
                'name' => 'Home',
                'link_url' => '#'
            ],
            (object)[
                'name' => 'About',
                'link_url' => '#'
            ],
            (object)[
                'name' => 'Services',
                'link_url' => '#',
                'children' => [
                    (object)[
                        'name' => 'Child Link',
                        'link_url' => '#'
                    ],
                    (object)[
                        'name' => 'Child Link',
                        'link_url' => '#'
                    ],
                    (object)[
                        'name' => 'Child Link',
                        'link_url' => '#'
                    ]
                ]
            ],
            (object)[
                'name' => 'News',
                'link_url' => '#'
            ],
            (object)[
                'name' => 'Contact',
                'link_url' => '#'
            ]
        ],
        'facebook_url' => '#',
        'Instagram_url' => '#',
        'Twitter_url' => '#',
        'Linkedin_url' => '#',
        'Pinterest_url' => '#',
        'YouTube_url' => '#',
        'CheckaTrade_url' => '',
        'Houzz_url' => '',
        'phone' => '01234 567 890',
        'mobile' => '075 5555 5555',
        'email' => 'example@email.com'
    
    ];*/
    //include "../_INC/Headers/simple-nav-bar/simple-nav-bar.php";
    ?>  
    <!-- <hr/> -->
    
<!-- ======================== Simple Navbar ======================== -->
<h2>Simple Navbar</h2>
<link rel="stylesheet" type="text/css" href="../_INC/Headers/simple-navbar/simple-navbar.css"/>
<script type="application/javascript" src="../_INC/HEADERS/simple-navbar/simple-navbar.js" defer></script>
<?php
    $simple_nav_bar_data = (object)[
        'id' => "nav-bar-1",
        'logo_url' => '../_LIBS/images/logoipsum-215.svg',
        'nav_links' => [
            (object)[
                'name' => 'Home',
                'link_url' => '#'
            ],
            (object)[
                'name' => 'About',
                'link_url' => '#',
                'children' => [
                    (object)[
                        'name' => 'Child Link',
                        'link_url' => 'google.com'
                    ],
                    (object)[
                        'name' => 'Child Link',
                        'link_url' => 'yahoo.com'
                    ],
                    (object)[
                        'name' => 'Child Link',
                        'link_url' => '#'
                    ]
                ]
            ],
            (object)[
                'name' => 'Services',
                'link_url' => '#',
                'children' => [
                    (object)[
                        'name' => 'Child Link',
                        'link_url' => '#'
                    ],
                    (object)[
                        'name' => 'Child Link',
                        'link_url' => '#'
                    ],
                    (object)[
                        'name' => 'Child Link',
                        'link_url' => '#'
                    ]
                ]
            ],
            (object)[
                'name' => 'News',
                'link_url' => '#'
            ],
            (object)[
                'name' => 'Contact',
                'link_url' => '#'
            ]
        ],
        'facebook_url' => '#',
        'Instagram_url' => '#',
        'Twitter_url' => '#',
        'Linkedin_url' => '#',
        'Pinterest_url' => '#',
        'YouTube_url' => '#',
        'CheckaTrade_url' => '',
        'Houzz_url' => '',
        'phone' => '01234 567 890',
        'mobile' => '075 5555 5555',
        'email' => 'example@email.com'
    
    ];
    include "../_INC/Headers/simple-navbar/simple-navbar.php";
?>
    <hr/>
<!-- ========================  ======================== -->
</body>
