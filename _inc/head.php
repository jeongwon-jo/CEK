<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEK 주식회사</title>
  <!-- Favicon -->
  <link rel="icon" href="/_img/common/favicon.ico">
  <!-- OpenGraph -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CEK 주식회사" />
  <meta property="og:description" content="CEK 주식회사" />
  <meta property="og:image" content="/_img/common/opengraph.png" />
  <!-- font -->
  <link rel="stylesheet" as="style" crossorigin
    href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/variable/pretendardvariable.min.css" />
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/font-kopub@1.0/kopubdotum.min.css">
  <!-- jQuery CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- DateTimePicker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- Slick Slider -->
  <script src="/_js/slick/slick.js"></script>
  <link rel="stylesheet" href="/_js/slick/slick.css" />
  <link rel="stylesheet" href="/_js/slick/slick-theme.css" />
  <!-- NiceSelect -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- gsap & TWEENMAX -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
  <!-- fullpage.js -->
  <script src="https://cdn.jsdelivr.net/npm/fullpage.js@2.9.4/dist/jquery.fullpage.min.js"></script>
  <link
    href="https://cdn.jsdelivr.net/npm/fullpage.js@2.9.4/dist/jquery.fullpage.min.css"
    rel="stylesheet"
  />
  <!-- Custom CSS & JS -->
  <link rel="stylesheet" href="/_css/reset.css?v=<?php echo date('Ymdhis'); ?>">
  <link rel="stylesheet" href="/_css/variables.css?v=<?php echo date('Ymdhis'); ?>">
  <link rel="stylesheet" href="/_css/layout.css?v=<?php echo date('Ymdhis'); ?>">
  <link rel="stylesheet" href="/_css/common.css?v=<?php echo date('Ymdhis'); ?>">
  <link rel="stylesheet" href="/_css/style.css?v=<?php echo date('Ymdhis'); ?>">
  <link rel="stylesheet" href="/_css/main.css?v=<?php echo date('Ymdhis'); ?>">
  <link rel="stylesheet" href="/_css/attribute.css?v=<?php echo date('Ymdhis'); ?>">

  <?php 
  // 한글 영문페이지 분기
  $COOKIE_LANG = isset($_COOKIE['LANG']) ? $_COOKIE['LANG'] : 'ko';
  if($COOKIE_LANG == "en"){
    @require_once $_SERVER["DOCUMENT_ROOT"]."/_lang/en_US.php";
  }else{
    @require_once $_SERVER["DOCUMENT_ROOT"]."/_lang/ko_KR.php";
  }
  ?>

  <?PHP if($COOKIE_LANG == "en"){ ?>
    <link rel="stylesheet" href="/_css/lang_eng.css">
	<?PHP } ?>

  <script src="/_js/common.js?v=<?php echo date('Ymdhis'); ?>" defer></script>
</head>
