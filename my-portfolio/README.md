# Design documentation

## index (homepage)

### Preferences
Colors are green and dark blue (as seen in the favicon), with white text color.
All the code was from the tutorials in w3schools (used as reference), and also the web design book.

### Navbar design [HTML]
Very simple: nav tag, with an unordered `list` inside. In the unordered list (`ul`) we include list elements that each contain a link to a page of the site.

### Navbar design [CSS]
For the entire webpage, we set the `background-color` to dark blue. The font used was Montserrat, which was imported from google forms. It is set to the `font-family` of all elements. We set the `box-sizing` to `border-box`, which includes the padding and border to the width/height. Because of that, we set `margin` and `padding` to `0` for all elements to remove spaces around all elements (unless specified).

Next, for the `nav` elements (`list`, `link`, `button`) we set the font size to `16px`. We also set text-decoration to none to remove the underlining from the links.

Next, we need the links on the navigation bar to be arranged horizontally on the screen, so we set the display of the header to `flex` and `justify-content` to `space-between` and align the items to the center. This arranges the items in a row and centralizes them. To make the navbar taller, we set the `padding` on top to 30px. We also set the `padding` on the left and right to `10%` so that there is space to the left and right of all the nav elements. It is `10%` so that if you have a smaller screen then it will only be `10%` of your screen instead of taking up a lot of space. Adding the left and right padding also brings the navbar a little more to the center.

For the logo, we use `cursor:pointer` to make the cursor turn into a pointer (like a link) when the logo is hovered over. We also set the height of the logo to `50px` so that it is scaled to size and fits properly into the navbar (width is adjusted automatically).

Next up is the styles for the list items. We set the display to `inline` instead of the default `block` so that the elements do not enter new lines but stay on the same line. We then add `20px` padding to the left and right of the elements to add spaces between the nav links.

For the links, we give them a `transisiton` property so that changes made to the color is smooth, and we give it a time of `0.4s`. Therefore, if we use javascript to change the color of the link element then it will not immediately change to the desired color but will fade in `0.4s` to the new color. This is mainly used for the hover color, which is set to green on hover. We also have an `active` class given to the current webpage that we are in, so that if the user is in the home page, we can add the active class to the home page link to indicate that we are in the home page.

Finally, for the button, we add 9px top and bottom padding to create space between the text and the top/bottom of the button. We also add 25px left and right padding. This makes the button bigger and not tightly wrapped to the text. We also set the `border-radius` to `50`, which adds the rounded corners and makes the buttton look better. This button is used for all buttons in the webpage, including the one in the hero section below.

The button also has cursor set to pointer when hovered (same as the logo), and when hovered, the color changes slightly. We also use the same transisiton property that we used for the nav links so that the color changes smoothly.

### Hero section design [HTML]
The hero section image was made using [Doodav Pattern Generator](doodav.dev/pattern-generator/)

Two `div` elements inside each other, the parent `div` is for the background image and the child `div` is used to hold all the text elements that are to appear at the center of the image. In the child `div`, there's the `header` tag (with my name), a subtitle describing the things that I can do, and a button that links to the skills.

### Hero section design [CSS]
First order of business is to set `body` and `html` tags to 100% because most of the time the browser resizes them automatically because it expects a margin or padding, and that removes the background image and moves all the elements that should be in the center to the top (over the navbar).

Next is to add the link of the background image and set its height. `80%` was the height used because I wanted it to cover the entire page, and the extra `20%` was for the footer and the navbar.

Then I had to style the image. The position is set to center, so that the image is in the center of the screen. I also set the background size to `cover` so that it covers the entire `div` element (and isn't too big or too small). 

Next was to make the text elements stay in the center of the screen, which is the main use of the `div` that contains the text. By centralizing the `div`, all the elements inside it also are also centralized. We use top `50%` and left `50%` to move the text to the center, but the text is still slightly off the center. This is why I used `transform (-50%, -50%)`, which moves the `div` to the center to align with the center of the parent element (the image). 

Next, we set the background of all `h1` and `p` tags with `hero-text` class to transparent because, by default, they are set to dark blue (in the top of the css file) but we want it to be transparent in front of the image. The font size for the header is set to `2.5em`, which means 2.5 times the normal font size (which is `2em` for `h1`). This is used to make the text bigger.


## All other webppages [about, projects, skills]
These are just the same as the home page, with a hero section that is shorter than normal (`50%` instead of `80%`) and a thematic break.

The thematic break is set to be green, which is done by editing the border color of the tag.

Setting the line-height for the footer is used to make the footer have space  on top and bottom. It is similar to having a line break before and after the p tag.


##
## TODO
Create a contact popup using Javascript, and add Javascript functionalities.