$('.navbar-toggler').on('click', function () {  
    let isExpanded = $('#collapsible-content').attr('aria-expanded');
    if(isExpanded == 'false') {
        $('#collapsible-content').removeClass('hide');
        $(this).html(`<span class="navbar-toggler-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg>
        </span>`)
        isExpanded = 'true';
    }
    else{
        $('#collapsible-content').addClass('hide');
        $(this).html(`<span class="navbar-toggler-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>
        </span>`)
        isExpanded = 'false';
    }
    $('#collapsible-content').attr('aria-expanded', isExpanded);
});

$(window).on('load resize', () => {
    let windowWidth = $(window).width();
    console.log(windowWidth);
    if(windowWidth <= 992 && $('#collapsible-content').attr('aria-expanded') == 'false') {
        $('#collapsible-content').addClass('hide');
    }
    else {
        $('#collapsible-content').removeClass('hide');
    }
})