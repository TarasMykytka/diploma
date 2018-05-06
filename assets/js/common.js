var $ = jQuery.noConflict();



$(document).ready(function()
{

    $(".preloader").fadeOut();
    $(".preloader_wrapper").delay(400).fadeOut("slow");

    /* Disable validate error messages |
       Скрываем ошибки о валидации (используем стили) */
    // $('form').validate({
        //     errorPlacement: function(error, element) {}
      // });

    // SVG Fallback
    // if(!Modernizr.svg) {
    // 	$("img[src*='svg']").attr("src", function() {
    // 		return $(this).attr("src").replace(".svg", ".png");
    // 	});
    // }
    // E-mail Ajax Send
    // Documentation & Example: https://github.com/agragregra/uniMail
    // $("form").submit(function() {
  //       if($(this).valid()) {
  //       	var th = $(this);
  //       	$.ajax({
  //       		type: "POST",
  //       		url: "mail.php",
  //       		data: th.serialize()
  //       	}).done(function() {
  //               /* If You use fancybox, uncomment text below |
  //                  Если Вы используете fancybox отправку формы, раскомментируйте текст ниже */
  //       		// $.fancybox.close();
  //       		alert("Thanks!");
  //       		setTimeout(function() {
  //       			th.trigger("reset");
  //       		}, 1000);
  //       	});
  //       	return false;
  //       }
    //   });

    /* Animate blocks when scrolling |
       Анимируем блоки при прокрутке */
    // jQuery("").addClass("no-opacity").viewportChecker({
    // 	classToAdd: 'opacity animated fadeIn',
    // 	offset: 100
    // });

    /* Mask phone number |
       Создаем маску для телефона */
    // $("").mask("+38 (099) 999-99-99");
    $("img, a").on("dragstart", function(event) { event.preventDefault(); });

  $("a[href^='lab-']").click(function( event ) {
    event.preventDefault();
    id = "*[id^="+this.getAttribute("href")+"]";
    blocks = "*[id^="+this.getAttribute("href").slice(0, -1)+"]";
    if($(id).is(':hidden')){
      $(blocks).slideUp("slow");
      $(id).slideDown("slow");
    }
    else
    {
      $(id).slideUp("slow");
    }
  });

  $("a[href='to_labs']").click(function(event){
    event.preventDefault();
    id = '#content_wraper';
    $("html, body").delay(300).animate({scrollTop: $(id).offset().top - 50 }, 600);
  });

    if(window.location.href.indexOf("lab") > -1) {

    }

});



$(window).load(function() {
});
