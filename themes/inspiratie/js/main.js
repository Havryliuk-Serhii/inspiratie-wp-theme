$(document).ready(function(){
	/*	Slider 	*/
    $('.hero-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });
	/*	Scroll 	*/
	$(".btn-scroll").click(function() {
         $('html, body').animate({
             scrollTop: $(".about").offset().top
         }, 1000);
     });
    
});

