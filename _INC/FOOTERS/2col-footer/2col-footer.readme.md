# 2 Column Footer Component

## Overview
Adds a 2 coumn footer.

The left hand column displays the provided logo and the right hand column displays provided HTML content 
- z-index group: 

## Data
Takes in data in the following format...

```

    $tc_2col_footer_data = (object)[
        'id' => 'pagefooter',
        'logo_url' =>  '../_LIBS/images/logoipsum-215.svg',
        'column1_content' => "
            <h2>Column One</h2>
            <ul>
                <li><a href=''>Item 1</a></li>
                <li><a href=''>Item 2</a></li>
                <li><a href=''>Item 3</a></li>
                <li><a href=''>Item 4</a></li>
            </ul>
        ",
        'facebook_url' => '#',
        'Instagram_url' => '#',
        'Twitter_url' => '#',
        'Linkedin_url' => '#',
        'Pinterest_url' => '#',
        'YouTube_url' => '#',
        'CheckaTrade_url' => '',
        'Houzz_url' => '',
        'copyright_content' => '<span>Website designed and developed by&nbsp; <a href="https://www.spi-des-ign.co.uk/">Spi-des-ign</a></span>',
        'privacy_policy_url' => '#',
        'terms_conditions_url' => '#'
    ];

```
- id --unique id for targenting specific instance of component
- heading --Sets the content for the section heading 
- cards --Array of objects that will display in the carousel
- card->url -- Address of image to be displayed on carousel card
- card->alt --Image description

## CMS Controlls
### Processwire

## Todo