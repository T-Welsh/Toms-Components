<?php
 include "./_page-inc/head.php";
?>

<body>
    <h1>Toms Content Blocks</h1>
    <hr/>
<!-- ======================== Simple Content Block ======================== -->
    <h2>Simple Content Block</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/CONTENT-BLOCKS/simple-content-block/simple-content-block.css"/>
    <?php
    
        $content_block_data = (object) [
            'id' => 'unique-id-here',
            'background_color' => '6,11,25',
            'justify_article' => 'top',
            'heading' => 'HTML element(s) containing the content to be echoed inside of the heading container <br> <br> ',
            'column1' => 'HTML element(s) containing the content to be echoed inside of the content container',
            'column2' => 'HTML element(s) containing the content to be echoed inside of the content container HTML element(s) containing the content to be echoed inside of the content container HTML element(s) containing the content to be echoed inside of the content container HTML element(s) containing the content to be echoed inside of the content container',
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

    <hr/>
<!-- ======================== Floating Content Block ======================== -->
    <h2>Floating Content Block</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/CONTENT-BLOCKS/floating-content-block/floating-content-block.css"/>
    <?php
    
        $floating_content_block_data = (object) [
            'id' => 'floating-content-block-id',
            'background_color' => '242,242,242',
            'image1_url' => '../_LIBS/images/image4.jpg',
            'image1_alt' => 'image 1',
            'image2_url' => '../_LIBS/images/image5.jpg',
            'image2_alt' => 'image 2',
            'float_style' => '2',
            'reversed' => false,
            'column1' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            '
        ];
        include "../_INC/CONTENT-BLOCKS/floating-content-block/floating-content-block.php";
        
    ?>  
    <hr/>
<!-- ======================== Split Content Block ======================== -->
    <h2>split Content Block</h2>
    <link rel="stylesheet" type="text/css" href="../_INC/CONTENT-BLOCKS/split-content-block/split-content-block.css"/>
    <?php
    
        $split_content_block_data = (object) [
            'id' => 'split-content-block-id',
            'background_color' => 'rgb(0,0,0,1)',
            'image1_url' => '../_LIBS/images/image4.jpg',
            'image1_alt' => 'image 1',
            'reversed' => true,
            'column1' => '<h2>Split Content Block</h2><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            '
        ];
        include "../_INC/CONTENT-BLOCKS/split-content-block/split-content-block.php";
        
    ?>  
    <hr/>
</body>