# Card Carousel / multi item slider
base width of card on small mobile screen

- pass data array in from php as json through a data attribute
- take first 3 element in array and create cards use array index as key
- on right arrow click create a card for the next indexed element in array. transition all the cards to the left then remove the lowest indexed one.
- do the opposite on left arrow click


SLide 3 at a time
- get index highest index of currently displayed cards and use that to get the next 3 if next index is grater than array length then wrap back to the beginning
- do the opposite on left arrow

- generate cards init all with .hide util class
- use js to remove class .hide on first 3
- add and remove .hide on right arrow click

https://codepen.io/aybukeceylan/pen/RwrRPoO
https://codepen.io/onion2k/pen/xxZYBVj
https://www.jqueryscript.net/slider/Smooth-Card-Carousel-jQuery-CSS3.html
https://www.includehelp.com/html/how-to-make-a-multi-item-carousel-which-is-also-responsive-across-all-screens.aspx
https://tympanus.net/codrops/2012/12/31/how-to-create-a-simple-multi-item-slider/
https://css-tricks.com/a-super-flexible-css-carousel-enhanced-with-javascript-navigation/