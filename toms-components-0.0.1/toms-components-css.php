<?php
header("Content-type: text/css");


?>
/*======================== Style Reset ========================*/

/*======================== Root Variables ========================*/
/*#region------------ root variables ------------*/
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
/*#endregion*/

/*======================== Component Variables ========================*/
/*#region------------ minimalist-navbar ------------*/
.tc-minimalist-navbar {
    --tc-minimalist-navbar-background-color: var(--clr-primary);
   --tc-minimalist-navbar-border-color: 255, 255, 255;
   --tc-minimalist-navbar-text-color: var(--clr-text-light);
   --tc-minimalist-navbar-text-hover-color: var(--clr-accent);
   --tc-minimalist-navbar-hover-border: 1px solid var(--clr-accent); 
}
/*#endregion*/

/*#region------------ simple-content-block ------------*/
.tc-content-block {
    --tc-content-block-margin: var(--section-gap) 0;
    --tc-content-block-padding: var(--section-gap) var(--page-margin);
}
/*#endregion*/

/*#region------------ carousel-gallery ------------*/
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
/*#endregion*/

/*#region------------ 2col-footer ------------*/
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
/*#endregion*/

/*#region------------ simple-banner ------------*/
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
/*#endregion*/

/*#region------------ testimonial-carousel ------------*/
.tc-testimonial-carousel {
    --tc-testimonial-carousel-text-color: var(--clr-text-light);
}
/*#endregion*/

/*#region------------ logo-ticker-carousel ------------*/
.tc-logo-ticker {
    --tc-logo-ticker-heading-color: var(--clr-text-dark);
    --tc-logo-ticker-heading-font-size: var(--fs-secondary-heading);
}
/*#endregion*/

/*#region------------ card-grid ------------*/
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
/*#endregion*/
/*======================== Component CSS ========================*/

