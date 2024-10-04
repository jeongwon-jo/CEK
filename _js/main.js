$(function() {
  tl = TweenMax;

  // Main Fullpage
  $("#fullpage").fullpage({
    autoScrolling: true,
    scrollHorizontally: true,
    slidesNavigation: true,
    controlArrows: false,
    navigation: false,
    responsiveWidth: 768,
    showActiveTooltip: false,
    afterLoad: function (anchorLink, index) {
      // SECTION01
      if (index == 1) {
        headerTransparent();
        $('.fullpage_navi .btn_prev').hide()
      } else {
        $('.fullpage_navi .btn_prev').show()
      }
      // SECTION02
      if (index == 2) {
        headerPrimary();
        if (!$('.section_2').hasClass('animate')) {
          tl.staggerFromTo($(".sec2__inner .title span"), 0.5, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec2__inner .title h2"), 0.5, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0.2, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec2_banner_list .sec2_banner:nth-child(1)"), 0.5, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0.4, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec2_banner_list .sec2_banner:nth-child(2)"), 0.5, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0.6, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec2_banner_list .sec2_banner:nth-child(3)"), 0.5, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0.8, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec2_banner_list .sec2_banner:nth-child(4)"), 0.5, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 1.1, ease: Power1.easeInOut });
          $('.section_2').addClass('animate')
        }
      }
      // SECTION03
      if (index == 3) {
        headerTransparent();
        if (!$('.section_3').hasClass('animate')) { 
          countAnimation()

          $('.section_3').addClass('animate')
        }
        
      }
      // SECTION04
      if (index == 4) {
        headerPrimary();
        if (!$('.section_4').hasClass('animate')) { 
          tl.staggerTo($(".sec4-truck .sec4_green_bg"), 0.5, { left: '325%', delay: 0, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec4-truck .sec4_content .title h1:nth-child(1)"), 0.3, {
            opacity: 0, y: '-30px'
          }, { opacity: 1, y: '0', delay: 0.3, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec4-truck .sec4_content .title h1:nth-child(2)"), 0.3, {
            opacity: 0, y: '-30px'
          }, { opacity: 1, y: '0', delay: 0.6, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec4-truck .sec4_content .title h1:nth-child(3)"), 0.3, {
            opacity: 0, y: '-30px'
          }, { opacity: 1, y: '0', delay: 0.9, ease: Power1.easeInOut, }).call(function () { 
            setTimeout(function () {
              $(".sec4-truck .sec4_content .title h1").addClass('active')
            }, 200)
          }) ;
        
          tl.staggerFromTo($(".sec4-truck .sec4_top h2"), 0.4, {
            opacity: 0, y: '-20px'
          }, { opacity: 1, y: '0', delay: 1.8, ease: Power1.easeInOut });

          tl.staggerFromTo($(".sec4-truck .btns"), 0.4, {
            opacity: 0, y: '-20px'
          }, { opacity: 1, y: '0', delay: 2.1, ease: Power1.easeInOut });

          tl.staggerFromTo($(".sec4-truck .truck_img"), 0.4, {
            opacity: 0
          }, { opacity: 1, x: 164, y: 80, delay: 2.4, ease: Power1.easeInOut });
          
          $('.section_4').addClass('animate')
        }
        
        
      }
      // SECTION05
      if (index == 5) {
        headerTransparent();
        if (!$('.section_5').hasClass('animate')) { 
          tl.staggerFromTo($(".sec5__inner .title span"), 0.8, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec5__inner .title h2"), 0.8, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0.3, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec5__inner .title p"), 0.8, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0.5, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec5_icon_list"), 0.8, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0.8, ease: Power1.easeInOut });

          tl.staggerFromTo($(".sec5_icon_list .sec5_icon:nth-child(1)"), 0.3, {
            transform: "translateX(-40px)"
          }, { transform: "translateX(60px)", delay: 1.3, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec5_icon_list .sec5_icon:nth-child(2)"), 0.3, {
            transform: "translateX(-20px)"
          }, { transform: "translateX(30px)", delay: 1.3, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec5_icon_list .sec5_icon:nth-child(4)"), 0.3, {
            transform: "translateX(20px)"
          }, { transform: "translateX(-30px)", delay: 1.3, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec5_icon_list .sec5_icon:nth-child(5)"), 0.3, {
            transform: "translateX(40px)"
          }, { transform: "translateX(-60px)", delay: 1.3, ease: Power1.easeInOut });
          $('.section_5').addClass('animate')
        }
      
      }
      // SECTION06
      if (index == 6) {
        headerPrimary();
        if (!$('.section_6').hasClass('animate')) { 
          tl.staggerFromTo($(".sec6__inner .title span"), 0.8, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec6__inner .title h2"), 0.8, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0.2, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec6__inner .btn_go_arrow"), 0.8, {
            opacity: 0, y: '-40px'
          }, { opacity: 1, y: '0%', delay: 0.4, ease: Power1.easeInOut });
          tl.staggerFromTo($(".section6_swiper"), 0.8, {
            opacity: 0, x: '-50px'
          }, { opacity: 1, x: 0, delay: 0.8, ease: Power1.easeInOut });
          tl.staggerFromTo($(".section_6 h1.back_tit"), 0.8, {
            opacity: 0, right: '-30%'
          }, { opacity: 1, right: 0, delay: 1.2, ease: Power1.easeInOut });
          $('.section_6').addClass('animate')
        }
      }
      // SECTION07
      if (index == 7) {
        headerTransparent();
        if (!$('.section_7').hasClass('animate')) { 
          tl.staggerFromTo($(".sec7__header"), 0.8, {
            height: '100vh'
          }, { height: '20vh', delay: 0.5, ease: Power1.easeInOut });
          tl.staggerFromTo($(".sec7_content"), 0.8, {
            height: '0vh'
          }, { height: '80vh', delay: 0.5, ease: Power1.easeInOut });
          $('.section_7').addClass('animate')
        }
      }

      // SECTION08
      if (index == 8) {
        headerPrimary()
      }
    },
  });

  $('.fullpage_navi .btn_prev').click(function () {
    $.fn.fullpage.moveSectionUp();
  })

  $('.fullpage_navi .btn_next').click(function () {
    $.fn.fullpage.moveSectionDown();
  })
  // Section01 Slider
  new Swiper(".section1_swiper", {
    slidesPerView: 1,
    centeredSlides: true,
    effect: 'fade',
    loop: true,
    fadeEffect: {
      crossFade: true,
    },
    speed : 1000,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    mousewheel: false,
    watchSlidesVisibility: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      // type: "custom",
      // renderCustom: function (swiper, current, total) {
      //   return '<span class="current">' + leftPad(current) + ' </span>' + '/ ' + leftPad(total);
      // }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      transitionStart: function () {
        tl.staggerFromTo($(".section1_swiper .swiper-slide .bg .img span"), 5 , { scale: 1.08 }, {
          scale: 1,
          ease: Power1.easeInOut
        });
        tl.staggerFromTo($(".section1_swiper .swiper-slide-active .swiper_title span"), 0.8, {
          opacity: 0, y: '-40px'
        }, { opacity: 1, y: '0%', delay: 0.3, ease: Power1.easeInOut });
        tl.staggerFromTo($(".section1_swiper .swiper-slide-active .swiper_title p"), 0.8, {
          opacity: 0, y: '-40px'
        }, { opacity: 1, y: '0%', delay: 0.5, ease: Power1.easeInOut });
        tl.staggerFromTo($(".section1_swiper .swiper-slide-active .swiper_title h1"), 0.8, {
          opacity: 0, y: '-40px'
        }, { opacity: 1, y: '0%', delay: 0.6, ease: Power1.easeInOut });
      },
    },
  });

  // Section06 Slider
  new Swiper(".section6_swiper", {
    slidesPerView: 1,
    spaceBetween : 0,
    direction: "vertical",
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
  });

  // Section07 Slider
  var $slider = $('.media_slider');
  var $progressBar = $('.slider_progress');
  var $progressBarLabel = $( '.slider__label' );
  
  $slider.on('beforeChange', function(slick, nextSlide) {  
    var calc = ((nextSlide) / (slick.slideCount-1)) * 100;
    if(nextSlide == 0) {
      calc = 10
    } 

    $progressBar
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc );
    
    $progressBarLabel.text( calc + '% completed' );
  });

  $slider.slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
  });


  $('body').on('click', '.media_slider .slick-slide:not(.slick-current)', function (e) { 
    if (!$(this).hasClass('slick-current')) {
      $('.media_slider').slick('slickGoTo', $(this).attr("data-slick-index"));
      e.preventDefault();
      return false
    } else {
      e.stopPropagation()
    }
  })

  function leftPad(value) {
    if (value >= 10) {
      return value;
    }
    return `0${value}`;
  }
})

