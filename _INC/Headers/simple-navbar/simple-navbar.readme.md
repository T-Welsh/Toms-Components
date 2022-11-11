# Simple Navbar Component
A simple header that includes a social banner, logo, and nav-links.

The Relevent social media icons and contact info will display automatically if a link is provided.
Supported social media:
- Facebook
- Instagram
- Twitter
- Linkedin
- Pinterest
- YouTube
Social bar also includes:
- Telephone
- Mobile
- Email

## Overview
- z-index group: 1000

## Data
Takes in data in the following format...

```
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
```

## CMS Controlls
### Processwire

## Todo
