
<?php
//Simple Banner v1.0.0

/*
A simple banner with centered text and a button.
The banner name propery is for accesability purposes only and does not display visually.

// DATA SCHEMA:
$simple_banner_data = (object)[
    'id' => 'banner1'
    'banner_heading' => "Banner Name",
    'background_image_url' => "../_LIBS/images/image2.jpg",
    'overlay_color' => 'transparent',
    'content' => "Some Banner Text",
    'button_content' => "Click Me",
    'button_url' => "#"
];

*/
?>

<section class="tc-simple-banner" id="<?php echo $simple_banner_data->id ;?>" <?php 
    if ($simple_banner_data->background_image_url) {
        echo "style='background: url($simple_banner_data->background_image_url);";
        echo "background-size: var(--tc-simple-banner-background-size);";
        echo "background-position: var(--tc-simple-banner-background-position);";
        echo "'";
    }
?>>
    <h2 class="hidden"><?php $simple_banner_data->banner_heading ;?></h2>

    <div class="tc_banner-image-overlay" 
    <?php
        echo "style='background: {$simple_banner_data->overlay_color}'";
    ?>
    >
    </div>
    
    <div class="tc-simple-banner-inner">
        <?php  
            echo "<span>$simple_banner_data->content</span>";
            echo "<a href='$simple_banner_data->button_url' class='button'>$simple_banner_data->button_content</a>";
        ?>
    </div>
</section>