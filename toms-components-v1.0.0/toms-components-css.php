/*======================== toms-components-css.php ========================*/
/*======================== Root Variables ========================*/
/*#region------------ root variables ------------*/
:root {
    /*============ COLORS ============*/
    --temp: #211959;
    --color-picker: rgb(241, 129, 42);
    --clr-primary: 141, 182, 33;
    --clr-secondary: 245, 248, 235;
    --clr-accent: 45, 127, 47;
    --clr-neutral: 255, 255, 255;
    --clr-text-light: 255, 255, 255;
    --clr-text-dark: 0, 0, 0;

    /*============ FONT VARIABLES & SETTINGS ============*/
    font-size: 16px;
    --ff-primary: sans-serif;
    --ff-serif: Georgia, 'Times New Roman', Times, serif;
    --ff-sans-serif: 'Raleway', Verdana, Geneva, Tahoma, sans-serif;
    --ff-monospace: 'Courier New', Courier, monospace;

    --ff-heading: var(--ff-primary);
    --ff-body: var(--ff-primary);
    --ff-button: var(--ff-primary);
    /*---------------------------------------------------*/
    --fw-super-light: 200;
    --fw-light: 300;
    --fw-regular: 400;
    --fw-semi-bold: 500;
    --fw-bold: 600;
    --fw-super-bold: 700;
    /*---------------------------------------------------*/
    --fs-800: 0.8rem;
    --fs-900: 0.9rem;
    --fs-1000: 1rem;
    --fs-1100: 1.1rem;
    --fs-1200: 1.2rem;
    --fs-1300: 1.3rem;
    --fs-1400: 1.4rem;
    --fs-1500: 1.5rem;
    --fs-1600: 1.6rem;
    --fs-1700: 1.7rem;
    --fs-1800: 1.8rem;
    --fs-1900: 1.9rem;
    --fs-2000: 2rem;
    --fs-2100: 2.1rem;
    --fs-2200: 2.2rem;
    --fs-2300: 2.3rem;
    --fs-2400: 2.4rem;
    --fs-3500: 3.5rem;

    --fs-primary-heading: var(--fs-2000);
    --fs-secondary-heading: var(--fs-1200);
    --fs-body: var(--fs-1000);
    --fs-button: var(--fs-1000);

    /*============ PAGE LAYOUT ============*/
    --page-margin: 5vw;
    --section-gap: 10rem;
    --topnav-height: 113px;
}
/* Variables for small screen sizes */
@media only screen and (max-width: 600px) {
  :root {
    --fs-primary-heading: var(--fs-1200);
    --fs-secondary-heading: var(--fs-1000);
  }
}

/*============ UTILLITY CLASSES ============*/
/*------------ Text Utils ------------*/
.align-left {
    text-align: left;
}
.align-center {
    text-align: center;
}
.align-right {
    text-align: right;
}
/*--- Font Sizing ---*/
.fs-800 {
    font-size: var(--fs-800);
}
.fs-900 {
    font-size: var(--fs-900);
}
.fs-1000 {
    font-size: var(--fs-1000);
}
.fs-1100 {
    font-size: var(--fs-1100);
}
.fs-1200 {
    font-size: var(--fs-1200);
}
.fs-1300 {
    font-size: var(--fs-1300);
}
.fs-1400 {
    font-size: var(--fs-1400);
}
.fs-1500 {
    font-size: var(--fs-1500);
}
.fs-1600 {
    font-size: var(--fs-1600);
}
.fs-1700 {
    font-size: var(--fs-1700);
}
.fs-1800 {
    font-size: var(--fs-1800);
}
.fs-1900 {
    font-size: var(--fs-1900);
}
.fs-2000 {
    font-size: var(--fs-2000);
}
.fs-2100 {
    font-size: var(--fs-2100);
}
.fs-2200 {
    font-size: var(--fs-2200);
}
.fs-2300 {
    font-size: var(--fs-2300);
}
.fs-2400 {
    font-size: var(--fs-2400);
}
.fs-3500 {
    font-size: var(--fs-3500);
}
/*--- Font Weights ---*/
.fw-300 {
    font-weight: 300;
}
.fw-400 {
    font-weight: 400;
}
.fw-500 {
    font-weight: 500;
}
.fw-600 {
    font-weight: 600;
}
.fw-700 {
    font-weight: 700;
}
.fw-800 {
    font-weight: 800;
}
.fw-900 {
    font-weight: 900;
}

/*------------ Layout Utils ------------*/
.auto-top {
    margin-top: auto;
}
.auto-inline {
    margin-inline: auto;
}
.do-not-display {
    display: none !important;
}