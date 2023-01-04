<?php
// Purlin Navbar v1.0.0
/*
// DATA SCHEMA:
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
*/
?>

<style>
    <?php echo "#{$purlin_navbar_data->id}"; ?> {
        --tc-purlin-navbar-clr-txt: <?php echo $purlin_navbar_data->style->txt_clr; ?>;
        --tc-purlin-navbar-logo-width: <?php echo $purlin_navbar_data->style->logo_width; ?>;
        --tc-purlin-navbar-logo-contact-container-clr: <?php echo $purlin_navbar_data->style->container_1_clr; ?>;
        --tc-purlin-navbar-link-container-clr: <?php echo $purlin_navbar_data->style->container_2_clr; ?>;
    }
</style>

<header class='tc-purlin-navbar' id='<?php echo $purlin_navbar_data->id ?>' data-tc-topnav>
    <div class='tc-purlin-navbar-logo-contact-container'>
        <div class='tc-purlin-logo-wrapper'>
            <img src='<?php echo $purlin_navbar_data->logo_url ?>' alt='Logo'>
        </div>
        <div class='tc-purlin-contact-wrapper'>
            <?php
            
                if ($purlin_navbar_data->phone) {
                    $tellink = str_replace(' ', '', $purlin_navbar_data->phone);
                    echo "<a href=\"tel:+{$tellink}\">Tel: {$purlin_navbar_data->phone}</a>";
                }
            ?>
        </div>
        <div class='tc-purlin-navbar-toggle-wrapper'>
            <span class='tc-purlin-navbar-toggle-open'>
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>
            </span>
            <span class='tc-purlin-navbar-toggle-close'>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg>
            </span>
        </div>
    </div>

    <nav class='tc-purlin-navbar-link-container'>
        <ul>
            <?php
                foreach ($purlin_navbar_data->nav_links_1 as $link) {
                    echo "<li>";
                        echo "<a href='{$link->link_url}'>";
                            echo $link->name;
                        echo "</a>";
                    echo "</li>";
                }
            ?>
        </ul>
    </nav>

</header>

<div class='test-object'>

</div>