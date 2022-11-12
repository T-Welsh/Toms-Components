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
