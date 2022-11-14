<?php
 include "./_page-inc/head.php";
?>

<body>
    <h1 class='component-label'>Toms Headers</h1>
    <hr/>

<!-- ======================== Simple Navbar ======================== -->
<h2 class='component-label'>Simple Navbar</h2>
<link rel="stylesheet" type="text/css" href="../_INC/Headers/simple-navbar/simple-navbar.css"/>
<script type="application/javascript" src="../_INC/HEADERS/simple-navbar/simple-navbar.js" defer></script>
<?php
    $simple_nav_bar_data = (object)[
        'id' => "nav-bar-1",
        'logo_url' => '../_LIBS/images/logoipsum-215.svg',
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
<!-- ========================  ======================== -->
    <h2 class='component-label'>Girder Navbar</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/Headers/girder-navbar/girder-navbar.css"/>
    <script type="application/javascript" src="../_INC/HEADERS/girder-navbar/girder-navbar.js" defer></script>
    <?php
        $girder_nav_bar_data = (object)[
            'id' => "nav-bar-1",
            'logo_url' => '../_LIBS/images/logoipsum-215.svg',
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
</body>
