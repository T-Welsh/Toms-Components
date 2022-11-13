/*============ Mouse Effects ============*/
$('.tc-girder-navbar-link-container').on('mouseenter', function (event) {

    $('#tc-girder-navbar-link-mouse-filter').css('width', '3rem');
    $('#tc-girder-navbar-link-mouse-filter').css('height', '3rem');

    const mouseFilter = document.getElementById("tc-girder-navbar-link-mouse-filter");
    window.onmousemove = e => {
        const mouseFilterY = e.clientY - mouseFilter.offsetHeight / 2;
        const mouseFilterX = e.clientX - mouseFilter.offsetWidth / 2;
      
        $('#tc-girder-navbar-link-mouse-filter').offset({top:mouseFilterY, left:mouseFilterX});
    }

});

$('.tc-girder-navbar-link-container').on('mouseleave', function (event) {

    const mouseFilter = document.getElementById("tc-girder-navbar-link-mouse-filter");
    window.onmousemove = e => {
        const mouseFilterY = e.clientY - mouseFilter.offsetHeight / 2;
        const mouseFilterX = e.clientX - mouseFilter.offsetWidth / 2;
      
        $('#tc-girder-navbar-link-mouse-filter').offset({top:mouseFilterY, left:mouseFilterX});
    }

    $('#tc-girder-navbar-link-mouse-filter').css('width', '0px');
    $('#tc-girder-navbar-link-mouse-filter').css('height', '0px');
});

$('.tc-girder-navbar-contact-container').on('mouseenter', function (event) {
    $('#tc-girder-navbar-link-mouse-filter').css('width', '3rem');
    $('#tc-girder-navbar-link-mouse-filter').css('height', '3rem');

    const mouseFilter = document.getElementById("tc-girder-navbar-link-mouse-filter");
    window.onmousemove = e => {
        const mouseFilterY = e.clientY - mouseFilter.offsetHeight / 2;
        const mouseFilterX = e.clientX - mouseFilter.offsetWidth / 2;
      
        $('#tc-girder-navbar-link-mouse-filter').offset({top:mouseFilterY, left:mouseFilterX});
    }
});


$('.tc-girder-navbar-contact-container').on('mouseleave', function (event) {

    const mouseFilter = document.getElementById("tc-girder-navbar-link-mouse-filter");
    window.onmousemove = e => {
        const mouseFilterY = e.clientY - mouseFilter.offsetHeight / 2;
        const mouseFilterX = e.clientX - mouseFilter.offsetWidth / 2;
      
        $('#tc-girder-navbar-link-mouse-filter').offset({top:mouseFilterY, left:mouseFilterX});
    }

    $('#tc-girder-navbar-link-mouse-filter').css('width', '0px');
    $('#tc-girder-navbar-link-mouse-filter').css('height', '0px');
});

/*============ Draw Functionality ============*/
$('.tc-girder-navbar-tray-btn').on('click', function (event) {
    if($(".tc-girder-navbar-contact-container").is(':visible')) {
        $(".tc-girder-navbar-contact-container").slideUp();
    }
    else {
        $(".tc-girder-navbar-contact-container").slideDown({
            start: function () {
              $(this).css({
                display: "flex"
              })
            }
          });
    }
    if($(".tc-girder-navbar-social-container").is(':visible')) {
        $(".tc-girder-navbar-social-container").slideUp();
    }
    else {
        $(".tc-girder-navbar-social-container").slideDown({
            start: function () {
                $(this).css({
                display: "flex"
                })
            }
        });
    }
    if ($(window).width() < 600) {
        if($(".tc-girder-navbar-link-container").is(':visible')) {
            $(".tc-girder-navbar-link-container").slideUp();
        }
        else {
            $(".tc-girder-navbar-link-container").slideDown({
                start: function () {
                    $(this).css({
                    display: "flex"
                    })
                }
            });
        }
    }
})

/*============ Reset view on screen resize ============*/
$(window).on('resize', function (event) {
    if ($(window).width() > 600) {
        $(".tc-girder-navbar-link-container").css('display', 'flex');
    }
    else {
        $(".tc-girder-navbar-link-container").slideUp();
    }
    if ($(window).width() > 900) {
        $(".tc-girder-navbar-social-container").css('display', 'flex');
        $(".tc-girder-navbar-contact-container").css('display', 'flex');
    }
    else {
        $(".tc-girder-navbar-social-container").slideUp();
        $(".tc-girder-navbar-contact-container").slideUp();
    }
})