# Simple Banner Component

## Overview
Adds a simple call-to-action banner with a heading and button
- z-index group: 

## Data
Takes in data in the following format...

```

$simple_banner_data = (object)[
    'id' => 'banner1'
    'banner_heading' => "Banner Name",
    'background_image_url' => "../_LIBS/images/image2.jpg",
    'overlay_color' => 'transparent',
    'content' => "Some Banner Text",
    'button_content' => "Click Me",
    'button_url' => "#"
];

```
- id --unique id for targenting specific instance of component
- banner_heading --Sets the h2 text. This is a hidden element included for SEO/accessibility reasons 
- background_image_url --Sets the background image
- overlay_color --Sets the background overlay to make text easier to read
- content --Text to display inside a span element
- button_content --Button text 
- button_url --Linked address to go to on button click

## CMS Controlls
### Processwire

## Todo