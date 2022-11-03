<?php
header("Content-type: text/css");

$test_color = '255,0,255';
?>
:root{
    --cool-color: <?php echo $test_color?>;
}

:root {
        --zero: 0;
        /*====== COLORS ======*/
        --temp: cyan;
        --color-picker: rgb(255, 255, 255);
        --text-main: 255, 255, 255;
        --text-alt: 28, 55, 101;
        --background-main: 28, 55, 101;
        --background-alt: 0, 255, 255;
        --background-tertiary: 255, 255 ,255;
        --highlight: 148, 206, 187;

        /* === KEEPERS === */
        --clr-text-light: 255, 255, 255;
        --fs-500: 1rem;
        --fs-1000: 2rem;
        --fs-primary-headings: var(--fs-1000);
    
        /*====== FONT VARIABLES ======*/
        --font-family-main: Verdana, Geneva, Tahoma, sans-serif;
        --font-family-serif: Georgia, 'Times New Roman', Times, serif;
        --font-family-sans-serif: Verdana, Geneva, Tahoma, sans-serif;
        --font-family-monospace: 'Courier New', Courier, monospace;

        /*====== PAGE LAYOUT ======*/
        --section-gap: 3rem;
        --page-margin: 5vw;
}