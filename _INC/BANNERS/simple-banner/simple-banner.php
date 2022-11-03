
<?php
/*
A simple banner with centered text and a button.
The banner name propery is for accesability purposes only and does not display visually.

// DATA SCHEMA:
$simple_banner_data = (object)[
    'banner_name' => "Banner Name",
    'background_image_url' => "../_LIBS/images/image2.jpg",
    'content' => "Some Banner Text",
    'button_content' => "Click Me",
    'button_url' => "#"
];

*/
?>

<section class=tc-simple-banner <?php 
    if ($simple_banner_data->background_image_url) {
        echo "style='background: url($simple_banner_data->background_image_url);";
        echo "background-size: var(--tc-simple-banner-background-size);";
        echo "background-position: var(--tc-simple-banner-background-position);";
        echo "'";
    }
?>>
    <h2 class="hidden"></h2>
    <div class="tc-simple-banner-inner">
        <?php  
            echo "<span>$simple_banner_data->content</span>";
            echo "<a href='$simple_banner_data->button_url' class='button'>$simple_banner_data->button_content</a>";
        ?>
    </div>
</section>