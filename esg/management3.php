<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/esg_03_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_esg?></li>
              <li class="active"><?PHP echo $menu_management3?></li>
            </ul>
            <h1><?PHP echo $menu_management3?></h1>
          </div>
        </div>
        <div class="content_area">
          <div class="management__inner">
            <div class="sustainable_box green">
              <div class="title_thum">
                <div class="bg" style="background-image: url(/_img/subpage/sustainable_01.png)">
                  <h3><?PHP echo $sustain1_title?></h3>
                </div>
              </div>
              <div class="content">
                <div class="sustainable_step">
                  <div class="step">
                    <div class="step_title" style="background-color: #01C258"><?PHP echo $sustain1_content_step1_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain1_content_step1_cnts?>
                    </div>
                  </div>
                  <div class="step">
                    <div class="step_title" style="background-color: #01B552"><?PHP echo $sustain1_content_step2_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain1_content_step2_cnts?>
                    </div>
                  </div>
                  <div class="step">
                    <div class="step_title" style="background-color: #01A84C"><?PHP echo $sustain1_content_step3_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain1_content_step3_cnts?>
                    </div>
                  </div>
                  <div class="step">
                    <div class="step_title" style="background-color: #019C47"><?PHP echo $sustain1_content_step4_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain1_content_step4_cnts?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sustainable_box orange">
              <div class="title_thum">
                <div class="bg" style="background-image: url(/_img/subpage/sustainable_02.png)">
                  <h3><?PHP echo $sustain2_title?></h3>
                </div>
              </div>
              <div class="content">
                <div class="sustainable_step">
                  <div class="step">
                    <div class="step_title" style="background-color: #E9914A"><?PHP echo $sustain2_content_step1_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain2_content_step1_cnts?>
                    </div>
                  </div>
                  <div class="step">
                    <div class="step_title" style="background-color: #E68231"><?PHP echo $sustain2_content_step2_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain2_content_step2_cnts?>
                    </div>
                  </div>
                  <div class="step">
                    <div class="step_title" style="background-color: #E0731B"><?PHP echo $sustain2_content_step3_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain2_content_step3_cnts?>
                    </div>
                  </div>
                  <div class="step">
                    <div class="step_title" style="background-color: #CA6718"><?PHP echo $sustain2_content_step4_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain2_content_step4_cnts?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sustainable_box blue">
              <div class="title_thum">
                <div class="bg" style="background-image: url(/_img/subpage/sustainable_03.png)">
                  <h3><?PHP echo $sustain3_title?></h3>
                </div>
              </div>
              <div class="content">
                <div class="sustainable_step">
                  <div class="step">
                    <div class="step_title" style="background-color: #0073EF"><?PHP echo $sustain3_content_step1_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain3_content_step1_cnts?>
                    </div>
                  </div>
                  <div class="step">
                    <div class="step_title" style="background-color: #0069D9"><?PHP echo $sustain3_content_step2_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain3_content_step2_cnts?>
                    </div>
                  </div>
                  <div class="step">
                    <div class="step_title" style="background-color: #005EC3"><?PHP echo $sustain3_content_step3_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain3_content_step3_cnts?>
                    </div>
                  </div>
                  <div class="step">
                    <div class="step_title" style="background-color: #0055B0"><?PHP echo $sustain3_content_step4_title?></div>
                    <div class="step_content">
                      <?PHP echo $sustain3_content_step4_cnts?>
                    </div>
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
          pin: true,
          start: 'top top',
          end: 'end end',
          scrub: 3,
          markers: false,
          once: true,
          onEnter: () => {
            $('.header').removeClass('transparent')
            $('.header').addClass('primary')
          },
        },
      })

      const sustainableItem = gsap.utils.toArray(".sustainable_box");
      sustainableItem.forEach((obj, index) => {
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
        tl3.set($(obj).find('.title_thum .bg h3'), {y: -30, opacity: 0})
        tl3.set($(obj).find('.step_title'), {y: -30, opacity: 0})
        tl3.set($(obj).find('.step_content'), {y: -30, opacity: 0})

        tl3.add("show1")
          .to($(obj).find('.title_thum .bg'), {left: 0, opacity: 1, duration: 0.8}, "show1")
          .to($(obj).find('.title_thum .bg h3'), {y: 0, opacity: 1, duration: 1, delay: 0.8}, "show1")
          .to($(obj).find('.step_title'), {y: 0, opacity: 1, duration: 0.5, delay: 1}, "show1")
          .to($(obj).find('.step_content'), {y: 0, opacity: 1, duration: 0.5, delay: 1.3}, "show1")
      });
    })
  </script>
</body>

</html>