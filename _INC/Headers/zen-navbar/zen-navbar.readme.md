# Zen Navbar v1.0.1

## Overview
- z-index group: 1000

## Data
Takes in data in the following format...

```
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
```

## CMS Controlls
### Processwire

## Todo

## Changelog
### v1.0.1
- Fixed mavbar left and right properties to screen to 0
- Change navbar height to a css variable
