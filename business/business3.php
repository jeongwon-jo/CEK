<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/business_03_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_business?></li>
              <li class="active blue"><?PHP echo $menu_business3?></li>
            </ul>
            <h1><?PHP echo $menu_business3?></h1>
          </div>
        </div>
        <div class="content_area">
          <div class="business__inner">
            <div class="business_box bdn">
              <div class="title">
                <h3><?PHP echo $menu_business3?></h3>
              </div>
              <div class="content">
                <p><?PHP echo $business3_cnts?></p>
              </div>
            </div>
            <div class="business_img_box">
              <?php if($COOKIE_LANG == "en"){ ?>
                <img src="/_img/subpage/business3_img_01_en.png" alt="">
              <?php }else{ ?> 
                <img src="/_img/subpage/business3_img_01.png" alt="">
              <?php }?>
            </div>
            <div class="business_card_wrap">
              <div class="title">
                <h3><?PHP echo $business3_cards_title?></h3>
              </div>
              <div class="business_card_list">
                <div class="business_card">
                  <div class="desc">
                    <h5><?PHP echo $business3_card1_title?></h5>
                    <p><?PHP echo $business3_card1_cnts?></p>
                  </div>
                  <div class="thum">
                    <img src="/_img/subpage/business3_img_02.png" alt="">
                  </div>
                </div>
                <div class="business_card">
                  <div class="desc">
                    <h5><?PHP echo $business3_card2_title?></h5>
                    <p><?PHP echo $business3_card2_cnts?></p>
                  </div>
                  <div class="thum">
                    <img src="/_img/subpage/business3_img_03.png" alt="">
                  </div>
                </div>
                <div class="business_card">
                  <div class="desc">
                    <h5><?PHP echo $business3_card3_title?></h5>
                    <p><?PHP echo $business3_card3_cnts?></p>
                  </div>
                  <div class="thum">
                    <img src="/_img/subpage/business3_img_04.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
  <script src="/_js/subpage.js?v=<?php echo date('Ymdhis'); ?>"></script>
  <script>
    $(function() {
      headerTransparent()

      const tl2 = gsap.timeline({
        scrollTrigger: {
          trigger: '.content_area',
          pin: false,
          start: '-=30%',
          end: '-=30%',
          scrub: 3,
          markers: false,
          once: true,
          onEnter: () => {
            $('.header').removeClass('transparent')
            $('.header').addClass('primary')
          },
        },
      })

      tl2.set($('.business_box .title'), {y: -30, opacity: 0})
      tl2.set($('.business_box .content'), {y: -30, opacity: 0})
      tl2.set($('.business_img_box'), {y: -30, opacity: 0})
      tl2.set($('.business_card_list .business_card'), {y: -30, opacity: 0})

      tl2.to($('.business_box .title'), {y: 0,  opacity: 1, duration: 1})
      tl2.to($('.business_box .content'), {y: 0,  opacity: 1, duration: 1, delay: 0.2})
      tl2.to($('.business_img_box'), {y: 0,  opacity: 1, duration: 1, delay: 0.2})
      tl2.to($('.business_card_list .business_card'), {y: 0,  opacity: 1, duration: 1, delay: 0.4})
    })
  </script>
</body>

</html>