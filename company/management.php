<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/company_02_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_company?></li>
              <li class="active"><?PHP echo $menu_management?></li>
            </ul>
            <h1><?PHP echo $menu_management?></h1>
            <p><?PHP echo $management_title_text?></p>
          </div>
        </div>
        <div class="content_area">
          <div class="management__inner">
            <div class="manage_card">
              <div class="card">
                <div class="bg">
                  <img src="/_img/subpage/manage_card_01.png" alt="">
                </div>
                <h1>Mission</h1>
                <div class="text">
                  <p><?PHP echo $management_misson_text?></p>
                </div>
              </div>
              <div class="card">
                <div class="bg">
                  <img src="/_img/subpage/manage_card_02.png" alt="">
                </div>
                <h1>Vision</h1>
                <div class="text">
                  <p><?PHP echo $management_vision_text?></p>
                </div>
              </div>
            </div>
            <div class="manage_core">
              <h2>Core Value</h2>
              <div class="core-value_list">
                <div class="core-value_item">
                  <div class="thum">
                    <img src="/_img/subpage/manage_core_01.png" alt="">
                  </div>
                  <p><?PHP echo $management_core_value1?></p>
                </div>
                <div class="core-value_item">
                  <div class="thum">
                    <img src="/_img/subpage/manage_core_02.png" alt="">
                  </div>
                  <p><?PHP echo $management_core_value2?></p>
                </div>
                <div class="core-value_item">
                  <div class="thum">
                    <img src="/_img/subpage/manage_core_03.png" alt="">
                  </div>
                  <p><?PHP echo $management_core_value3?></p>
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

      gsap.set(".manage_card .card", {  y: -30, opacity: 0 });
      gsap.set(".manage_core h2", { y: -30, opacity: 0, });
      gsap.set(".manage_core .core-value_list", { y: -30, opacity: 0 });

      tl2.to(".manage_card .card", {  y: 0, opacity: 1 , duration: 2 })
      tl2.to(".manage_core h2", { y: 0, opacity: 1, duration: 2})
      tl2.to(".manage_core .core-value_list", { y: 0, opacity: 1, duration: 2})


    })

    
  </script>
</body>

</html>