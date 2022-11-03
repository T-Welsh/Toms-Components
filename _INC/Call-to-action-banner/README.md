# Call to Action Banner
A simple call to action banner that can be used multiple times on the same page.

## Usage
- Add [$cta_background_url = "/site/assets/files/1015/backgroung-image.jpg";] on the line above the include to set the background image, if not set then the background will default to var(--background-main). 
- The call to action button is styled using the .button util class in main.css

## CSS Variables
### --background-main: 
- Sets the color of the banner background if no background url is provided
- Sets the color of the image overlay gradient (inline style found in php file)
### --text-main:
- Sets the color of the h2 text

## Process Wire Fields
- $page->call-to-action-text: sets the call to action h2 text.