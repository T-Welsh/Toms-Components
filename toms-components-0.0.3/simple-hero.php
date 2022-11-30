<?php
//Simple Hero v1.0.0

/*
Format data as schema below and place directly above the include call on parent page.

        $simple_hero_data = (object)[
            'id' => 'id-1'
            'image_url' => "../_LIBS/images/logoipsum-215.svg",
            'overlay_color' => 'transparent',
            'hero_content' => '<h1>Hero Text</h1>'
        ];

*/

?>

<section class="tc-simple-hero" id="<?php echo $simple_hero_data->id ;?>">
    <div class="tc-simple-hero-image-wrapper"  
    <?php 
        if($simple_hero_data->image_url){
            echo "style='background-image: url($simple_hero_data->image_url)'"; 
        }
    ?>
    >
    </div>

    <div class="tc-simple-hero-image-overlay" 
    <?php
    echo "style='background: {$simple_hero_data->overlay_color}'";
    ?>
    >
    </div>

    <div class="tc-simple-hero-content-container">
        <?php echo $simple_hero_data->hero_content; ?>
    </div>
</section>