# Simple Navbar Component
A nav bar that shows the company logo and contact details with nav-links below.

Customisable properties are set by passing in data via the component data object to the locally scoped css variables defined in purin-navbar.php this allows css variables to be defined foe each instance of the component.

## Overview
- z-index group: 1000

## Data
Takes in data in the following format...

```
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
```

## CMS Controlls
### Processwire

## Todo
