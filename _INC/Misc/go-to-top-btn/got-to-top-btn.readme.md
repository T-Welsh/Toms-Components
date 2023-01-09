# Go To Top Button

## Overview
A floating button that takes the user back to the top of the page.
- z-index group: 1000

## Data
Takes in data in the following format...

```
$go_to_top_btn_data = (object)[
    'id' => 'go-to-top-btn-1',
    'scroll_trigger' => '10',
    'content' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/></svg>',
    'style' => (object)[
        'bottom_offset' => '10vh',
        'right_offset' => '5vw',
        'border_radius' => '25%',
        'border' => '1px solid black',
        'padding' => '0.5rem',
        'background_color' => 'rgb(255,0,255,1)',
        'color' => 'white'
    ]
]

```
- id --unique id for targeting specific instance of component
- scroll_trigger --how far a user needs to scroll down the page before the back to top button appears
- content --sets the internal html of the button.
- style
    +  bottom_offset --sets the position of the button from the bottom of the screen
    +  right_offset --sets the position of the button from the right side of the screen
    +  border_radius --sets the radius of the buttons corners
    +  border --sets the thickness, style, and color of the buttons border 
    +  padding --sets the internal padding of the button
    +  background_color --sets the background color of the button
    +  color --sets the text color

## CMS Controlls
### Processwire

## Todo
- add background color to data
- add dimensions to data
- border radius to data
- font color to data