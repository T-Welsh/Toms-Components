<?php
//Simple Hero v1.0.1

/*
Format data as schema below and place directly above the include call on parent page.

        $zen_hero_data = (object)[
            'id' => 'id-1'
            'image_url' => "../_LIBS/images/logoipsum-215.svg",
            'overlay_color' => 'transparent',
            'hero_height' => '80'
            'hero_content' => '<h1>Hero Text</h1>'
        ];

*/

?>

<section class="tc-zen-hero" id="<?php echo $zen_hero_data->id ;?>" 
<?php
    echo ("style='min-height:{$zen_hero_data->hero_height}vh;'"); 
?>
>

        <div class="tc-zen-hero-img-wrapper" 
        <?php 
            if($zen_hero_data->image_url){
                echo ("style='background-image: url($zen_hero_data->image_url);'"); 
            }
        ?>
        >
        </div>

        <div class="tc-zen-hero-image-overlay" 
        <?php
        echo "style='background: {$zen_hero_data->overlay_color}'";
        ?>
        >
        </div>

        <div class="tc-zen-hero-content-container">
            <?php echo $zen_hero_data->hero_content; ?>
        </div>

</section>

