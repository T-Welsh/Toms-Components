$('.tc-minimalist-navbar-tray-btn').on('click', function () {
    console.log('btn-clicked');
    if ($('.tc-minimalist-navbar-navigation-container').attr('aria-expanded') == 'false') {
        $('.tc-minimalist-navbar-navigation-container').css('height', '12vh');
        $('.tc-minimalist-navbar-navigation-container').css('border-bottom-width', '1px');
        $('.tc-minimalist-navbar-navigation-container').attr('aria-expanded', "true")
    }
    else {
        $('.tc-minimalist-navbar-navigation-container').css('height', '0');
        $('.tc-minimalist-navbar-navigation-container').css('border-bottom-width', '0');
        $('.tc-minimalist-navbar-navigation-container').attr('aria-expanded', "false")
    }
});

$(window).on('resize', function () {
    if ($(window).width() >= 768) {
        $('.tc-minimalist-navbar-navigation-container').css('height', '12vh');
        $('.tc-minimalist-navbar-navigation-container').attr('aria-expanded', "true")
    }
    else {
        $('.tc-minimalist-navbar-navigation-container').css('height', '0');
        $('.tc-minimalist-navbar-navigation-container').css('border-bottom-width', '0');
        $('.tc-minimalist-navbar-navigation-container').attr('aria-expanded', "false")
    }
})