<?php
//Go To Top Btn v1.0.0

/*
// DATA SCHEMA:

$go_to_top_btn_data = (object)[
    'id' => 'id-1'
];

*/

?>

<style>
    .tc-go-to-top-btn {
        --tc-go-to-top-btn-bottom: <?php echo $go_to_top_btn_data->style->bottom_offset; ?>;
        --tc-go-to-top-btn-right: <?php echo $go_to_top_btn_data->style->right_offset; ?>;
    }
</style>

<a href="#" id="tc-go-to-top-anchor" class='tc-go-to-top-anchor'></a>

<a class='tc-go-to-top-btn' id='<?php echo $go_to_top_btn_data->id; ?>' href='#tc-go-to-top-anchor' data-scroll-trigger='<?php echo $go_to_top_btn_data->scroll_trigger; ?>'>
    <?php echo $go_to_top_btn_data->content; ?>
</a>