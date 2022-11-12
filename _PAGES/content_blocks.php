<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components Gallery | Content Blocks</title>

    <!--jQuery-->
    <script type="application/javascript" src="../_LIBS/js/jquery-3.6.0.min.js" defer></script>

    <!--My Styles-->
    <link rel="stylesheet" href="../_LIBS/css/tc-styling-control.css">
    <link rel="stylesheet" href="../_LIBS/css/vars.php">
    <link rel="stylesheet" href="../_LIBS/css/main.css">

</head>
<body>
    <h1>Toms Content Blocks</h1>
    <hr/>
<!-- ======================== Simple Content Block ======================== -->
    <h2>Simple Content Block</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/CONTENT-BLOCKS/simple-content-block/simple-content-block.css"/>
    <?php
    
        $content_block_data = (object) [
            'id' => 'unique-id-here',
            'heading' => 'HTML element(s) containing the content to be echoed inside of the heading container',
            'column1' => 'HTML element(s) containing the content to be echoed inside of the content container',
            'column2' => 'HTML element(s) containing the content to be echoed inside of the content container',
            'column3' => 'HTML element(s) containing the content to be echoed inside of the content container'
        ];
        include "../_INC/CONTENT-BLOCKS/simple-content-block/simple-content-block.php";
        
    ?>  
    <hr>
<!-- ======================== Card Grid ======================== -->
<h2>Card Grid</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/CONTENT-BLOCKS/card-grid/card-grid.css"/>
    <?php
    
        $card_grid_data = (object)[
            'id' => "card-grid-1",
            'heading' => "<h2>HTML block containing section heading/blurb</h2>",
            'cards' => [
                '<article>
                    <h3>CARD HEADING 1</h3>
                    <p>Tag Line</p>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                    </ul>
                </article>',
                '<article>
                    <h3>CARD HEADING 2</h3>
                    <p>Tag Line</p>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                    </ul>
                </article>',
                '<article>
                    <h3>CARD HEADING 3</h3>
                    <p>Tag Line</p>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                    </ul>
                </article>',
                '<article>
                    <h3>CARD HEADING 4</h3>
                    <p>Tag Line</p>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                    </ul>
                </article>'
            ]
        ];
        include "../_INC/CONTENT-BLOCKS/card-grid/card-grid.php";
        
    ?>  

<!-- ========================  ======================== -->
    <hr/>
</body>