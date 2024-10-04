$(function () {
	/* Nice Select */
	$(".nice-select").niceSelect();

	/* Datepicker */
  $(".datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
    monthNames: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
    monthNamesShort: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
  });

  $('.mo_open_category').click(function () {
    $('.mo_category').addClass('open')
    $("body").addClass("fixed");
    const pageY = window.scrollY;
    $("body.fixed").css("position", "fixed");
    $("body.fixed").css("left", "0");
    $("body.fixed").css("top", `${(-(pageY))}px`);
  })

  $('.mo_close_category').click(function () {
    $('.mo_category').removeClass('open')
    const top = $("body").css("top").replace("px","");
    const topNum = (Number(-top));

    $("body.fixed").css("top", `0px`);
    $("body.fixed").css("position", "static");
    $(window).scrollTop(topNum);
    $("body").removeClass("fixed");
  })

  // $('ul.mo_gnb>li:nth-child(1) ul.mo_snb').slideDown()

  $('ul.mo_gnb>li>span').click(function () {
    $('ul.mo_gnb>li').not($(this).parent('li')).removeClass('active')
    $('ul.mo_gnb ul.mo_snb').not($(this).siblings('ul.mo_snb')).slideUp()

    $(this).parent('li').toggleClass('active')
    $(this).siblings('ul.mo_snb').slideToggle()
  })

  $('.title_breadcrumb .selected').click(function () {
    $(this).parents('.depth').toggleClass('open')
  })

  window.addEventListener("resize", function () {
    ScrollTrigger.refresh();
    ScrollTrigger.saveStyles();
  });
})


function Mobile() {
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    return true;
  }

  if (window.innerWidth < 767) {
    return true
  }
  return false;
}

function leftPad(value) {
  if (value >= 10) {
    return value;
  }

  return `0${value}`;
}

// header
let currentHeaderClass = 'primary';
$('.header').mouseover(function () {
  currentHeaderClass = $(this).attr('class');
  $(this).removeClass('transparent')
  $(this).removeClass('primary')
  $(this).addClass('hover')
}).mouseout(function () {
  $(this).removeClass('hover')
  $(this).addClass(currentHeaderClass.split("header ")[1])
})

$('.header nav#gnb').mouseover(function () {
  $('.header_bg').addClass('active')
  $('.header nav#gnb .gnb_li .snb').show()
}).mouseout(function () {
  $('.header_bg').removeClass('active')
  $('.header nav#gnb .gnb_li .snb').hide()
})

function hideHeader() {
  $('.header').addClass('hide')
}

function headerTransparent() {
  $('.header').removeClass('primary')
  $('.header').addClass('transparent')
}

function headerPrimary() {
  $('.header').removeClass('transparent')
  $('.header').addClass('primary')
}

/**
 * @description GNB 활성화
 */
const activePage               = window.location.pathname;
const gnbItemLinks             = document.querySelectorAll(".mo_gnb .mo_snb li a");

for (item of gnbItemLinks) {
	if (item.attributes.length > 0) {
    if (activePage == item.attributes[0].nodeValue) {
      $(item).parents('.mo_gnb_li').addClass('active')
      $(item).parents('.mo_snb').slideDown()
      item.classList.add("active");
    }
  }
}

function Language(lang) {
	$.ajax({
		url: "/_pro_inc/lang_action.php",
		type: "POST",
		data: { lang },
		success: function (data) {
			location.reload();
		}
	});
}