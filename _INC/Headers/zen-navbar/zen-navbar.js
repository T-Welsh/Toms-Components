// Zen Navbar v1.0.0
$('.tc-zen-navbar-panel-toggle-close').on('click', function (event) {
    $('.tc-zen-navbar').attr('aria-expanded',false);
    $('.tc-zen-navbar-panel-toggle-open').show();
    $('.tc-zen-navbar-panel-toggle-close').hide();

});
$('.tc-zen-navbar-panel-toggle-open').on('click', function (event) {
    $('.tc-zen-navbar').attr('aria-expanded',true);
    $('.tc-zen-navbar-panel-toggle-close').show();
    $('.tc-zen-navbar-panel-toggle-open').hide();
});