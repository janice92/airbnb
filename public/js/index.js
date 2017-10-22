$(document).ready(function(){
  $(window).scroll(function(event){
    var y = $(this).scrollTop();
    if ( y >= 10 ) {
      $('.navigation').addClass('nav-transparent').removeClass('nav-color');   
    } else {
      $('.navigation').removeClass('nav-transparent').addClass('nav-color');
    }
  })
})