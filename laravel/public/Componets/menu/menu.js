$(".menu-icon").click(function () {
  $("#menuList").show(0.000000000005);
  $(".closemenu").show(0.000000000005);
  $(".openmenu").hide(0.000000000005);
});


$(".closemenu").hide(0.000000000005);

$(".closemenu").click(function () {
  $("#menuList").hide(0.000000000005);
  $(".closemenu").hide(0.000000000005);
  $(".openmenu").show(0.000000000005);
});
$("#slider").on("input change", (e)=>{
  const sliderPos = e.target.value;
  // Update the width of the foreground image
  $('.foreground-img').css('width', `${sliderPos}%`)
  // Update the position of the slider button
  $('.slider-button').css('left', `calc(${sliderPos}% - 18px)`)
});

