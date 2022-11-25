https://swiperjs.com/

# Logo Ticker Component

## Overview
Adds an infinite, auto scrolling logo ticker.
- z-index group: 

## Data
Takes in data in the following format...

```

$logo_ticker_data = (object)[
    'id' => 'Logo-ticker-1',
    'heading' => 'Logo Ticker Heading',
    'cards' => [
        (object)[
            'url' => '../_LIBS/images/logoipsum-226.svg',
            'alt' => 'image alt text'
        ],
        (object)[
            'url' => '../_LIBS/images/spi-des-ign_logo_final.png',
            'alt' => 'image alt text'
        ],
        (object)[
            'url' => '../_LIBS/images/logoipsum-289.svg',
            'alt' => 'image alt text'
        ],
        (object)[
            'url' => '../_LIBS/images/logoipsum-230.svg',
            'alt' => 'image alt text'
        ],
        (object)[
            'url' => '../_LIBS/images/logoipsum-241.svg',
            'alt' => 'image alt text'
        ]
    ]
];

```
- id --unique id for targenting specific instance of component
- heading --Sets the content for the section heading 
- cards --Array of objects that will display in the carousel
- card->url -- Address of logo to be displayed on carousel card
- card->alt --Image description

## CMS Controlls
### Processwire

## Todo
* [ ] Rebuild in https://swiperjs.com/ as slick seems to have been abandoned. (Issues whith white space on infinite loop), https://github.com/kenwheeler/slick/issues/1207