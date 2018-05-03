$(document).ready(function(){

 $(".cform").on("submit" , function(e){

   var hasError = false;

    $(".inputValidation").each(function(){
      var $this = $(this);
      var $label = $("label[for='"+$(this).attr("id")+"']");

      if($this.val() == ""){
        hasError = true;
        $this.addClass("inputError");
        $label.addClass("label_error");
        e.preventDefault();
      }if($this.val() != ""){
       $this.removeClass("inputError");
       $label.removeClass("label_error");
      }else{
       return true;
     }
    });

    $(".emailValidation").each(function(){
      var $this = $(this);
      var $label = $("label[for='"+$(this).attr("id")+"']");
      var validateEmail = function(elementValue){
          var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(elementValue);
      }
      var value = $('#email').val();
      var valid = validateEmail(value);

      if($this.val() == ""){
        hasError = true;
        $this.addClass("inputError");
        $label.addClass("label_error");
        e.preventDefault();
      }if(!valid){
        $("#email").addClass("inputError");
        $label.addClass("label_error");
        e.preventDefault();
      }else{
       return true;
     }
    });

 });

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
       pauseOnHover: false,
       pauseOnFocus: false
   });
    });
