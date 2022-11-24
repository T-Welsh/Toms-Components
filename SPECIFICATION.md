# Specification

## Overview
- Provide a library of website components that are "Plug and Play".
- Created Using PHP, HTML, CSS and JS.
- Not tied to a single content managment system
- Able to be easily modified

## Design Approach
- Component will take in a pre-formated object of data
- Component styling will use variables to control colors, font-family, font-size etc.
- Each HTML Element will have its own variables set to global theme variables by default. eg. The navbar background-color is set to  var(--navbar-background-color) with --navbar-background-color being set to var(--clr-primary) by default.
- All CSS and JS code will be compiled into single CSS and JS files to reduce the number of requests on page load.
- CSS Code will be written inside of a PHP file to provide styling flexibility 