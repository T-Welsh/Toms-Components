<?php
//Floating Content Block v1.0.0
/*
    $floating_content_block_data = (object) [
        'id' => 'floating-content-block-id',
        'background_color' => '6,11,25',
        'image1_url' => '../_LIBS/images/image4.jpg',
        'image1_alt' => '',
        'image2_url' => '../_LIBS/images/image5.jpg',
        'image2_alt' => '',
        'float_style'=> '1',
        'reversed' => true,
        'column1' => '<p>HTML element(s) containing the content to be echoed inside of the content container</p>'
    ];
*/
?>

<section class='tc-floating-content-block' id="<?php echo $floating_content_block_data->id;?>" data-float-style="<?php echo $floating_content_block_data->float_style;?>"
<?php
if ($floating_content_block_data->reversed) {
    echo "data-reversed";
}
?>
>

    <div class='tc-floating-content-block-image1-wrapper'>
        <img src="<?php echo $floating_content_block_data->image1_url;?>" alt="<?php echo $floating_content_block_data->image1_alt;?>">
    </div>

    <div class='tc-floating-content-block-image2-wrapper'>
        <img src="<?php echo $floating_content_block_data->image2_url;?>" alt="<?php echo $floating_content_block_data->image2_alt;?>">
    </div>

    <div class='tc-floating-content-block-inner-wrapper'
    <?php
        if ($floating_content_block_data->background_color) {
            echo "style='background-color: rgba({$floating_content_block_data->background_color})'"; 
        }
        ?>
    >
        <div></div>
        <div class='tc-floating-content-block-inner'>
            <?php echo $floating_content_block_data->column1;?>
        </div>
    </div>

</section>