# Testimonial Carousel Component

## Overview
Adds a basic testimonial carousel that auto scrolls every 12 seconds

- z-index group: 800

## Data
Takes in data in the following format...

```

    $testimonial_carousel_data = (object)[
        'id' => 'Gallery 2',
        'heading' => 'Testimonial Carousel',
        'background_image' => '../_LIBS/images/image5.jpg',
        'background_overlay' => '0,0,0,0.5',
        'cards' => [
            (object)[
                'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                'caption' => 'Mr Paid Shill'
            ],
            (object)[
                'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                'caption' => 'Mr Paid Shill'
            ],
            (object)[
                'testimonial' => "<p>This company listens to everything i want and delivers exactly that. Really Long testimonials are a waste of everyones time but people insist on using them so the CSS needs to take that into account. Seriously though who reads this sort of nonsense. It's not like business owners will publish a poor review to their site.</p>",
                'caption' => 'Mr Paid Shill'
            ],
            (object)[
                'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                'caption' => 'Mr Paid Shill'
            ],
            (object)[
                'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                'caption' => 'Mr Paid Shill'
            ],
        ]
    ];

```
- id --unique id for targenting specific instance of component
- heading --Sets the content for the section h2 heading 
- background_image --add a static back ground image to the section
- cards --Array of objects that will display in the carousel
- card->testimonial --html elements to be displayed as the main body of the testimonial card
- card->caption --A string containing the name of the person who gave the testimonial

## CMS Controlls
### Processwire

## Todo