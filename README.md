# Toms Components

## Dependancies
- jQuery
- slick js - required for carousel functionality

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

## TODO:
* [ ] Add Overlay to Simple-hero background image
* [ ] Add Overlay to simple-banner background image
* [ ] Rebuild Card grid to using flex
* [ ] Build Minimalist header
* [ ] Add front end tools to preview theme changes
* [ ] Add feature to select components and export a package containing required files and generated vars.php file
* [ ] Add Theme pages to demo complimentary components
* [ ] Add complete readmes for individual components

## Processwire
Generic processwire templates will contain the required fields so different styled components can be used interchangeably

## File Structure
main.css - contains css reset and utility classes
vars.php - contains css variables
toms-components.js - contains general javascript used by multiple components
_INC - Folder containing the individual component folders