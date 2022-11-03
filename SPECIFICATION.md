# Specification

## Overview
- Provide a library of website components that are "Plug and Play".
- Created Using PHP, HTML, CSS and JS.
- Not tied to a single content managment system
- Able to be easily modified

## Design Approach
- Component will take in a pre-formated array of data
- Component styling will use variables to control colors, font-family, font-size etc.
- Each HTML Element will have its own variables set to global theme variables by default. eg. The navbar background-color is set to  var(--navbar-background-color) with --navbar-background-color being set to var(--clr-primary) by default.