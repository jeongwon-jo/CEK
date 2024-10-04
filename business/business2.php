<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/business_02_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_business?></li>
              <li class="active orange"><?PHP echo $menu_business2?></li>
            </ul>
            <h1><?PHP echo $menu_business2?></h1>
          </div>
        </div>
        <div class="content_area">
          <div class="business__inner">
            <div class="business_box">
              <div class="title">
                <h3><?PHP echo $menu_business2?></h3>
              </div>
              <div class="content">
                <p>
                  <?PHP echo $business2_cnts?>
                </p>
                <div class="img">
                  <img src="/_img/subpage/business2_img_01.png" alt="">
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

      tl2.to($('.business_box .title'), {y: 0,  opacity: 1, duration: 1})
      tl2.to($('.business_box .content'), {y: 0,  opacity: 1, duration: 1, delay: 0.2})

    })
  </script>
</body>

</html>