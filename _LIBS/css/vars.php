<?php
header("Content-type: text/css");

$test_color = '255,0,255';
?>
:root{
    --cool-color: <?php echo $test_color?>;
}

:root {
    /*============ COLORS ============*/
    /*--temp: #211959;
    --color-picker: rgb(21, 125, 182);
    --clr-primary: 21, 125, 182;
    --clr-secondary: 255, 255, 255;
    --clr-accent: 248, 211, 51;
    --clr-highlight: 241, 129, 42;
    --clr-neutral: 255, 252, 243;
    --clr-text-light: 255, 255, 255;
    --clr-text-dark: 28, 28, 29;*/

    /*============ COLORS - My Theme ============*/
    --temp: #211959;
    --color-picker: rgb(21, 125, 182);
    --clr-primary: 6, 11, 25;
    --clr-secondary: 255, 255, 255;
    --clr-accent: 248, 211, 51;
    --clr-highlight: 241, 129, 42;
    --clr-neutral: 255, 252, 243;
    --clr-text-light: 255, 255, 255;
    --clr-text-dark: 28, 28, 29;

    /*============ COLORS - Southwold ============*/
    /*
    --temp: #211959;
    --color-picker: rgb(21, 125, 182);
    --clr-primary: 55, 74, 124;
    --clr-secondary: 236, 236, 236;
    --clr-accent: 248, 211, 51;
    --clr-highlight: 241, 129, 42;
    --clr-neutral: 255, 252, 243;
    --clr-text-light: 255, 255, 255;
    --clr-text-dark: 101, 101, 101;
    */
    /*============ FONT VARIABLES & SETTINGS ============*/
    font-size: 16px;
    --ff-primary: sans-serif;
    --ff-serif: Georgia, 'Times New Roman', Times, serif;
    --ff-sans-serif: Verdana, Geneva, Tahoma, sans-serif;
    --ff-monospace: 'Courier New', Courier, monospace;

    --ff-body: var(--ff-primary);
    --ff-heading: var(--ff-primary);
    --ff-button: var(--ff-primary);
    /*---------------------------------------------------*/
    --fw-super-light: 400;
    --fw-light: 500;
    --fw-regular: 600;
    --fw-semi-bold: 700;
    --fw-bold: 800;
    --fw-super-bold: 900;
    /*---------------------------------------------------*/
    --fs-300: 0.8rem;
    --fs-500: 1rem;
    --fs-600: 1.1rem;
    --fs-700: 1.2rem;
    --fs-800: 1.3rem;
    --fs-1000:1.5rem;
    --fs-1200:1.7rem;
    --fs-1500: 2rem;
    --fs-2500: 3rem;

    --fs-primary-heading: var(--fs-1500);
    --fs-secondary-heading: var(--fs-1200);
    --fs-summary: var(--fs-700)
    --fs-body: var(--fs-500);
    --fs-nav: var(--fs-500);
    --fs-button: var(--fs-500);
    /*---------------------------------------------------*/
    --ls-body: 0.05rem;

    /*============ PAGE LAYOUT ============*/
    --page-margin: 5vw;
    --section-gap: 3rem;  
    --navbar-height: 113px;
}
/* Variables for small screen sizes */
@media only screen and (max-width: 600px) {
  :root {
    --fs-primary-heading: var(--fs-1000);
    --fs-secondary-heading: var(--fs-800);
  }
}

/*=*=*=*=*=*=*=*=*=*=*=*=* COMPONENT VARIABLES *=*=*=*=*=*=*=*=*=*=*=*=*/
/*------ Headers ------*/
.tc-simple-navbar {
    /* Margins and Padding*/
    --tc-simple-nav-bar-padding: 0;
    --tc-simple-navbar-social-bar-padding: 0.4rem 1rem;


    /*Text*/
    --tc-simple-nav-bar-font-size: 1.2rem;
    --tc-simple-nav-bar-color: var(--clr-text-light);
    --tc-simple-navbar-social-bar-font-size: 1rem;
    --tc-simple-navbar-social-bar-icon-size: 1.2rem;
    --tc-simple-nav-bar-dropdown-text-color: var(--clr-text-dark);

    /*Box Sizing*/
    --tc-simple-nav-bar-logo-max-width: 400px;
    --tc-simple-nav-bar-logo-max-height: 100px;

    /*Background*/
    --tc-simple-nav-bar-background-color: var(--clr-primary);
    --tc-simple-nav-bar-dropdown-background-color: 255, 255, 255;
}

