$(document).ready(function(){
  $("#slider1").hover(function(){
    $("#slider1 > img").fadeToggle(500)
    $("#slider1 > .slider-description").fadeToggle(500)
  });

  $("#slider2").hover(function(){
    $("#slider2 > img").fadeToggle(500)
    $("#slider2 > .slider-description").fadeToggle(500)
  });

  $("#slider3").hover(function(){
    $("#slider3 > img").fadeToggle(500)
    $("#slider3 > .slider-description").fadeToggle(500)
  });
});
