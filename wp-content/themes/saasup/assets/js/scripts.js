$(document).ready(function(){
    $('.single-counter h1').counterUp({
        delay: 10,
        time: 10000,
    });
    $('.menu_icon').click(function(){
        $('.menu').slideToggle(500);
    });
    $('#myCarousel').owlCarousel({
        items:1,
        nav:true,
        navText: ['<i class="fa-solid fa-chevron-left"></i>','<i class="fa-solid fa-chevron-right"></i>'],
        autoplay:true,
        autoplayTimeout:3000,
        loop:true,
    });
});

AOS.init();