/*#region------------ minimalist-navbar ------------*/
.tc-minimalist-navbar {
    position: absolute;
    z-index: 1000;
    top: 0;
    left: 0;
    right: 0;
    min-height: 12vh;
    background-color: rgb(var(--tc-minimalist-navbar-background-color));
    display: flex;
    flex-wrap: wrap;
}
.tc-minimalist-navbar * {
    white-space: nowrap;
    color: rgb(var(--tc-minimalist-navbar-text-color));
    font-size: 1.2rem;
}
.tc-minimalist-navbar > div,
.tc-minimalist-navbar > nav {
    flex-grow: 1;
    /* border-bottom: 1px solid rgb(var(--tc-minimalist-navbar-border-color), 0.4); */
}
/*------------ Logo ------------*/
.tc-minimalist-navbar-logo-wrapper {
    order: 1;
   border-bottom: 1px solid rgb(var(--tc-minimalist-navbar-border-color), 0.4);
    height: 12vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.tc-minimalist-navbar-logo-wrapper a{
    width: 60%;
}
.tc-minimalist-navbar-logo-wrapper img {
    width: 100%;
    max-height: 10vh;
}

/*------------ Links ------------*/
.tc-minimalist-navbar-navigation-container {
    flex-basis: 100%;
    order: 2;
    border-bottom: 0px solid rgb(var(--tc-minimalist-navbar-border-color), 0.4);
    height: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    transition: height 0.3s;
}
.tc-minimalist-navbar-navigation-container > ul {
    display: flex;
    gap: 2rem;
    justify-content: center;
    align-items: center;
}

/*------------ Contact ------------*/
.tc-minimalist-navbar-contact-container {
    flex-basis: 100%;
    order: 0;
   border-bottom: 1px solid rgb(var(--tc-minimalist-navbar-border-color), 0.4);
    height: 2.5rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
.tc-minimalist-navbar-contact-container > ul {
    display: flex;
    gap: 2rem;
    justify-content: center;
    align-items: center;
}

/*------------ Tray Button ------------*/
.tc-minimalist-navbar-tray-btn-wrapper {
    order: 4;
    flex-basis: 100%;
    border-bottom: 1px solid rgb(var(--tc-minimalist-navbar-border-color), 0.4);
    padding: 0.7rem;
    min-height: fit-content;
    height: 1.8rem !important;
    display: flex;
    justify-content: center;
    align-items: center;
}
.tc-minimalist-navbar-tray-btn {
    border: none;
    width: 100%;
    height: 2rem;
    background: transparent;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
.tc-minimalist-navbar-tray-btn > div {
    width: 1.5rem;
    height: 1px;
    background-color: rgb(var(--tc-minimalist-navbar-text-color));
}
.tc-minimalist-navbar-tray-btn > div:not(:last-child) {
    margin-bottom: 0.3rem;
}

/*------------ Hover Styles ------------*/
.tc-minimalist-navbar a:hover {
    color: rgb(var(--tc-minimalist-navbar-text-hover-color));
    border-bottom: var(--tc-minimalist-navbar-hover-border);
}

/*------------ Responsive Styles ------------*/
@media only screen and (min-width: 768px){
    .tc-minimalist-navbar-navigation-container {
        flex-basis: auto;
        border-bottom: 1px solid rgb(var(--tc-minimalist-navbar-border-color), 0.4);
        height: 12vh;
    }
    .tc-minimalist-navbar-contact-container {
        flex-basis: auto;
        height: 12vh;
    }
    .tc-minimalist-navbar-tray-btn-wrapper {
        display: none;
    }
    .tc-minimalist-navbar-logo-wrapper a{
        width: 100%;
    }
}
/*#endregion*/

/*#region------------ simple-content-block ------------*/
.tc-content-block {
    margin: var(--tc-content-block-margin);
    padding:  var(--tc-content-block-padding);
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    column-gap: 5vw;
}
.tc-content-block-heading {
    grid-column: span 6;
    margin-bottom: 1.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.tc-content-block article {
    margin-bottom: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.tc-content-block article > *:not(:last-child) {
    margin-bottom: 1rem;
}
.tc-content-block[data-columns="1"] article {
    grid-column:  span 6;
}
.tc-content-block[data-columns="2"] article {
    grid-column: span 6;
}
.tc-content-block[data-columns="3"] article {
    grid-column: span 6;
}

@media only screen and (min-width: 768px){
    .tc-content-block[data-columns="2"] article {
        grid-column: span 3;
    }
    .tc-content-block[data-columns="3"] article {
        grid-column: span 2;
    }
}
/*#endregion*/

/*#region------------ simple-hero ------------*/
.tc-simple-hero {
    position: relative;
    z-index: 900;
    padding: 2rem;
    height: 50vh;
    color: #fff;
}
.tc-simple-hero-image-wrapper {
    position: absolute;
    z-index: 920;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-position: right;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.tc-simple-hero-image-overlay {
    position: absolute;
    z-index: 922;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
.tc-simple-hero-content-container {
    position: relative;
    z-index: 930;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
/*#endregion*/

/*#region------------ carousel-gallery ------------*/
.tc-carousel-gallery {
    padding: 2rem 0;
    background-color: rgb(var(--tc-carousel-gallery-background-color));
}
.tc-carousel-gallery h2 {
    text-align: center;
    margin-bottom: 1.5rem;
    color: rgb(var(--tc-carousel-gallery-heading-color));
    font-size: var(--tc-carousel-gallery-heading-font-size);
}
.tc-carousel-gallery .slick-dots {
    margin-top: 1rem;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 1.4rem;
}
.tc-carousel-gallery .slick-dots * {
    border: none;

    font-size: 0;
    cursor: pointer;

}
.tc-carousel-gallery .slick-dots button{
    outline: 2px solid rgb(var(--tc-carousel-gallery-dots-color),0.5);
    border: 2px solid rgb(var(--tc-carousel-gallery-background-color));
    border-radius: 6rem;
    width: 2rem;
    height: 0.6rem;
    background-color: rgb(var(--tc-carousel-gallery-dots-color),0);
}
.tc-carousel-gallery .slick-dots button{
    outline: 2px solid rgb(var(--tc-carousel-gallery-dots-color),0.5);
    border: 2px solid rgb(var(--tc-carousel-gallery-background-color));
    border-radius: 6rem;
    width: 2rem;
    height: 0.6rem;
    background-color: rgb(var(--tc-carousel-gallery-dots-color),0);
}
.tc-carousel-gallery .slick-dots .slick-active button {
    background-color: rgb(var(--tc-carousel-gallery-dots-color),1);
}

.tc-carousel-gallery-card {
    padding: 0 1rem;
    aspect-ratio: var(--tc-carousel-gallery-card-aspect-ratio);
    cursor: pointer;
}
.tc-carousel-gallery-card:focus-visible{
    outline: none;
}
.tc-carousel-gallery-card img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.tc-carousel-gallery-card-modal {
    border: none;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -32%);
    max-width: 100vw;
    height: 70vh;
    aspect-ratio: var(--tc-carousel-gallery-card-aspect-ratio);
}
.tc-carousel-gallery-card-modal::backdrop {
    background-color: rgba(0, 0, 0, 0.6);
}
/*#endregion*/

/*#region------------ 2col-footer ------------*/
.tc-2col-footer {
    margin: var(--tc-2col-footer-margin);
    padding: var(--tc-2col-footer-padding);
    background-color: rgb(var(--tc-2col-footer-background-color));
    color: rgb(var(--tc-2col-footer-text-color));
    display: grid;
    grid-template-columns: 1fr;
    row-gap: var(--tc-2col-footer-row-gap);
}
.tc-2col-footer-content-container {
    justify-self: center;
    margin: var(--tc-2col-footer-content-container-margin);
    padding: 0 var(--page-margin);
    width: 100%;
    max-width: 1400px;
    display: grid;
    grid-template-columns: 1fr;
    column-gap: 5vw;
    row-gap: 2rem;
}
.tc-2col-footer-content-card {
    color: rgb(var(--tc-2col-footer-text-color));
    display: flex;
    justify-content: center;
    align-items: center;
}
.tc-2col-footer-content-card-inner *{
    color: rgb(var(--tc-2col-footer-text-color));
    margin-bottom: 0.7rem;
    transition: scale 0.3s;
    transform-origin: left;
}
.tc-2col-footer-content-card-inner h2,
.tc-2col-footer-content-card-inner h3 {
    margin-bottom: 1rem;
    font-size: 1.4rem;
}
.tc-2col-footer-content-card-inner li:hover{
    scale: 1.2;
}
.tc-2col-footer-content-card a:hover{
    color: rgb(var(--clr-accent));
}
.tc-2col-footer-logo-wrapper img {
    width: 100%;
}
.tc-2col-footer-social-bar {
    display: flex;
    justify-content: center;
    align-items: center;
}
.tc-2col-footer-social-bar > * {
    width: 24px;
    height: 24px;
    color: rgb(var(--tc-2col-footer-text-color));
    fill: rgb(var(--tc-2col-footer-text-color));
    transition: scale 0.3s;
}
.tc-2col-footer-social-bar > *:hover {
    color: rgb(var(--clr-accent));
    fill: rgb(var(--clr-accent));
    scale: 1.2;
}
.tc-2col-footer-social-bar > *:not(:last-child) {
    margin-right: 1.3rem;
}
.tc-2col-footer-copyright-bar {
    margin-bottom: 0.3rem;
    color: rgb(var(--tc-2col-footer-text-color));
    display: flex;
    flex-direction: column-reverse;
    
}
.tc-2col-footer-copyright-bar *{
    color: rgb(var(--tc-2col-footer-text-color));
    display: flex;
    justify-content: center;
}
.tc-2col-footer-copyright-bar span{
    color: rgb(var(--tc-2col-footer-text-color));
}
.tc-2col-footer-copyright-bar-copyright-wrapper * {
    font-size: 0.8rem;
}
.tc-2col-footer-copyright-bar-copyright-wrapper > *{
    margin-left: 0rem;
}
.tc-2col-footer-copyright-bar-policy-wrapper {
    margin-bottom: 0.8rem;
}
.tc-2col-footer-copyright-bar-policy-wrapper > *:not(:last-child){
    margin-right: 1rem;
}
.tc-2col-footer-copyright-bar a{
    color: rgb(var(--tc-2col-footer-text-color));
    text-decoration: underline;
}
.tc-2col-footer-copyright-bar a:hover{
    color: rgb(var(--clr-accent));
}

@media only screen and (min-width: 768px) {
    .tc-2col-footer-content-container {
        grid-template-columns: repeat(2, 1fr);
    }
    .tc-2col-footer-copyright-bar {
        flex-direction: row;
        justify-content: space-between;
    }
    .tc-2col-footer-copyright-bar *{
        justify-content: space-between;
    }
    .tc-2col-footer-copyright-bar-copyright-wrapper > *{
        margin-left: 1rem;
    }
    .tc-2col-footer-copyright-bar-policy-wrapper {
        margin-bottom: 0rem;
    }
    .tc-2col-footer-copyright-bar-policy-wrapper > *{
        margin-right: 1rem;
    }
}

/*#endregion*/

/*#region------------ simple-banner ------------*/
.tc-simple-banner {
    position: relative;
    z-index: 920;
    width: 100%;
    margin: var(--tc-simple-banner-margin);
    padding: var(--tc-simplebanner-padding);
    color: rgb(var(--tc-simple-banner-text-color));
    display: flex;
    justify-content: center;
}
.tc_banner-image-overlay{
    position: absolute;
    z-index: 922;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
.tc-simple-banner-inner {
    position: relative;
    z-index: 924;
    display: flex;
    column-gap: 2rem;
    row-gap: 1.5rem;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.tc-simple-banner-inner>span {
    color: rgb(var(--tc-simple-banner-text-color));
    font-size: var(--tc-simple-banner-text-size);
    text-align: center;
}
/*#endregion*/

/*#region------------ testimonial-carousel ------------*/
.tc-testimonial-carousel {
    position: relative;
    z-index: 800;
    padding: 2rem 0;
    min-height: 30vh;
}
.tc-testimonial-carousel * {
    color: rgb(var(--tc-testimonial-carousel-text-color));
}
.tc-testimonial-carousel h2 {
    position: relative;
    z-index: 810;
    margin-bottom: 1.5rem;
    text-align: center;
    font-size: var(--fs-secondary-heading);
}
.tc-testimonial-carousel-overlay {
    position: absolute;
    z-index: 802;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
.tc-testimonial-carousel-content-container {
    position: relative;
    z-index: 810;
    font-style: italic;
}
.tc-testimonial-carousel-card {
    padding: 0 3rem;
    min-height: 20vh;
    display: flex !important;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.tc-testimonial-carousel-card > p,
.tc-testimonial-carousel-card > p:first-of-type::before,
.tc-testimonial-carousel-card > p:last-of-type::after {
    line-height: 1.6rem;
}
.tc-testimonial-carousel-card > p:first-of-type::before {
    content: '"';
    margin-right: 0.5rem;
    font-size: 2.5rem;
    vertical-align: text-bottom;
}
.tc-testimonial-carousel-card > p:last-of-type::after {
    content: '"';
    margin-left: 0.5rem;
    font-size: 2.5rem;
    vertical-align: text-top;
}
.tc-testimonial-carousel-card-caption {
 margin-top: 1.2rem;
 font-weight: var(--fw-bold);
}
.tc-testimonial-carousel-card-caption::before {
    content: "-";
    margin-right: 1rem;
}
.tc-testimonial-carousel .slick-arrow {
    position: absolute;
    z-index: 812;
    top: 50%;
    width: auto;
    height: 3rem;
    transform: translate(0px, -50%);
}
.tc-testimonial-carousel .left-arrow {
    left: 1rem;
}
.tc-testimonial-carousel .right-arrow {
    right: 1rem;
}
@media only screen and (min-width: 550px) {
    .tc-testimonial-carousel-card {
        padding: 0 7rem;
    }
    .tc-testimonial-carousel .left-arrow {
        left: 2rem;
    }
    .tc-testimonial-carousel .right-arrow {
        right: 2rem;
    }
}
/*#endregion*/

/*#region------------ logo-ticker ------------*/
.tc-logo-ticker h2{
    text-align: center;
    margin-bottom: 2rem;
    color: rgb(var(--tc-logo-ticker-heading-color));
    font-size: var(--tc-logo-ticker-heading-font-size);
}
.tc-logo-ticker-card {
    padding: 0 3rem;
    display: flex !important;
    justify-content: center;
    align-items: center;
}
.tc-logo-ticker img{
    width: auto;
    height: 40px;
}
/*#endregion*/

/*#region------------ card-grid ------------*/
.tc-card-grid {
    margin: var(--tc-card-grid-margin);
    padding: var(--tc-card-grid-padding);
    max-width: 100%;
    display: grid;
    grid-template-columns: 1fr;
    row-gap: 2rem;
    justify-items: center;
}
.tc-card-grid-main-container {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    column-gap: 3vw;
    row-gap: 2rem;
    justify-content: center;
}
.tc-card-grid-card {
    border: var(--tc-card-grid-card-border);
    border-radius: var(--tc-card-grid-card-border-radius);
    max-width: var(--tc-card-grid-card-max-width);
    padding: var(--tc-card-grid-card-padding);
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: center;
}

@media only screen and (min-width: 600px) {
    .tc-card-grid-main-container {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media only screen and (min-width: 1400px) {
    .tc-card-grid-main-container {
        grid-template-columns: repeat(4, 1fr);
    }
}
/*#endregion*/

/*#region------------ simple-google-map ------------*/
/* Set the size of the div element that contains the map */
.simple-google-map {
    height: 400px;
    /* The height is 400 pixels */
    width: 100%;
    /* The width is the width of the web page */
}
/*#endregion*/