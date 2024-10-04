<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/company_04_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_company?></li>
              <li class="active"><?PHP echo $menu_ideal?></li>
            </ul>
            <h1><?PHP echo $menu_ideal?></h1>
            <p><?PHP echo $ideal_title_text?></p>
          </div>
        </div>
        <div class="content_area">
          <div class="ideal__inner">
            <div class="title">
              <span>No.1 Waste-to-Energy Company</span>
              <h1><?PHP echo $ideal_content_title1?></h1>
            </div>
            <div class="ideal_list">
              <div class="ideal_item">
                <div class="bg">
                  <img src="/_img/subpage/ideal_01_bg.png" alt="">
                </div>
                <div class="desc" style="background-color: rgb(230, 130, 49, 0.9);">
                  <h2>Focused</h2>
                  <p>
                    <?PHP echo $ideal_challenge_text?>
                  </p>
                </div>
              </div>
              <div class="ideal_item">
                <div class="bg">
                  <img src="/_img/subpage/ideal_02_bg.png" alt="">
                </div>
                <div class="desc" style="background-color: rgb(0, 105, 217, 0.9);">
                  <h2>Trust-worthy</h2>
                  <p>
                    <?PHP echo $ideal_trust_text?>
                  </p>
                </div>
              </div>
              <div class="ideal_item">
                <div class="bg">
                  <img src="/_img/subpage/ideal_03_bg.png" alt="">
                </div>
                <div class="desc" style="background-color: rgb(1, 181, 82, 0.9);">
                  <h2>Professional</h2>
                  <p>
                    <?PHP echo $ideal_professionalism_text?>
                  </p>
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

      tl2.set($('.ideal__inner .title span, .ideal__inner .title h1'), { y: -30, opacity: 0 })
      tl2.set($('.ideal_list .ideal_item'), { opacity: 0 })
      
      tl2.to($('.ideal__inner .title span'), { y: 0, opacity: 1 })
      tl2.to($('.ideal__inner .title h1'), { y: 0, opacity: 1 })
      tl2.to($('.ideal_list .ideal_item'), { opacity: 1 })

      const idealItem = gsap.utils.toArray(".ideal_list .ideal_item");
      const idealItemLength = idealItem.length;

      ScrollTrigger.matchMedia({
        "(min-width: 1200px)": function () {
          idealItem.forEach((obj, index) => {
            var startPoint = index == idealItemLength - 1 ? "top 70%" : "top center";
            ScrollTrigger.create({
              trigger: obj,
              start: startPoint,
              once: true,
              end: "bottom center",
              toggleClass: { targets: obj, className: "active" },
            });
          });
        }
      })
    })
  </script>
</body>

</html>