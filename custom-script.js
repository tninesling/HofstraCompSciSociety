$(document).ready(function(){
  // About Us
  $("#eboard-p").hover(function(){
    $("#eboard-p > h2").fadeToggle(500)
    $("eboard-p > h3").fadeToggle(500)
  })

  // Project Information/Descriptions
  $("#proj1").hover(function(){
    $("#proj1 > img").fadeToggle(500)
    $("#proj1 > .proj-description").fadeToggle(500)
  });

  $("#proj2").hover(function(){
    $("#proj2 > img").fadeToggle(500)
    $("#proj2 > .proj-description").fadeToggle(500)
  });

  $("#proj3").hover(function(){
    $("#proj3 > img").fadeToggle(500)
    $("#proj3 > .proj-description").fadeToggle(500)
  });
});
