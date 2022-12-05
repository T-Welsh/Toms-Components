/**Carousel Gallery 1.0.1 */
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

