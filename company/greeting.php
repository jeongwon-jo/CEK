<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/company_01_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_company?></li>
              <li class="active"><?PHP echo $menu_greeting?></li>
            </ul>
            <h1><?PHP echo $menu_greeting?></h1>
            <p><?PHP echo $greeting_title_text?></p>
          </div>
        </div>
        <div class="content_area">
          <div class="greeting__inner">
            <div class="greeting_text">
              <h1><?PHP echo $greeting_content_title?></h1>
              <p><?PHP echo $greeting_content?></p>
            </div>
            <div class="thum">
              <img src="/_img/subpage/greeting_img.png" alt="">
              <h3><?PHP echo $greeting_ceo?></h3>
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
          start: '-=40%',
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
      
      tl2.set('.greeting_text h1', { y: -30, opacity:0 });
      tl2.set('.greeting_text p', { y: -30, opacity:0 });
      tl2.set('.greeting__inner .thum', { y: -30, opacity:0 });

      tl2.to(".greeting_text h1", { y: 0, opacity:1 , duration: 4 })
      tl2.to(".greeting_text p", { y: 0, opacity:1 , duration: 4 })
      tl2.to(".greeting__inner .thum", { y: 0, opacity:1 , duration: 4 })
    })

    
  </script>
</body>

</html>