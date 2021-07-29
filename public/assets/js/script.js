

//plus minus

function increment() {
  document.getElementById('jumlah').stepUp();
}
function decrement() {
  document.getElementById('jumlah').stepDown();
}

// Change Header Color when scrolling
$(window).scroll(function(){
  var selector = $('.navbar'),
      scroll = $(window).scrollTop(),
      offset = $('.banner-section').height();

  if (scroll >= offset) {
    selector.addClass('scroll');
    selector.removeClass('navbar-dark')
    selector.addClass('navbar-light')
  } else {
    selector.addClass('navbar-dark')
    selector.removeClass('navbar-light')
    selector.removeClass('scroll');
  }
});

// Document Ready function

$(document).ready(function(){

  // Carousell Configuration
  $('.slick').slick({  
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:true,
  });

});


