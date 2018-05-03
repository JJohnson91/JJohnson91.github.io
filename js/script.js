$(document).ready(function(){

$(".cross").hide();

  $(".hamburger").click(function(){
    $(".hamburger").hide();
    $(".cross").show();
  });
  $(".cross").click(function(){
    $(".cross").hide();
    $(".hamburger").show();
  });

  $('.single-item').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 1000,
      pauseOnHover: false,
      pauseOnFocus: false
  });


});
