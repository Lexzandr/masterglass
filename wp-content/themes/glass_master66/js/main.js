$(function () {
    $('.hamburger-menu').on('click', function() {
        $('.bar').toggleClass('animate');
        $('.top_menu').find('.menu').toggle('fast');
    });

    $(document).on('click', 'a[href^="#zamer"]', function (e) {
        e.preventDefault();
        $('#zamer').modal('toggle');
    });


    $('.mfp-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
            },
            gallery: {
                enabled: true,
                tCounter: '<span class="mfp-counter">%curr% из %total%</span>'
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }
        }); 
    });
});


function fixinTopMenu() {
    var scroll_position = $(document, window).scrollTop(),
        top_offset = 124,
        top_menu = $('header');
    if(  scroll_position > top_offset ){
        top_menu.addClass('fixed');
    }else{
        top_menu.removeClass('fixed')
    }
}