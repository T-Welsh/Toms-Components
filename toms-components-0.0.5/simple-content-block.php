<?php
//Simple Content Block v1.2.0

/*
Format data as schema below and place directly above the include call on parent page.

    $content_block_data = (object) [
        'id' => 'unique-id-here',
        'background_color' => '6,11,25',
        justify_article => 'top'
        'heading' => 'HTML element(s) containing the content to be echoed inside of the heading container',
        'column1' => 'HTML element(s) containing the content to be echoed inside of the content container',
        'column2' => 'HTML element(s) containing the content to be echoed inside of the content container',
        'column3' => 'HTML element(s) containing the content to be echoed inside of the content container'
    ]

*/

$content_block_style = "1";
if (($content_block_data->column1 && $content_block_data->column2) || ($content_block_data->column1 && $content_block_data->column3) || ($content_block_data->column2 && $content_block_data->column3)) {
        $content_block_style = "2";
}
if ($content_block_data->column1 && $content_block_data->column2 &&  $content_block_data->column3) {
    $content_block_style = "3";
}
?>

<section class="tc-content-block" id="<?php echo $content_block_data->id ;?>" data-columns="<?php echo "$content_block_style";?>"
<?php
if ($content_block_data->background_color) {
    echo "style='background-color: rgba({$content_block_data->background_color})'"; 
}
// Justify Items in each article
if ($content_block_data->justify_article == "center") {
    echo 'data-justify-article="center"';
}
else {
    echo 'data-justify-article="top"';
}
?>
>
    <?php 
        if ($content_block_data->heading) {
            echo "<div class='tc-content-block-heading'>$content_block_data->heading </div>";
        }
    ?>
    <?php
        if ($content_block_data->column1) {
            echo "<article class='tc-content-block-column1'>";
                echo $content_block_data->column1;
            echo "</article>";
        }
        if ($content_block_data->column2) {
            echo "<article class='tc-content-block-column2'>";
                echo $content_block_data->column2;
            echo "</article>";
        }
        if ($content_block_data->column3) {
            echo "<article class='tc-content-block-column3'>";
                echo $content_block_data->column3;
            echo "</article>";
        }
    ?>
</section>