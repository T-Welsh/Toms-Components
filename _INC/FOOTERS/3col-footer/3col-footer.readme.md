# 3 Column Footer Component

## Overview
Adds a 3 column footer. 

Social media badges will be displayed if a url is provided.
- z-index group: 

## Data
Takes in data in the following format...

```

$tc_3col_footer_data = (object)[
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
    'column2_content' => "
        <h2>Column Two</h2>
        <ul>
            <li><a href=''>Item 1</a></li>
            <li><a href=''>Item 2</a></li>
            <li><a href=''>Item 3</a></li>
            <li><a href=''>Item 4</a></li>
        </ul>
    ",
    'column3_content' => "
        <h2>Column Three</h2>
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
- logo_url --Address of the log to be displayed
- column1_content --HTML to be siplayed in column 1
- column2_content --HTML to be siplayed in column 2
- column3_content --HTML to be siplayed in column 3



## CMS Controlls
### Processwire

## Todo