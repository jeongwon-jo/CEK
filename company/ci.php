<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/company_03_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_company?></li>
              <li class="active"><?PHP echo $menu_ci?></li>
            </ul>
            <h1><?PHP echo $menu_ci?></h1>
            <p><?PHP echo $ci_title_text?></p>
          </div>
        </div>
        <div class="content_area" style="min-height: auto">
          <div class="ci__inner">
            <div class="ci_box">
              <div class="title">
                <h2><?PHP echo $ci_content1_title?></h2>
              </div>
              <div class="content">
                <p>
                  <?PHP echo $ci_content1_text?>
                </p>
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
          start: '-=100%',
          end: 'end end',
          scrub: 2,
          markers: false,
          once: true,
          onEnter: () => {
            $('.header').removeClass('transparent')
            $('.header').addClass('primary')
          },
        },
      })

      tl2.set($('.ci_box'), {y: -30, opacity: 0})
      tl2.to($('.ci_box:nth-child(1)'), {y: 0,  opacity: 1})
      tl2.to($('.ci_box:nth-child(2)'), {y: 0,  opacity: 1})
      tl2.to($('.ci_box:nth-child(3)'), {y: 0,  opacity: 1})
    })
  </script>
</body>

</html>