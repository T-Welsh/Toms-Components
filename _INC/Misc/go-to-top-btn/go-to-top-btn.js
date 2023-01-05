//Go To Top Btn v1.0.0

//Only Show once user begins scrolling down page
$(window).on('scroll', () => {
    if($(window).scrollTop() >= $(window).height()/$('.tc-go-to-top-btn').data('scroll-trigger')) {
        $('.tc-go-to-top-btn').css('display', 'flex');
    }
    if(($(window).scrollTop() < $(window).height()/$('.tc-go-to-top-btn').data('scroll-trigger'))) {
        $('.tc-go-to-top-btn').hide();
    }
})