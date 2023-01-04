$('.tc-simple-navbar-navbar-toggler').on('click', function () {  
    let isExpanded = $('#tc-simple-navbar-collapsible-content').attr('aria-expanded');
    if(isExpanded == 'false') {
        $('#tc-simple-navbar-collapsible-content').slideDown( 400, () => {});
        $(this).html(`<span class="tc-simple-navbar-navbar-toggler-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg>
        </span>`)
        isExpanded = 'true';
    }
    else{
        $('#tc-simple-navbar-collapsible-content').slideUp( 400, () => {});
        $(this).html(`<span class="tc-simple-navbar-navbar-toggler-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>
        </span>`)
        isExpanded = 'false';
    }
    $('#tc-simple-navbar-collapsible-content').attr('aria-expanded', isExpanded);
});

$(window).on('load resize', () => {
    let windowWidth = window.innerwidth;
    if(windowWidth <= 992 && $('#tc-simple-navbar-collapsible-content').attr('aria-expanded') == 'false') {
        $('#tc-simple-navbar-collapsible-content').hide()
    }
    else {
        $('#tc-simple-navbar-collapsible-content').show()
    }
})

/*============================================================================*/
// Open dropdown on click
$(document).on('click', function (event) {
    
    const isDropdownButton = event.target.matches("[data-nav-dropdown-button]");
    //ignore click if inside of the open dropdown
    if (!isDropdownButton && event.target.closest("[data-nav-dropdown]") != null){
        return;
    }

    //open dropdown on click
    let currentDropdown;
    let currentDropdownMenu;
    if(isDropdownButton) {
        currentDropdown = event.target.closest("[data-nav-dropdown]");
        currentDropdownMenu = $(currentDropdown).find('.tc-simple-navbar-dropdown-menu')[0];
        $(currentDropdown).attr('aria-expanded', 'true');
        $(currentDropdownMenu).slideDown( 400, () => {});
    }

    //find all dropdown menues other than the one clicked and close them
    document.querySelectorAll('[data-nav-dropdown][aria-expanded="true"]').forEach(dropdown => {
        if(dropdown === currentDropdown) {
            console.log('this is the current dropdown');
            return
        }
        $($(dropdown).find('.tc-simple-navbar-dropdown-menu')[0]).slideUp(400);
        $(dropdown).attr('aria-expanded', 'false');
    });
});

//Open Dropdown on Mouse enter
$("[data-nav-dropdown-button]").on('mouseenter', function (event) {
    console.log('mouseenter');

    //Set open flag on current dropdown
    let currentDropdown = event.target.closest("[data-nav-dropdown]");
    let currentDropdownMenu = $(currentDropdown).find('.tc-simple-navbar-dropdown-menu')[0];
    $(currentDropdown).attr('aria-expanded', 'true');
    $(currentDropdownMenu).stop();
    $(currentDropdownMenu).slideDown( 400, () => {});
});
// Close Dropdown on mouse leave
$(".tc-simple-navbar-dropdown").on('mouseleave', function (event) {
    document.querySelectorAll('[data-nav-dropdown][aria-expanded="true"]').forEach(dropdown => {
        $($(dropdown).find('.tc-simple-navbar-dropdown-menu')[0]).stop();
        $($(dropdown).find('.tc-simple-navbar-dropdown-menu')[0]).slideUp(400);
        $(dropdown).attr('aria-expanded', 'false');
    });
})
