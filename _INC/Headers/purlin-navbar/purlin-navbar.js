//Purlin Navbar v1.0.0
$(window).on('resize', () => {
    if (window.innerWidth > 1000) {
        $('.tc-purlin-navbar-link-container').css('transform', 'translateX(0%)');
    }
    else {
        $('.tc-purlin-navbar-toggle-open').show();
        $('.tc-purlin-navbar-toggle-close').hide();
        $('.tc-purlin-navbar-link-container').css('transform', 'translateX(100%)');
    }
});

$('.tc-purlin-navbar-toggle-open').on('click', () => {
    $('.tc-purlin-navbar-toggle-open').hide();
    $('.tc-purlin-navbar-toggle-close').show();

    $('.tc-purlin-navbar-link-container').css('transform', 'translateX(0%)');
});

$('.tc-purlin-navbar-toggle-close').on('click', () => {
    $('.tc-purlin-navbar-toggle-open').show();
    $('.tc-purlin-navbar-toggle-close').hide();

    $('.tc-purlin-navbar-link-container').css('transform', 'translateX(100%)');
});

