<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/business_04_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_business?></li>
              <li class="active red"><?PHP echo $menu_business4?></li>
            </ul>
            <h1><?PHP echo $menu_business4?></h1>
          </div>
        </div>
        <div class="content_area">
          <div class="business__inner industrial">
            <div class="business_box">
              <div class="title">
                <h3><?PHP echo $menu_business4?></h3>
              </div>
              <div class="content">
                <p>
                  <?PHP echo $business4_cnts?>
                </p>
                <div class="img" style="margin-top: 40px; height: auto">
                  <?php if($COOKIE_LANG == "en"){ ?>
                    <img src="/_img/subpage/business4_img_01_en.png" alt="">
                  <?php }else{ ?> 
                    <img src="/_img/subpage/business4_img_01.png" alt="">
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="business_card_wrap">
              <div class="title">
                <h3><?PHP echo $business4_cards_title?></h3>
              </div>
              <div class="business_card_list">
                <div class="business_card">
                  <div class="desc">
                    <h5><?PHP echo $business4_card1_title?></h5>
                    <p><?PHP echo $business4_card1_cnts?></p>
                  </div>
                  <div class="thum">
                    <img src="/_img/subpage/business4_img_02.png" alt="">
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
          start: '-=20%',
          end: '-=10%',
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
      tl2.set($('.business_card_list .business_card'), {y: -30, opacity: 0})

      tl2.to($('.business_box .title'), {y: 0,  opacity: 1, duration: 1})
      tl2.to($('.business_box .content'), {y: 0,  opacity: 1, duration: 1, delay: 0.2})
      tl2.to($('.business_card_list .business_card'), {y: 0,  opacity: 1, duration: 1, delay: 0.2})
    })
  </script>
</body>

</html>