<?php
 include "./_page-inc/head.php";
?>

<body>
    <h1 class='component-label'>Toms Headers</h1>
    <hr/>

<!-- ======================== Simple Navbar ======================== -->
<h2 class='component-label'>Simple Navbar</h2>
<link rel="stylesheet" type="text/css" href="../_INC/Headers/simple-navbar/simple-navbar.css"/>
<!-- Disabled simple navbar scripts as throwing errors -->
<script type="application/javascript" src="../_INC/HEADERS/simple-navbar/simple-navbar.js" defer></script>
<?php
    $simple_nav_bar_data = (object)[
        'id' => "nav-bar-1",
        'logo_url' => '../_LIBS/images/logoipsum-215.svg',
        'home_url' => '#',
        'nav_links' => [
            (object)[
                'name' => 'Home',
                'link_url' => '#',
                'children' => []
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
                'link_url' => '#',
                'children' => []
            ],
            (object)[
                'name' => 'Contact',
                'link_url' => '#',
                'children' => []
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
<!-- ======================== Girder Navbar ======================== -->
    <h2 class='component-label'>Girder Navbar</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Headers/girder-navbar/girder-navbar.css"/>
    <script type="application/javascript" src="../_INC/HEADERS/girder-navbar/girder-navbar.js" defer></script>
    <?php
        $girder_nav_bar_data = (object)[
            'id' => "nav-bar-1",
            'logo_url' => '../_LIBS/images/logoipsum-215.svg',
            'home_url' => '#',
            'nav_links_1' => [
                (object)[
                    'name' => 'About',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Portfolio',
                    'link_url' => '#',
                    'children' => []
                ]
                ],
                'facebook_url' => '#',
                'Instagram_url' => '#',
                'Twitter_url' => '#',
                'Linkedin_url' => '#',
                'Pinterest_url' => '#',
                'YouTube_url' => '#',
                'CheckaTrade_url' => '',
                'Houzz_url' => '' ,
                'nav_links_2' => [
                    (object)[
                        'name' => 'Contact',
                        'link_url' => '#',
                        'children' => []
                    ]
                    ],   
        ];
        include "../_INC/Headers/girder-navbar/girder-navbar.php";
    ?>
    <hr/>
    <!-- ======================== Minimalist Navbar ======================== -->
    <h2 class='component-label'>Minimalist Navbar</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Headers/minimalist-navbar/minimalist-navbar.css"/>
    <script type="application/javascript" src="../_INC/Headers/minimalist-navbar/minimalist-navbar.js" defer></script>
    <?php
        $minimalist_navbar_data = (object)[
            'id' => "nav-bar-1",
            'logo_url' => '../_LIBS/images/logoipsum-215.svg',
            'home_url' => '#',
            'nav_links_1' => [
                (object)[
                    'name' => 'About',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Portfolio',
                    'link_url' => '#',
                    'children' => []
                ]
            ],
            'contact_info' => [
                (object)[
                    'name' => '0755 555 5555',
                    'link_url' => '07555555555',
                ]
            ]  
        ];
        include "../_INC/Headers/minimalist-navbar/minimalist-navbar.php";
    ?>
    <hr/>

    <!-- ======================== Zen Navbar ======================== -->
    <h2 class='component-label'>Zen Navbar</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Headers/zen-navbar/zen-navbar.css"/>
    <script type="application/javascript" src="../_INC/Headers/zen-navbar/zen-navbar.js" defer></script>
    <?php
        $zen_navbar_data = (object)[
            'id' => "zen-nav-bar-1",
            'background_color'=> 'rgba(0,0,0,0.3)',
            'backdrop_blur' => '5',
            'panel_angle' => '5',
            'panel_color' => 'rgba(0,0,0,0.6)',
            'logo_url' => '../_LIBS/images/logoipsum-289.svg',
            'home_url' => '#',
            'nav_links_1' => [
                (object)[
                    'name' => 'About',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Services',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'News',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Portfolio',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Contact',
                    'link_url' => '#',
                    'children' => []
                ]
            ],
            'phone' => '075 5555 5555',
            'email' => 'Email@email.com',
            'facebook_url' => '#',
            'Instagram_url' => '#',
            'Twitter_url' => '#',
            'Linkedin_url' => '#',
            'Pinterest_url' => '#',
            'YouTube_url' => '#',
            'CheckaTrade_url' => '',
            'Houzz_url' => ''
            
        ];
        include "../_INC/Headers/zen-navbar/zen-navbar.php";
    ?>

    <hr/>
    <!-- ======================== Purlin Navbar ======================== -->
    <h2 class='component-label'>Purlin Navbar</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Headers/purlin-navbar/purlin-navbar.css"/>
    <script type="application/javascript" src="../_INC/Headers/purlin-navbar/purlin-navbar.js" defer></script>
    <?php
        $purlin_navbar_data = (object)[
            'id' => "purlin-nav-bar-1",
            'logo_url' => '../_LIBS/images/logoipsum-289.svg',
            'home_url' => '#',
            'nav_links_1' => [
                (object)[
                    'name' => 'About',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Services',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'News',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Portfolio',
                    'link_url' => '#',
                    'children' => []
                ],
                (object)[
                    'name' => 'Contact',
                    'link_url' => '#',
                    'children' => []
                ]
            ],
            'phone' => '075 5555 5555',
            'style' => (object)[
                'container_1_clr' => '0,0,0',
                'container_2_clr' => '50,50,50',
                'txt_clr' => '255,255,255',
                'logo_width' => '200px'
            ] 
        ];
        include "../_INC/Headers/purlin-navbar/purlin-navbar.php";
    ?>
    <hr/>
</body>
