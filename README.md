# Toms Components

## Dependancies
- jQuery
- slick js - required for carousel functionality
- jot form account - required for simple contact form component
- google api key - required for simple-google-map component

## Notes
- PHP include components are located in the /_INC folder
- The main.css and jquery files are located in the _LIBS folder these are common resources shared by many components
- Component specific css/js will be stored in the individual component folders
- css Variables are defined in the vars.css.php
- The simple-google-map component may require an api key to be added into the php file
- The simple jot form requires jot form generated code to be pasted into the php file

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
* [ ] Add option to set row length on card grid component
* [ ] Create Cards sub-component page.
* [ ] Rebuild Carousels in a different framework
* [ ] Rebuild Simple navbar
* [ ] Add data schema to each component
* [ ] Add front end tools to preview theme changes
* [ ] Add feature to select components and export a package containing required files and generated vars.php file
* [ ] Create tool to compile CSS/JS in to one file for production


## Processwire


## File Structure
main.css - contains css reset and utility classes
vars.php - contains css variables
toms-components.js - contains general javascript used by multiple components
_INC - Folder containing the individual component folders

## Ideas
- flex card grid
- floating contact chip
- rolladex contect cards
- combined hero/nav (like DLN electrical hero)