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
                'link_url' => '#gold-elec-hero',
                'children' => []
            ],
            (object)[
                'name' => 'About',
                'link_url' => '#elec-about-content-block-1',
                'children' => []
            ],
            (object)[
                'name' => 'Services',
                'link_url' => '#goldelec-services-grid',
                'children' => []
            ],
            (object)[
                'name' => 'Contact',
                'link_url' => '#goldelec-form-1',
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
        'phone' => '',
        'mobile' => '',
        'email' => ''
    
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
    <link rel="stylesheet" type="text/css" href="../../_INC/Content-Blocks/simple-content-block/simple-content-block.css"/>
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
    <link rel="stylesheet" type="text/css" href="../../_INC/Banners/simple-banner/simple-banner.css"/>
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
    <link rel="stylesheet" type="text/css" href="../../_INC/CONTENT-BLOCKS/card-grid/card-grid.css"/>
    <?php
    
        $card_grid_data = (object)[
            'id' => "goldelec-services-grid",
            'heading' => "
            <h2>Our Services</h2>
            <br/>
            <br/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat vitae tellus ac porta. Fusce maximus sem ac porttitor auctor. Morbi tempus libero quis turpis lacinia lobortis. Mauris a tempor lacus, sit amet vulputate massa. Donec tempor dui iaculis ante porta, et dignissim odio dapibus. Vestibulum venenatis lorem libero, vel porttitor nunc porta ut. Sed ut elit quis lacus volutpat scelerisque nec ac tortor.<p/>
            <br/>
            <p>Suspendisse sed mollis nunc. In lobortis est ac tincidunt blandit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent libero augue, vehicula eget vulputate ac, auctor non nisl. Curabitur interdum dolor a arcu fermentum dictum et vitae purus.<p/>
            <br/>
            ",
            'cards' => [
                '<article>
                    <h3>Domestic Electrical Work</h3>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat vitae tellus ac porta. Morbi tempus libero quis turpis lacinia lobortis. Mauris a tempor lacus, sit amet vulputate massa.</p>
                    <br/>
                    <ul>
                        <li>+ Power & Lighting</li>
                        <li>+ Electrical Wiring</li>
                        <li>+ Electrical Heating & Ventilation</li>
                        <li>+ Domestic Security Systems</li>
                        <li>+ Data Cabling</li>
                        <li>+ Electrical Fault Finding</li>
                    </ul>
                    <br/>
                    <a href="#" class="elec-btn-alt">Enquire</a>
                    <br/>
                </article>',
                '<article>
                    <h3>Commercial Electrical Work</h3>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat vitae tellus ac porta. Morbi tempus libero quis turpis lacinia lobortis. Mauris a tempor lacus, sit amet vulputate massa.</p>
                    <br/>
                    <ul>
                        <li>+ PAT Testing</li>
                        <li>+ New Build Commercial Wiring</li>
                        <li>+ Commercial Refits</li>
                        <li>+ Fire Detection Installation</li>
                        <li>+ Commercial Wiring and Lighting Installation</li>
                        <li>+ Commercial Security System Installation</li>
                    </ul>
                    <br/>
                    <a href="#" class="elec-btn-alt">Enquire</a>
                    <br/>
                </article>',
                '<article>
                    <h3>Solar PV & Electric Vehical Charging</h3>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat vitae tellus ac porta. Fusce maximus sem ac porttitor auctor. Morbi tempus libero quis turpis lacinia lobortis. Mauris a tempor lacus, sit amet vulputate massa.</p>
                    <br/>
                    <p>Praesent libero augue, vehicula eget vulputate ac, auctor non nisl. Curabitur interdum dolor a arcu fermentum dictum et vitae purus. Ut vitae sem tempus, porttitor ante eu, congue ipsum. Suspendisse at magna sit amet dolor iaculis faucibus.</p>
                    <br/>
                    <a href="#" class="elec-btn-alt">Enquire</a>
                    <br/>
                </article>'
            ]
        ];
        include "../../_INC/Content-Blocks/card-grid/card-grid.php";
        
    ?>  

    <!-- banner 2 -->
    <!-- <link rel="stylesheet" type="text/css" href="../../_INC/BANNERS/simple-banner/simple-banner.css"/> -->
    <?php
    $simple_banner_data = (object)[
        'id' => 'elec-banner-2',
        'banner_name' => "Banner Name",
        'background_image_url' => "../../_LIBS/images/assembly-electrical-panel-electrician-job-robot-with-wires-circuit-breakers.jpg",
        'overlay_color' => 'rgb(22,3,112,0.5)',
        'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        'button_content' => "Call Today",
        'button_url' => "#"
    ];
    include "../../_INC/BANNERS/simple-banner/simple-banner.php";
    ?>  

     <!-- Pricing -->
     <link rel="stylesheet" type="text/css" href="../../_INC/CONTENT-BLOCKS/card-grid/card-grid.css"/>
    <?php
    
        $card_grid_data = (object)[
            'id' => "goldelec-pricing-grid",
            'heading' => "<h2>Pricing</h2>",
            'cards' => [
                '<article>
                    <h3>Per Hour</h3>
                    <hr/>
                    <p class="gePricing">£50</p>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat vitae tellus ac porta. Fusce maximus sem ac porttitor auctor. Morbi tempus libero quis turpis lacinia lobortis. Mauris a tempor lacus, sit amet vulputate massa.<p/>
                </article>',
                '<article>
                    <h3>Half Day</h3>
                    <hr/>
                    <p class="gePricing">£175</p>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat vitae tellus ac porta. Fusce maximus sem ac porttitor auctor. Morbi tempus libero quis turpis lacinia lobortis. Mauris a tempor lacus, sit amet vulputate massa.<p/>
                </article>',
                '<article>
                    <h3>Full Day</h3>
                    <hr/>
                    <p class="gePricing">£395</p>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat vitae tellus ac porta. Fusce maximus sem ac porttitor auctor. Morbi tempus libero quis turpis lacinia lobortis. Mauris a tempor lacus, sit amet vulputate massa.<p/>
                </article>'
            ]
        ];
        include "../../_INC/Content-Blocks/card-grid/card-grid.php";
        
    ?>  

    <!-- contact -->
    <?php
    $simple_contact_form_data = (object)[
        'id' => 'goldelec-form-1',
        'heading' => 'Get in Touch',
        'terms_url' => '#',
        'background_image_url' => '',
        'background_overlay' => 'transparent'
    ];
    include "../../_INC/Misc/simple-contact-form/simple-contact-form.php";
?>  

<?php
    $simple_google_map_data = (object)[
        'id' => 'goldelec-google-map-1',
        'marker' => (object)[
            'lat' => '52.230701',
            'lng' => '0.862048',
            'zoom' => '11'
        ],
        'script' => '../../_INC/Misc/simple-google-map/simple-google-map.js',
        'style' => '../../_INC/Misc/simple-google-map/simple-google-map.css'
    ];
    include "../../_INC/Misc/simple-google-map/simple-google-map.php";
?>  

<!-- Footer -->
<link rel="stylesheet" type="text/css" href="../../_INC/Footers/2col-footer/2col-footer.css"/>
    <?php
        $tc_2col_footer_data = (object)[
            'id' => 'goldelec-pagefooter',
            'logo_url' =>  '../../_LIBS/images/Gold_Elec.svg',
            'column1_content' => "
                <h2>Useful Links</h2>
                <ul>
                    <li><a href=''>About</a></li>
                    <li><a href=''>Services</a></li>
                    <li><a href=''>Pricing</a></li>
                    <li><a href=''>Contact</a></li>
                </ul>
                <p>Tel: 075 5555 5555</p>
                <p>Email: contact@GoldElec.co.uk</p>
            ",
            'facebook_url' => '#',
            'Instagram_url' => '#',
            'Twitter_url' => '#',
            'Linkedin_url' => '#',
            'Pinterest_url' => '#',
            'YouTube_url' => '#',
            'CheckaTrade_url' => '',
            'Houzz_url' => '',
            'copyright_content' => '<span>Website designed and developed by&nbsp; <a href="https://www.spi-des-ign.co.uk/">Spi-des-ign</a></span>',
            'privacy_policy_url' => '#',
            'terms_conditions_url' => '#'
        ];
        include "../../_INC/Footers/2col-footer/2col-footer.php";
    ?>  

