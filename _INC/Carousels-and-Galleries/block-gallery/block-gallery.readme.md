# Block Gallery Component v1.0.0

## Overview

- z-index group: 

## Data
Takes in data in the following format...

```
$block_gallery_data = (object)[
    'id' => 'block-gallery-1',
    'heading' => 'Logo Ticker Heading',
    'images' => [
        (object)[
            'url' => '../_LIBS/images/image1.jpg',
            'alt' => 'image alt text'
        ],
        (object)[
            'url' => '../_LIBS/images/image2.jpg',
            'alt' => 'image alt text'
        ],
        (object)[
            'url' => '../_LIBS/images/image3.jpg',
            'alt' => 'image alt text'
        ],
        (object)[
            'url' => '../_LIBS/images/image4.jpg',
            'alt' => 'image alt text'
        ],
        (object)[
            'url' => '../_LIBS/images/image5.jpg',
            'alt' => 'image alt text'
        ]
    ]
];
```
- id --unique id for targeting specific instance of component
- heading -- not currently used
- images --array of image objects
    + url --image url
    + alt --image alt text

## CMS Controlls
### Processwire

## Todo

## Changelog
### 1.0.1
