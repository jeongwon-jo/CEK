$(function () {
  $('.title_container').addClass('fixed')

  let lastScrollTop = 0
  function scrollHeader() {
    var _header = $('.header');
    let vh_100 = $('.title_container').css('height');
    var currentPos = $(window).scrollTop();
    var moveDistance = currentPos - lastScrollTop;
    var scrollRange = -10;
    if (moveDistance > 0) {
      _header.addClass('hide');  
    }
    else {
      if (moveDistance < scrollRange) {
        if (Number(vh_100.split("px")[0]) >= currentPos) { 
          _header.removeClass('primary')
          _header.addClass('transparent')
        } else {
          _header.removeClass('transparent')
          _header.addClass('primary')
        }
        _header.removeClass('hide');
      }
    }
    lastScrollTop = currentPos;
  }

  let top = 85;
  if (Mobile()) {
    top = 54;
  };

  $(window).scroll(function() {
    scrollHeader()
    var currentPos = $(window).scrollTop();

    if (currentPos > 150) {
      $('.title_content').addClass('fadeOut')
    }

    if (currentPos == 0) {
      $('.title_container').removeClass('fixed')
      setTimeout(function () {
        $('.title_container').addClass('fixed')
      }, 300)
      
      $('.title_content').removeClass('fadeOut')
      $('.title_content').addClass('fadeIn')
    } else {
      $('.title_content').removeClass('fadeIn')
    }
  });
})