// 카운트 관련 애니메이션
function countAnimation() {
  let countItemList = document.querySelectorAll('.sec3_count_item span.count');

  countItemList.forEach((item, index) => {
    let count = 0;
    let num = item.dataset.count;
    
    let counting = setInterval(function () {
      if (count >= num) {
        count = num;
        clearInterval(counting);
      } else {
        count += Math.ceil(num / 23)
      }

      // item.innerHTML = new Intl.NumberFormat().format(count);
      item.innerHTML = count;
    }, 60)
  });
}
  

window.isMobile = 'ontouchstart' in window || window.DocumentTouch && document instanceof DocumentTouch;

if (!window.isMobile) {
  mouseCursor();
}

//마우스 커서
function mouseCursor() {
  $(document).on('mousemove', function (e) {
    let mouseX = e.clientX-($('.mouse-cursor').width()/2);
    let mouseY = e.clientY - ($('.mouse-cursor').height() / 2);

    if(e.target.tagName =='SELECT') {
      $('.mouse-cursor').fadeOut();
      return;
    }
    if(!$('.mouse-cursor').is(':visible')) $('.mouse-cursor').fadeIn();
    
    $('.mouse-cursor').css({
      left: mouseX + 'px',
      top: mouseY + 'px'
    });				
  });

  $(document).on('mouseleave', function(e){
    $('.mouse-cursor').fadeOut();
  });

  $('.media_item').on('mouseenter', function(){
    $('.mouse-cursor').addClass('click');
  });

  $('.media_item').on('mouseleave', function(){
    $('.mouse-cursor').removeClass('click');
  });

  $('.mouse-effect').on('mouseenter', function(){
    $('.mouse-cursor').addClass($(this).attr('data-cursor'));
  });

  $('.mouse-effect').on('mouseleave', function(){
    $('.mouse-cursor').removeClass($(this).attr('data-cursor'));
  });
}