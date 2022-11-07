<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components Gallery</title>

    <!--jQuery-->
    <script type="application/javascript" src="../_LIBS/js/jquery-3.6.0.min.js" defer></script>

    <!--My Styles-->
    <link rel="stylesheet" href="../_LIBS/css/vars.php">
    <link rel="stylesheet" href="../_LIBS/css/main.css">

</head>
<body>
    <h1>Toms Footers</h1>
    <hr/>
<!-- ======================== Simple Banner ======================== -->
    <h2>3 Column Footer</h2>
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

    
<!-- ========================  ======================== -->
    <hr/>
</body>
