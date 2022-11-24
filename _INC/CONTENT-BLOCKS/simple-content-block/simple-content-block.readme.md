# Content-block Component

## Overview
Adds 1,2, or 3 column text blocks to page. The component will atomatically render 1,2 or 3 columns depending on the data provided, empty data objects will not render.
- z-index group: 

## Data
Takes in data in the following format...

```
    $content_block_data = (object) [
        'id' => 'unique-id-here',
        'background_color' => '6,11,25',
        'heading' => 'HTML element(s) containing the content to be echoed inside of the heading container',
        'column1' => 'HTML element(s) containing the content to be echoed inside of the content container',
        'column2' => 'HTML element(s) containing the content to be echoed inside of the content container',
        'column3' => 'HTML element(s) containing the content to be echoed inside of the content container'
    ]
```
- id --unique id for targenting specifin instance of component
- background_color --Sets the background color of component instance using RGB values. Will default to theme styling if left empty.
- heading --Sets the content for the section heading 
- column1 --Sets the content for column1
- column2 --Sets the content for column2
- column3 --Sets the content for column3

## CMS Controlls
### Processwire

## Todo