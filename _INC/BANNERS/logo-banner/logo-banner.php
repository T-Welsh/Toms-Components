<?php
//logo Banner v1.0.0

/*
A logo banner with centered text and a button.
The banner name propery is for accesability purposes only and does not display visually.

// DATA SCHEMA:
    $logo_banner_data = (object)[
        'id' => 'banner-2',
        'logo_url' => "../_LIBS/images/logoipsum-215.svg",
        'logo_alt' => "image alt text",
        'background_color' => 'transparent',
        'button_url' => "#"
    ];

*/
?>

<section class="tc-logo-banner" id="<?php echo $logo_banner_data->id ;?>" 
<?php
    if ($logo_banner_data->background_color) {
        echo "style='background: {$logo_banner_data->background_color}'";
    }
?>
>

<a href="<?php echo $logo_banner_data->button_url;?>">
    <img src="<?php echo $logo_banner_data->logo_url ;?>" alt="<?php echo $logo_banner_data->logo_alt ;?>">
</a>
</section>