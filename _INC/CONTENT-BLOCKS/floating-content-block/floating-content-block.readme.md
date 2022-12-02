# Floating-Content-block Component

## Overview
Adds a 1 column text block with 2 images floating to either the left or right side.
- z-index group: 100

## Data
Takes in data in the following format...

```
    $floating_content_block_data = (object) [
        'id' => 'floating-content-block-id',
        'background_color' => '6,11,25',
        'image1_url' => '../_LIBS/images/image4.jpg',
        'image1_alt' => '',
        'image2_url' => '../_LIBS/images/image5.jpg',
        'image2_alt' => '',
        'float_style'=> '1',
        'reversed' => true,
        'column1' => '<p>HTML element(s) containing the content to be echoed inside of the content container</p>'
    ];
```
- id --unique id for targenting specifin instance of component
- background_color --Sets the background color of component instance using RGB values. Will default to theme styling if left empty.
- image1_url --Sets the address of the first image
- image1_alt --Sets the alt text of the first image
- image2_url --Sets the address of the second image
- image2_alt --Sets the alt text of the second image
- float_style --controls the image offset style 
    + 1 --Images aligned vertically
    + 2 --Images off set diagonally right to left
    + 3 --Images off set diagonally left to right
    + 4 --Images of different sizes and off set diagonally right to left
    + 5 --Images of different sizes and off set diagonally left to right
- reversed --Displays images on rightand text on left if true
- column1 --Sets the content for column1

## CMS Controlls
### Processwire

## Todo