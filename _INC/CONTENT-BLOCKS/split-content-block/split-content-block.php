<?php
//Split Content Block v1.0.0
//Schema
/*
$split_content_block_data = (object) [
    'id' => 'split-content-block-id',
    'background_color' => 'rgb(242,242,242,1)',
    'image1_url' => '../_LIBS/images/image4.jpg',
    'image1_alt' => 'image 1',
    'reversed' => false,
    'column1' => '</h2>Split Content Block</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
    '
];
*/
?>

<section class="tc-split-content-block" id="<?php echo $split_content_block_data->id; ?>"
style="
background-color: <?php echo $split_content_block_data->background_color; ?>;
"
>

    <div class="tc-split-content-block-text-container"
    style="
    <?php if($split_content_block_data->reversed) {
        echo "order:1;";
        echo "border-left: 1px solid rgb(255,255,255,0.8);";
        };
    ?>
    "
    >
        <?php echo $split_content_block_data->column1; ?>
    </div>

    <div class="tc-split-content-block-img-container"
    style="
    background: url(<?php echo $split_content_block_data->image1_url; ?>);
    background-position: center 20%;
    background-size: cover;
    background-repeat: no-repeat;
    <?php if(!$split_content_block_data->reversed) {
        echo "border-left: 1px solid rgb(255,255,255,0.8);";
        };
    ?>
    "
    >
    </div>

</section>