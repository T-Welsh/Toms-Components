# Carousel Gallery Component

## Overview
Adds a 3 card infinite image carousel with optional heading field.

On screen sizes larger than 600px (set in the js file), the carousel images will open a modal to display a lager version of the image when clicked.
- z-index group: 

## Data
Takes in data in the following format...

```

    $carousel_gallery_data = (object)[
        'id' => 'Gallery 1',
        'heading' => 'Carousel Gallery'
        'cards' => [
            (object)[
                'url' => '_LIBS/images/image1.jpg',
                'alt' => 'image alt text'
            ],
            (object)[
                'url' => '_LIBS/images/image2.jpg',
                'alt' => 'image alt text'
            ],
            (object)[
                'url' => '_LIBS/images/image3.jpg',
                'alt' => 'image alt text'
            ],
            (object)[
                'url' => '_LIBS/images/image4.jpg',
                'alt' => 'image alt text'
            ],
            (object)[
                'url' => '_LIBS/images/image5.jpg',
                'alt' => 'image alt text'
            ]
        ]
    ];

```
- id --unique id for targenting specific instance of component
- heading --Sets the content for the section heading 
- cards --Array of objects that will display in the carousel
- card->url -- Address of image to be displayed on carousel card
- card->alt --Image description

## CMS Controlls
### Processwire

## Todo

## Changelog
### 1.0.1
- Removes Flex-gap Property