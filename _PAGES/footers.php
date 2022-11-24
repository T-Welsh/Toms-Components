<?php
 include "./_page-inc/head.php";
?>

<body>
    <h1>Toms Footers</h1>
    <hr/>
<!-- ======================== 3 Column Footer ======================== -->
    <h2 class='component-label'>3 Column Footer</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/FOOTERS/3col-footer/3col-footer.css"/>
    <?php
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
        include "../_INC/FOOTERS/3col-footer/3col-footer.php";
    ?>  
    <hr>
<!-- ======================== 3 Column Footer ======================== -->
    <h2 class='component-label'>2 Column Footer</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/FOOTERS/2col-footer/2col-footer.css"/>
    <?php
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
                <p>Some longer text to test responsive syles while adding padding to this footer element</p>
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
        include "../_INC/FOOTERS/2col-footer/2col-footer.php";
    ?>  
</body>
