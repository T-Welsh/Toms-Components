<?php
//Go To Top Btn v1.0.0

/*
// DATA SCHEMA:

$go_to_top_btn_data = (object)[
    'id' => 'go-to-top-btn-1',
    'scroll_trigger' => '10',
    'content' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/></svg>',
    'style' => (object)[
        'bottom_offset' => '10vh',
        'right_offset' => '5vw',
        'border_radius' => '25%',
        'border' => '1px solid black',
        'padding' => '0.5rem',
        'background_color' => 'rgb(255,0,255,1)',
        'color' => 'white'
    ]
];

*/

?>

<style>
    .tc-go-to-top-btn {
        --tc-go-to-top-btn-bottom: <?php echo $go_to_top_btn_data->style->bottom_offset; ?>;
        --tc-go-to-top-btn-right: <?php echo $go_to_top_btn_data->style->right_offset; ?>;
        --tc-go-to-top-btn-border-radius: <?php echo $go_to_top_btn_data->style->border_radius; ?>;
        --tc-go-to-top-btn-border: <?php echo $go_to_top_btn_data->style->border; ?>;
        --tc-go-to-top-btn-padding: <?php echo $go_to_top_btn_data->style->padding; ?>;
        --tc-go-to-top-btn-background-color: <?php echo $go_to_top_btn_data->style->background_color; ?>;
        --tc-go-to-top-btn-color: <?php echo $go_to_top_btn_data->style->color; ?>;
    }
</style>

<a href="#" id="tc-go-to-top-anchor" class='tc-go-to-top-anchor'></a>

<a class='tc-go-to-top-btn' id='<?php echo $go_to_top_btn_data->id; ?>' href='#tc-go-to-top-anchor' data-scroll-trigger='<?php echo $go_to_top_btn_data->scroll_trigger; ?>'>
    <?php echo $go_to_top_btn_data->content; ?>
</a>