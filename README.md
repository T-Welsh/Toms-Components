

## Notes
- PHP include components are located in the /_INC folder
- The main.css and jquery files are located in the _LIBS folder these are common resources shared by many components
- Component specific css/js will be stored in the individual component folders
- css Variables are defined in the vars.css.php

## Usage Instructions
- Copy the component php file to the includes folder in your project 
- Copy the css/js over to the relevent folder in your project and import into your index file (remember to check/update filepaths)
- Edit css variables as required

## Utility Classes
- placeholder: Adds basic styling to make elements easier to debug
- hide: sets display to none
- fullwidth: width property to 100vw
- button: styles element to look like a button (use with hover pseudo-class). Default vars:--text-alt, --highlight.

## Responsive Breakpoints
- Max 600px -Extra Small (Phones)
- Min 600px -Portrait tablets & large phones
- Min 768px -Landscape Tablets
- Min 992px -Small Laptops
- Min 1200px -Large Laptops & Desktops

## TODO:
- [] Check for, and remove gap;
- []finish Navbar
- []write readme for Product Carousel -create blog page