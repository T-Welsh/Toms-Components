<?php
// Testimonial Carousel v1.0.0
//Schema
/*
    $testimonial_carousel_data = (object)[
        'id' => 'Gallery 2',
        'heading' => 'Testimonial Carousel',
        'background_image' => '../_LIBS/images/image5.jpg',
        'background_overlay' => '0,0,0,0.5',
        'cards' => [
            (object)[
                'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                'caption' => 'Mr Paid Shill'
            ],
            (object)[
                'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                'caption' => 'Mr Paid Shill'
            ],
            (object)[
                'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                'caption' => 'Mr Paid Shill'
            ],
            (object)[
                'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                'caption' => 'Mr Paid Shill'
            ],
            (object)[
                'testimonial' => '<p>This company listens to everything i want and delivers exactly that.</p>',
                'caption' => 'Mr Paid Shill'
            ],
        ]
    ];
*/
?>

<section class="tc-testimonial-carousel" id="<?php echo $testimonial_carousel_data->id ;?>"
<?php
    if ($testimonial_carousel_data->background_image) {
      echo "style='background: url($testimonial_carousel_data->background_image);";
      echo "background-repeat: no-repeat;";
      echo "background-position: center;";
      echo "background-size: cover;";
      echo "'";
    }
?>
>

<div class='tc-testimonial-carousel-overlay'
style='
  background-color: rgba(<?php echo $testimonial_carousel_data->background_overlay ;?>);
'>
</div>
    <h2><?php echo $testimonial_carousel_data->heading ;?></h2>
    <div class="tc-testimonial-carousel-content-container">
        <?php
            foreach($testimonial_carousel_data->cards as $card) {
                echo "<div class='tc-testimonial-carousel-card'>" ;
                        echo $card->testimonial;
                        echo "<span class='tc-testimonial-carousel-card-caption'>";
                            echo $card->caption;
                        echo "</span>";
                echo "</div>" ;
            }
        ?>
    </div>
</section>