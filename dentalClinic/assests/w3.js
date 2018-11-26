$(".mySlides > div:gt(0)").hide();

setInterval(function() { 
  $('.mySlides > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('.mySlides');
},  3000);