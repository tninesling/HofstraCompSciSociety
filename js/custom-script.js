$(document).ready(function(){
  // About Us
$(".eboard-bio").flip({
  axis: 'x',
  trigger: 'hover'
});

  // Project Information/Descriptions
  $(".proj").hover(function(){
    $("img", this).fadeToggle(500);
    $(".proj-description", this).fadeToggle(500);
  });
});
