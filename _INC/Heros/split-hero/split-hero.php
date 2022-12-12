<?php
//Split Hero v1.0.0
/*
    $split_hero_data = (object)[
        'id' => 'split-hero-1',
        'hero_height' => '90',
    ];
*/
?>
<section class="tc-split-hero" id="<?php echo $split_hero_data->id ;?>"
style="
height: <?php echo $split_hero_data->hero_height ;?>vh;
<?php
    if($split_hero_data->background_image_url){
        echo ("background-image: url({$split_hero_data->background_image_url});"); 
    }
?>
background-position: center;
background-repeat: no-repeat;
background-size: cover;
"
>

    <div class="tc-split-hero-container tc-split-hero-container-1"
    style='
    <?php
       if($split_hero_data->container1->background_image_url){
            echo ("background-image: url({$split_hero_data->container1->background_image_url});"); 
        }
    ?>
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    '
    >
        <div class="tc-split-hero-container-overlay tc-split-hero-container-1-overlay"
        style='
        <?php
            echo "background: {$split_hero_data->container1->background_overlay};";
        ?>
        '
        >
        </div>

        <div class="tc-split-hero-container-inner tc-split-hero-container-1-inner">
            <?php
                echo $split_hero_data->container1->content;
            ?>
        </div>

    </div>

    <div class="tc-split-hero-container tc-split-hero-container-2"
    style='
    <?php
       if($split_hero_data->container2->background_image_url){
            echo ("background-image: url({$split_hero_data->container2->background_image_url});"); 
       }
    ?>
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    '
    >
        <div class="tc-split-hero-container-overlay tc-split-hero-container-2-overlay"
        style='
        <?php
                echo "background: {$split_hero_data->container2->background_overlay}";
        ?>
        '
        >
        </div>
       
        <div class="tc-split-hero-container-inner tc-split-hero-container-2-inner">
            <?php
                echo $split_hero_data->container2->content;
            ?>
        </div>
       
    </div>

</section>