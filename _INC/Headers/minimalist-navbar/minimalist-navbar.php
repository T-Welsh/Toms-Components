<?php
/*
    // DATA SCHEMA:
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
*/
?>

<header class="tc-minimalist-navbar" data-tc-topnav>

    <div class="tc-minimalist-navbar-logo-wrapper">
        <a href="<?php echo $minimalist_navbar_data->home_url ;?>"><img src="<?php echo $minimalist_navbar_data->logo_url ;?>" alt="Company Logo"></a>
    </div>

    <nav class="tc-minimalist-navbar-navigation-container" aria-expanded="false">
        <ul role='list'>
            <?php
                foreach ($minimalist_navbar_data->nav_links_1 as $link) {
                    echo "<li class=tc-minimalist-navbar-link-item>";
                        echo "<a href='{$link->link_url}'>";
                        echo $link->name;
                        echo "</a>";
                    echo "</li>";
                }
            ?>
        </ul>
    </nav>

    <div class="tc-minimalist-navbar-contact-container">
        <ul role='list'>
            <?php
                foreach ($minimalist_navbar_data->contact_info as $link) {
                    echo "<li class=tc-minimalist-navbar-link-item>";
                        echo "<a href='tel:{$link->link_url}'>";
                        echo $link->name;
                        echo "</a>";
                    echo "</li>";
                }
            ?>
        </ul>  
    </div>

    <div class='tc-minimalist-navbar-tray-btn-wrapper'>
        <button class='tc-minimalist-navbar-tray-btn' >
            <div></div>
            <div></div>
        </button>
    </div>

</header>