.tc-minimalist-navbar {
     --tc-minimalist-navbar-background-color: var(--clr-primary);
    --tc-minimalist-navbar-border-color: 255, 255, 255;
    --tc-minimalist-navbar-text-color: var(--clr-text-light);
    --tc-minimalist-navbar-text-hover-color: var(--clr-accent);
    --tc-minimalist-navbar-hover-border: 1px solid var(--clr-accent); 
}

/*------ Content Blocks ------*/
.tc-content-block {
    --tc-content-block-margin: var(--section-gap) 0;
    --tc-content-block-padding: var(--section-gap) var(--page-margin);
}

.tc-card-grid {
    /*Box Sizing*/
    --tc-card-grid-card-max-width: 100%;

    /*Margins and Padding*/
    --tc-card-grid-margin: var(--section-gap) 0;
    --tc-card-grid-padding: 0 var(--page-margin);
    --tc-card-grid-card-padding: 1rem;

    /*Border and Background*/
    --tc-card-grid-card-border: 1px solid rgb(var(--clr-text-dark));
    --tc-card-grid-card-border-radius: 6px;
}

/*------ Banners ------*/
.tc-simple-banner {
  /*Margins and Padding*/
  --tc-simple-banner-margin: var(--section-gap) 0 var(--section-gap) 0;
  --tc-simplebanner-padding: var(--section-gap) var(--page-margin) var(--section-gap) var(--page-margin);

  /*Background*/
  --tc-simple-banner-background-size: cover;
  --tc-simple-banner-background-position: center;

  /*Text*/
  --tc-simple-banner-text-color: var(--clr-text-light);
  --tc-simple-banner-text-size: var(--fs-primary-heading);
}

/*------ Galleries ------*/
.tc-carousel-gallery {
  /*Box Sizing*/  
  --tc-carousel-gallery-card-aspect-ratio: 16/9;

  /*Background*/
  --tc-carousel-gallery-background-color: var(--clr-primary);

  /*Text*/
  --tc-carousel-gallery-heading-color: var(--clr-text-light);
  --tc-carousel-gallery-heading-font-size: var(--fs-secondary-heading);

  /*Misc*/
  --tc-carousel-gallery-dots-color: var(--clr-text-light);
}

.tc-testimonial-carousel {
    --tc-testimonial-carousel-text-color: var(--clr-text-light);
}

.tc-logo-ticker {
    --tc-logo-ticker-heading-color: var(--clr-text-dark);
    --tc-logo-ticker-heading-font-size: var(--fs-secondary-heading);
}
/*------ Footers ------*/
.tc-3col-footer {
  /*Box Sizing*/
  --tc-3col-footer-logo-width: 264px;

  /*Margins and Padding*/
  --tc-3col-footer-margin: var(--section-gap) 0 0 0;
  --tc-3col-footer-padding: var(--section-gap) 0 0;
  --tc-3col-footer-row-gap: 2rem;
  --tc-3col-footer-logo-margin: 0 var(--page-margin);
  --tc-3col-footer-content-container-margin: 0 var(--page-margin);
  
  /*Background*/
  --tc-3col-footer-background-color: var(--clr-primary);

  /*Text*/
  --tc-3col-footer-text-color: var(--clr-text-light);
  
}

.tc-2col-footer {
  /*Box Sizing*/
  --tc-2col-footer-logo-width: 264px;

  /*Margins and Padding*/
  --tc-2col-footer-margin: var(--section-gap) 0 0 0;
  --tc-2col-footer-padding: var(--section-gap) 0 0;
  --tc-2col-footer-row-gap: 2rem;
  --tc-2col-footer-logo-margin: 0 var(--page-margin);
  --tc-2col-footer-content-container-margin: 0 var(--page-margin);
  
  /*Background*/
  --tc-2col-footer-background-color: var(--clr-primary);

  /*Text*/
  --tc-2col-footer-text-color: var(--clr-text-light);
  
}