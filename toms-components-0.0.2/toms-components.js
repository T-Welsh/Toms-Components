/*============ Utillity JS ============*/
//Add jQuery Support for dialog elements
jQuery.fn.extend({showModal: function() {
    return this.each(function() {
       if(this.tagName=== "DIALOG"){
            this.showModal();
        }
    });
}});
jQuery.fn.extend({close: function() {
    return this.each(function() {
       if(this.tagName=== "DIALOG"){
            this.close();
        }
    });
}});
/*============ Components JS ============*/
//#region ------------ minimalist-navbar ------------|
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
//#endregion

//#region ------------ carousel-gallery ------------|
$('.tc-carousel-gallery-content-container').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    responsive: [
        {
            breakpoint: 1400,
            settings: {
              slidesToShow: 3
            }
          },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1
          }
        }
    ]
});

$(document).on('click', function (event) {
    //Close Modal if open
    if ($('.tc-carousel-gallery').data('modal-open') == true) {
        //if click event targets the open modal box then do nothing
        const isModal = event.target.matches("[data-carousel-modal]");
        if (!isModal) {
            return;
        }
        //if click event targets anywhere else on the document then close the modal
        $('dialog').close();
        $('.tc-carousel-gallery').data('modal-open', false);
        return;
    }
    //Open Modal if closed
    if ($('.tc-carousel-gallery').data('modal-open') == false) {
        //don't open modal on mobile screen sizes
        if ($(window).width() < 600) {
            return;
        }
        //if click event targets a gallery card image then open the appropriate modal
        if (event.target.matches(".tc-carousel-gallery-card img")) {
            const bigImageModal = ($(event.target).parent()).find('dialog').eq(0);
            bigImageModal.showModal();
            $('.tc-carousel-gallery').data('modal-open', true);
        }
    }
})
//#endregion

//#region ------------ testimonial-carousel ------------|
$('.tc-testimonial-carousel-content-container').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    nextArrow: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right right-arrow" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/></svg>',
    prevArrow: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left left-arrow" viewBox="0 0 16 16">  <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg>',
    autoplay: true,
    autoplaySpeed: 12000,
});
//#endregion

//#region ------------ logo-ticker ------------|
$('.tc-logo-ticker-content-container').slick({
    arrows: false,
    dots: false,
    infinite: true,
    speed: 3000,
    slidesToShow: 1,
    centerMode: false,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    initialSlide: 4
});
//#endregion

//#region ------------ simple-google-map ------------|
function initMap(mapData) {
    // The location of my marker
    const myMarker = { lat: parseFloat(simple_google_map_data.marker.lat), lng: parseFloat(simple_google_map_data.marker.lng) };
    // The map, centered at my marker
    const map = new google.maps.Map(document.getElementById(simple_google_map_data.id), {
      zoom: parseFloat(simple_google_map_data.marker.zoom),
      center: myMarker,
    });
    // The marker, positioned at my marker
    const marker = new google.maps.Marker({
      position: myMarker,
      map: map,
    });
  }
  
  window.initMap = initMap;
  //#endregion