<?php
header("Content-type: text/css");

$test_color = '255,0,255';
?>
:root{
    --cool-color: <?php echo $test_color?>;
}

:root {
    /*============ COLORS ============*/
    --temp: #211959;
    --color-picker: rgb(21, 125, 182);
    --clr-primary: 21, 125, 182;
    --clr-secondary: 255, 255, 255;
    --clr-accent: 248, 211, 51;
    --clr-highlight: 241, 129, 42;
    --clr-neutral: 255, 252, 243;
    --clr-text-light: 255, 255, 255;
    --clr-text-dark: 28, 28, 29;

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
/*------ Content Blocks ------*/
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