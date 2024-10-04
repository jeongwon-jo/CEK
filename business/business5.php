<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/business_05_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_business?></li>
              <li class="active"><?PHP echo $menu_business5?></li>
            </ul>
            <h1><?PHP echo $menu_business5?></h1>
          </div>
        </div>
        <div class="content_area">
          <div class="business__inner">
            <div class="business_box">
              <div class="title" style="opacity: 1;">
                <h3><?PHP echo $menu_business5?></h3>
              </div>
              <div class="content" style="opacity: 1;">
                <p>
                  <?PHP echo $business5_cnts?>
                </p>
              </div>
            </div>
            <div class="environmental_analysis">
              <div class="title">
                <h2><?PHP echo $business5_sec2_title?></h2>
                <p><?PHP echo $business5_sec2_cnts?></p>
              </div>
              <div class="analysis_box">
                <div class="title">
                  <h3>01 <?PHP echo $business5_01_title?></h3>
                </div>
                <div class="content">
                  <div class="analysis_01">
                    <div class="analysis_01_color">
                      <div class="color">
                        <div class="icon">
                          <img src="/_img/subpage/business5_color_01.png" alt="">
                        </div>
                        <div class="desc">
                          <h5><?PHP echo $business5_color1_title?></h5>
                          <p>
                            <?PHP echo $business5_color1_cnts?>
                          </p>
                        </div>
                      </div>
                      <div class="color">
                        <div class="icon">
                          <img src="/_img/subpage/business5_color_02.png" alt="">
                        </div>
                        <div class="desc">
                          <h5><?PHP echo $business5_color2_title?></h5>
                          <p>
                            <?PHP echo $business5_color2_cnts?>
                          </p>
                        </div>
                      </div>
                      <div class="color">
                        <div class="icon">
                          <img src="/_img/subpage/business5_color_03.png" alt="">
                        </div>
                        <div class="desc">
                          <h5><?PHP echo $business5_color3_title?></h5>
                          <p>
                            <?PHP echo $business5_color3_cnts?>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="analysis_01_img">
                      <?php if($COOKIE_LANG == "en"){ ?>
                        <img src="/_img/subpage/business5_img_01_en.png" class="pc_show" alt="">
                        <img src="/_img/subpage/business5_img_01_mo_en.png" class="mo_show" alt="">
                      <?php }else{ ?> 
                        <img src="/_img/subpage/business5_img_01.png" class="pc_show" alt="">
                        <img src="/_img/subpage/business5_img_01_mo.png" class="mo_show" alt="">
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="analysis_box">
                <div class="title">
                  <h3>02 <?PHP echo $business5_02_title?></h3>
                  <p><?PHP echo $business5_02_cnts?></p>
                </div>
                <div class="content">
                  <div class="analysis_02">
                    <ul class="step">
                      <li><?PHP echo $business5_02_step1?></li>
                      <li class="arrow"></li>
                      <li><?PHP echo $business5_02_step2?></li>
                      <li class="arrow"></li>
                      <li><?PHP echo $business5_02_step3?></li>
                      <li class="arrow"></li>
                      <li><?PHP echo $business5_02_step4?></li>
                      <li class="arrow"></li>
                      <li><?PHP echo $business5_02_step5?></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="analysis_box">
                <div class="title">
                  <h3>03 <?PHP echo $business5_03_title?></h3>
                  <p><?PHP echo $business5_03_cnts?></p>
                </div>
                <div class="content">
                  <div class="analysis_03">
                    <?php if($COOKIE_LANG == "en"){ ?>
                      <img src="/_img/subpage/business5_img_02_en.png" class="pc_show" alt="">
                      <img src="/_img/subpage/business5_img_02_mo_en.png" class="mo_show" alt="">
                    <?php }else{ ?> 
                      <img src="/_img/subpage/business5_img_02.png" class="pc_show" alt="">
                      <img src="/_img/subpage/business5_img_02_mo.png" class="mo_show" alt="">
                    <?php }?>
                  </div>
                </div>
              </div>
              <div class="analysis_box">
                <div class="title">
                  <h3>04 <?PHP echo $business5_04_title?></h3>
                  <p><?PHP echo $business5_04_cnts?></p>
                </div>
                <div class="content">
                  <div class="analysis_04">
                    <div class="analysis_04_box">
                      <div class="analysis_04_item">
                        <div class="thum">
                          <img src="/_img/subpage/business5_img_03.png" alt="">
                        </div>
                        <h3><?PHP echo $business5_04_card1?></h3>
                      </div>
                      <div class="analysis_04_item">
                        <div class="thum">
                          <img src="/_img/subpage/business5_img_04.png" alt="">
                        </div>
                        <h3><?PHP echo $business5_04_card2?></h3>
                      </div>
                      <div class="analysis_04_item">
                        <div class="thum">
                          <img src="/_img/subpage/business5_img_05.png" alt="">
                        </div>
                        <h3><?PHP echo $business5_04_card3?></h3>
                      </div>
                      <div class="analysis_04_item">
                        <div class="thum">
                          <img src="/_img/subpage/business5_img_06.png" alt="">
                        </div>
                        <h3><?PHP echo $business5_04_card4?></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="business_card_wrap">
              <div class="title">
                <h3><?PHP echo $business5_cards_title?></h3>
              </div>
              <div class="business_card_list">
                <div class="business_card">
                  <div class="desc">
                    <h5><?PHP echo $business5_card1_title?></h5>
                    <p><?PHP echo $business5_card1_cnts?></p>
                  </div>
                  <div class="thum">
                    <img src="/_img/subpage/business5_img_07.png" alt="">
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

    
    // tl2.set($('.business_box .title'), {y: -30, opacity: 0})
    // tl2.set($('.business_box .content'), {y: -30, opacity: 0})
    tl2.set($('.business_card_list .business_card'), {y: -30, opacity: 0})

    // tl2.to($('.business_box .title'), {y: 0,  opacity: 1, duration: 1})
    // tl2.to($('.business_box .content'), {y: 0,  opacity: 1, duration: 1, delay: 0.2})
    tl2.to($('.business_card_list .business_card'), {y: 0,  opacity: 1, duration: 1, delay: 0.2})
  })
  </script>
</body>

</html>