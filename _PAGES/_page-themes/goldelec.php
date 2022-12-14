<?php
 include "../_page-inc/theme-head.php";
?>

<!-- Navbar -->
<link rel="stylesheet" type="text/css" href="../../_INC/Headers/simple-navbar/simple-navbar.css"/>
<script type="application/javascript" src="../../_INC/HEADERS/simple-navbar/simple-navbar.js" defer></script>
<?php
    $simple_nav_bar_data = (object)[
        'id' => "goldelec-navbar",
        'logo_url' => '../../_LIBS/images/Gold_Elec.svg',
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
    include "../../_INC/Headers/simple-navbar/simple-navbar.php";
?>

<!-- HERO -->
<link rel="stylesheet" type="text/css" href="../../_INC/Heros/split-hero/split-hero.css"/>
    <?php
        $split_hero_data = (object)[
            'id' => 'gold-elec-hero',
            'hero_height' => '70',
            'background_image_url' => '../../_LIBS/images/concept-electrician-tools-space-text.jpg',
            'container1' => (object) [
                'background_image_url' => '',
                'background_overlay' => 'rgb(0,0,0,0)',
                'content' => ''
            ],
            'container2' => (object) [
                'background_image_url' => '',
                'background_overlay' => 'rgb(0,0,0,0)',
                'content' => '    <div class="gold-elec-hero-card">
                <h1>Local Electricians in Berkshire</h1>
                <p>Trusted and Reliable, we can help you with the simplest of electrical problems to the full rewiring of your home.</p>
                <button class="elec-btn">Contact</button>
            </div>'
            ]
        ];
        include "../../_INC/Heros/split-hero/split-hero.php";
    ?>  

    <!-- About -->
    <link rel="stylesheet" type="text/css" href="../../_INC/CONTENT-BLOCKS/simple-content-block/simple-content-block.css"/>
    <?php
    
        $content_block_data = (object) [
            'id' => 'elec-about-content-block-1',
            'background_color' => '22,3,112,0',
            'justify_article' => 'top',
            'heading' => '',
            'column1' => '
                <h2>Expert knowledge of installing, maintaining and repairing all types of electrical works</h2>
                <br>
                <br>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat vitae tellus ac porta. Fusce maximus sem ac porttitor auctor. Morbi tempus libero quis turpis lacinia lobortis. Mauris a tempor lacus, sit amet vulputate massa. Donec tempor dui iaculis ante porta, et dignissim odio dapibus. Vestibulum venenatis lorem libero, vel porttitor nunc porta ut. Sed ut elit quis lacus volutpat scelerisque nec ac tortor.
                </p>
                <p>Suspendisse sed mollis nunc. In lobortis est ac tincidunt blandit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent libero augue, vehicula eget vulputate ac, auctor non nisl. Curabitur interdum dolor a arcu fermentum dictum et vitae purus. Ut vitae sem tempus, porttitor ante eu, congue ipsum. Suspendisse at magna sit amet dolor iaculis faucibus. In commodo est elementum velit pulvinar, non placerat arcu interdum. Morbi suscipit nibh vitae libero interdum rutrum. In ut nibh purus. Aenean hendrerit, magna eget interdum mollis, nisi elit rhoncus neque, a porttitor orci dui a sapien. Vivamus est purus, luctus quis nisi in, lacinia lacinia lectus.</p>
            '
        ];
        include "../../_INC/CONTENT-BLOCKS/simple-content-block/simple-content-block.php";
        
    ?>  

    <!-- banner 1 -->
    <link rel="stylesheet" type="text/css" href="../../_INC/BANNERS/simple-banner/simple-banner.css"/>
    <?php
    $simple_banner_data = (object)[
        'id' => 'elec-banner-1',
        'banner_name' => "Banner Name",
        'background_image_url' => "../../_LIBS/images/assembly-electrical-panel-electrician-job-robot-with-wires-circuit-breakers.jpg",
        'overlay_color' => 'rgb(22,3,112,0.5)',
        'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        'button_content' => "Call Today",
        'button_url' => "#"
    ];
    include "../../_INC/BANNERS/simple-banner/simple-banner.php";
    ?>  

    <!-- services -->
    <link rel="stylesheet" type="text/css" href="../_INC/CONTENT-BLOCKS/card-grid/card-grid.css"/>
    <?php
    
        $card_grid_data = (object)[
            'id' => "card-grid-1",
            'heading' => "<h2>Our Services</h2>",
            'cards' => [
                '<article>
                    <h3>Domestic Wiring</h3>
                    <p>Tag Line</p>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                    </ul>
                </article>',
                '<article>
                    <h3>Home Security Installation</h3>
                    <p>Tag Line</p>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                    </ul>
                </article>',
                '<article>
                    <h3>CARD HEADING 3</h3>
                    <p>Tag Line</p>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                    </ul>
                </article>',
                '<article>
                    <h3>CARD HEADING 4</h3>
                    <p>Tag Line</p>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                    </ul>
                </article>'
            ]
        ];
        include "../_INC/CONTENT-BLOCKS/card-grid/card-grid.php";
        
    ?>  

