$(function() {
    handleSlick();
    handleAosAnimation();
    handleNavigationLocation();
});

function handleSlick() {
    $('#announcement').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        speed: 800,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });
}

function handleAosAnimation() {
    AOS.init({
        easing: 'ease-in-out-sine'
    });
}

function handleNavigationLocation() {
    $('.navigation-item').on('click', function() {
        var location = $(this).data('id');
        $('html').animate({
            scrollTop: $('#'+ location).offset().top - 100
        }, 800);
    });
}