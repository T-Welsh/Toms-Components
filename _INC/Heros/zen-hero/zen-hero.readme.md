# Zen Hero Component v1.0.0

## Overview
A  Hero with a background image and heading set to the left
- z-index group: 900

## Data
Takes in data in the following format...
```

$zen_hero_data = (object)[
    'id' => 'id-hero-2',
    'image_url' => "../../_LIBS/images/image6.jpg",
    'overlay_color' => 'rgba(0,0,0,0.5)',
    'hero_height' => '90',
    'hero_content' => '<h1>Company Name</h1>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat, velit ac gravida bibendum.</p>
    <br>
    <span class="button">Learn More</span>
    '
];

```
- id --unique id for targenting specifin instance of component
- image_url --Sets the background image.
- overlay_color --Sets the color of the overlay making text easier to read
- hero_height --sets the height of the hero as a percentage of the viewport height
- hero_content --Sets the content displayed over top the the background image 

## CMS Controlls
### Processwire

## Todo