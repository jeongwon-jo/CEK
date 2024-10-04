<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/esg_01_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_esg?></li>
              <li class="active"><?PHP echo $menu_management1?></li>
            </ul>
            <h1><?PHP echo $menu_management1?></h1>
          </div>
        </div>
        <div class="content_area">
          <div class="management__inner">
            <div class="safety_box">
              <div class="title_thum" style="background-color: #515E2F">
                <div class="bg" style="background-image: url(/_img/subpage/safety_01.png)"></div>
                <h3><?PHP echo $management1_content1_title?></h3>
              </div>
              <div class="content">
                <p>
                  <?PHP echo $management1_content1_content?>
                </p>
              </div>
            </div>
            <div class="safety_box">
              <div class="title_thum" style="background-color: #4D6782">
                <div class="bg" style="background-image: url(/_img/subpage/safety_02.png)"></div>
                <h3><?PHP echo $management1_content2_title?></h3>
              </div>
              <div class="content">
                <p>
                  <?PHP echo $management1_content2_content?>
                </p>
              </div>
            </div>
            <div class="safety_box">
              <div class="title_thum" style="background-color: #ADA619">
                <div class="bg" style="background-image: url(/_img/subpage/safety_03.png)"></div>
                <h3><?PHP echo $management1_content3_title?></h3>
              </div>
              <div class="content">
                <p>
                  <?PHP echo $management1_content3_content?>
                </p>
              </div>
            </div>
            <div class="safety_box">
              <div class="title_thum" style="background-color: #887677">
                <div class="bg" style="background-image: url(/_img/subpage/safety_04.png)"></div>
                <h3><?PHP echo $management1_content4_title?></h3>
              </div>
              <div class="content">
                <p>
                  <?PHP echo $management1_content4_content?>
                </p>
              </div>
            </div>
            <div class="safety_box">
              <div class="title_thum" style="background-color: #A26855">
                <div class="bg" style="background-image: url(/_img/subpage/safety_05.png)"></div>
                <h3><?PHP echo $management1_content5_title?></h3>
              </div>
              <div class="content">
                <p>
                  <?PHP echo $management1_content5_content?>
                </p>
              </div>
            </div>
            <div class="safety_box">
              <div class="title_thum" style="background-color: #0E668D">
                <div class="bg" style="background-image: url(/_img/subpage/safety_06.png)"></div>
                <h3><?PHP echo $management1_content6_title?></h3>
              </div>
              <div class="content">
                <p>
                  <?PHP echo $management1_content6_content?>
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
          start: '-=20%',
          end: 'end end',
          scrub: 2,
          markers: false,
          once: true,
          invalidateOnRefresh: true,
          onEnter: () => {
            $('.header').removeClass('transparent')
            $('.header').addClass('primary')
          },
        },
      })
      
      // tl2.set($('.safety_box .title_thum .bg'), {left: '-100%', opacity: 0})
      // tl2.set($('.safety_box .title_thum h3'), {opacity: 0})
      // tl2.set($('.safety_box .content p'), {y: -30, opacity: 0})
      
      // tl2.to($('.safety_box .title_thum .bg'), {left: 0, opacity: 1, duration: 1})
      // tl2.to($('.safety_box .title_thum h3'), {opacity: 1, duration: 0.3})
      // tl2.to($('.safety_box .content p'), {y: 0, opacity: 1, duration: 0.3})

      const safetyItem = gsap.utils.toArray(".safety_box");
      safetyItem.forEach((obj, index) => {
        const tl3 = gsap.timeline({
          scrollTrigger: {
            trigger: obj,
            pin: false,
            start: '-=80%',
            end: 'bottom bottom',
            scrub: false,
            markers: false,
            once: true
          },
        })

        tl3.set($(obj).find('.title_thum .bg'), {left: '-100%', opacity: 0})
        tl3.set($(obj).find('.title_thum h3'), {y: -30, opacity: 0})
        tl3.set($(obj).find('.content p'), {y: -30, opacity: 0})

        tl3.add("show1")
          .to($(obj).find('.title_thum .bg'), {left: 0, opacity: 1, duration: 0.8}, "show1")
          .to($(obj).find('.title_thum h3'), {y: 0,opacity: 1, duration: 0.3, delay: 0.4}, "show1")
          .to($(obj).find('.content p'), {y: 0, opacity: 1, duration: 0.3 , delay: 0.8}, "show1")
      });
    })
  </script>
</body>

</html>