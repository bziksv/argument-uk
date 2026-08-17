function is_mobile() {
  return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
}

jQuery(document).ready(function($) {
  if (!is_mobile()) {
    $('.wrapper-loader').fadeOut(200);
  } else {
    $('.wrapper-loader').fadeOut(10);
  }
  $(".hamburger").on("click", function() {
    $('.head-menu_hidden').fadeToggle(200);
    $(this).toggleClass('is-active');
  });

 if (is_mobile()) {
  $('.head-menu_item >a').on("click", function() {
      if($(window).width() < 577){
        $('.head_bottom-panel').toggleClass('is-active');
        $('.global-wrapper').toggleClass('global-pad-mod');
       }
    // $(this).closest('li').toggleClass('active');
    // $('html').toggleClass('is-hidden');
    if($(this).siblings('.dropdown-content').length> 0){
        $(this).siblings('.dropdown-content').toggleClass('is-active');
        return false;
      }
     
    });
    $('.dropdown-menu_item > a').on("click", function() {
       if($(this).siblings('.dropdown-menu_second-level').length> 0){
         var active = false;
         if($(this).siblings('.dropdown-menu_second-level').hasClass('is-active')) active = true;
        $('.dropdown-menu_second-level.is-active').removeClass('is-active');
       if(!active) $(this).siblings('.dropdown-menu_second-level').addClass('is-active');
        return false;
      }
  });
    $('.dropdown-menu_second-level li > a').on("click", function() {
      if($(this).siblings('.dropdown-menu_third-level').length> 0){
         var active = false;
         if($(this).siblings('.dropdown-menu_third-level').hasClass('is-active')) active = true;
       $('.dropdown-menu_third-level.is-active').removeClass('is-active');
         if(!active) $(this).siblings('.dropdown-menu_third-level').toggleClass('is-active');
       return false;
     }
  });
  }

  $('.sidebar-menu_item a').on("click", function() {
      if($(this).siblings('.sidebar-menu_dropdown').length> 0){
        $(this).closest('li').toggleClass('active');
        $(this).siblings('.sidebar-menu_dropdown').slideToggle(150);
       return false;
     }
      });

   $(document).click(function(event) {
      if ($(event.target).closest(".head_bottom-panel").length || $(event.target).closest(".dropdown-content").length ) return;
      $('.dropdown-content').removeClass('is-active');
       $('.head-menu_item').removeClass('active');
        $('.head_bottom-panel').removeClass('is-active');
         $('.global-wrapper').removeClass('global-pad-mod');
      event.stopPropagation();
    });

   if (!is_mobile()) {
    $('.dropdown-menu_item').hover(function(){
      $('.dropdown-menu_item > a').removeClass('is-active');
      $(this).find('a').addClass('is-active');
    });
  } else{
    $('.dropdown-menu_item> a').on('click',function(){
       var active = false;
         if($(this).hasClass('is-active')) active = true;
       $('.dropdown-menu_item > a.is-active').removeClass('is-active');
         if(!active) $(this).addClass('is-active');
    });
  }

  $('.dropdown-menu').hover(function() {}, function() {
     $('.dropdown-menu_item a').removeClass('is-active');
  });
  /*************TAB********************/
  $(".tab-container").each(function() {
    $(this).find(".tab").click(function() {
      if ($(this).hasClass('active')) {
        return false
      } else {
        $(this).parents(".tab-container").find(".tab").removeClass("active");
        $(this).addClass('active')
        $(this).parents(".tab-container").find(".tab-item").removeClass('is-visible')
        $(this).parents(".tab-container").find(".tab-item").eq($(this).index()).addClass('is-visible');
      }
    })
  })
 
   $('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    focusOnSelect: true,
    dots: true,
     responsive: [
     {
      breakpoint: 767,
      settings: {
       arrows: false,
      }
    }, ],
	afterChange: function(slick, currentSlide){
		console.log(slick, currentSlide);
	},
  });
  
	$('.main-slider').on('afterChange', function(event, slick, currentSlide){
		let slide = slick.$slides[currentSlide];
		$(slide).find('.input-checkbox').prop('checked', false);
	});

    $('.our-specialists_slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      centerMode: true,
      centerPadding: '0',
      focusOnSelect: true,
       responsive: [
       {
        breakpoint: 1200,
        settings: {
         slidesToShow: 3,
        }
      },
       {
        breakpoint: 992,
        settings: {
         slidesToShow: 2,
        }
      }, 
       {
        breakpoint: 575,
        settings: {
         slidesToShow: 1,
        }
      },  
      ]
    });
  
    $('.document-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      infinite: false,
       responsive: [
       {
        breakpoint: 1200,
        settings: {
         slidesToShow: 2,
        }
      },
       {
        breakpoint: 992,
        settings: {
         slidesToShow: 1,
        }
      }, 
      {
        breakpoint: 767,
        settings: {
         slidesToShow: 2,
        }
      }, 
       {
        breakpoint: 575,
        settings: {
         slidesToShow: 1,
        }
      },  
      ]
    });

  $('input[type="tel"]').inputmask("+7 (999) 999 99 99", {
    "clearIncomplete": true
  });
  var heightTopHead = $('.ui-header').outerHeight();
  jQuery(window).scroll(function() {
    if ($(window).scrollTop() > heightTopHead) {
        $('.head_bottom-panel').addClass('fixed-menu');
         $('.global-wrapper').addClass('global-pad');
        setTimeout(function() {
          $('.head_bottom-panel').addClass('scroll-transform');
        }, 100);
    } else {
      $('.head_bottom-panel').removeClass('fixed-menu');
       $('.global-wrapper').removeClass('global-pad');
      setTimeout(function() {
        $('.head_bottom-panel').removeClass('scroll-transform');
      }, 100);
    }

    
    if ($(window).scrollTop() > 200) {
      $('.scroll-to-top').addClass('scroll-to-top-visible');
    } else {
      $('.scroll-to-top').removeClass('scroll-to-top-visible');
    }
  });

  jQuery(window).scroll(function() {
    if ($(window).scrollTop() > $(window).height()) {
      $('.scroll-to-top').addClass('scroll-to-top-visible');
    } else {
      $('.scroll-to-top').removeClass('scroll-to-top-visible');
    }
  });
  $('.scroll-to-top').on('click', function() {
    $('html, body').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
 
    $('.popup-content').magnificPopup({
         type: 'inline',
         removalDelay: 300,
         mainClass: 'my-mfp-zoom-in',
         focus: '#name',
         alignTop: true,
         callbacks:{
         beforeOpen: function () {
             $('.fixed-menu').addClass('is-overflow');
             $('.scroll-to-top').addClass('is-hidden');
         },
         afterClose :function() {
              $('.fixed-menu').removeClass('is-overflow');
              $('.scroll-to-top').removeClass('is-hidden');
            },
         
       }
     });
   
  
  if($('.map-container').hasClass('contact_map-container')){
   YaMapsShown = false;
        $(window).on("scroll load resize", function() {
          if (!YaMapsShown) {
            if ($(window).scrollTop() + $(window).height() > $('.map-container').offset().top - 500) {
              showYaMaps();
              YaMapsShown = true;
            }
          }
        });
        function showYaMaps() {
          var script = document.createElement("script");
          script.type = "text/javascript";
          script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
          document.getElementById("map").appendChild(script);
          script.onload = function() {
            ymaps.ready(init);
            var myMap,
              myPlacemark;

            function init() {
              if ($(window).width() > 767) {
                myMap = new ymaps.Map("map", {
                  center: [51.67558307227615,39.20104149999999],
                  zoom: 13,
                  behaviors: ['default', 'scrollZoom']
                });
              } else {
                myMap = new ymaps.Map("map", {
                  center: [51.68858307227615,39.20104149999999],
                  zoom: 13,
                  behaviors: ['default', 'scrollZoom']
                });
              }
              myMap.behaviors.disable('scrollZoom');
              var myPlacemark = new ymaps.Placemark([51.67558307227615,39.20104149999999],  {
                balloonContent: 'ул. Кольцовская, д. 24"Б"',
              }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                // iconImageHref: 'img/icons/marker-icon.png',
                // Размеры метки.
              });
               myMap.geoObjects.add(myPlacemark);
              myPlacemark.balloon.open();
            }
          }
        }
      }
	  
	window.addEventListener('load', () => {
		
	});
	
});