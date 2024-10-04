<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/esg_02_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_esg?></li>
              <li class="active"><?PHP echo $menu_management2?></li>
            </ul>
            <h1><?PHP echo $menu_management2?></h1>
          </div>
        </div>
        <div class="content_area">
          <div class="management__inner">
            <div class="compliance_box">
              <div class="title_thum" style="background-color: #B0978D">
                <div class="bg" style="background-image: url(/_img/subpage/compliance_bg_01.png)"></div>
                <h3><?PHP echo $management2_content1_title?></h3>
              </div>
              <div class="content">
                <div class="compliance_intro">
                  <div class="compliance">
                    <div class="thum">
                      <img src="/_img/subpage/compliance_01.png" alt="">
                    </div>
                    <div class="desc">
                      <h5><?PHP echo $management2_content1_intro1_title?></h5>
                      <p>
                        <?PHP echo $management2_content1_intro1_cnts?>
                      </p>
                    </div>
                  </div>
                  <div class="compliance">
                    <div class="thum">
                      <img src="/_img/subpage/compliance_02.png" alt="">
                    </div>
                    <div class="desc">
                      <h5><?PHP echo $management2_content1_intro2_title?></h5>
                      <p>
                        <?PHP echo $management2_content1_intro2_cnts?>
                      </p>
                    </div>
                  </div>
                  <div class="compliance">
                    <div class="thum">
                      <img src="/_img/subpage/compliance_03.png" alt="">
                    </div>
                    <div class="desc">
                      <h5><?PHP echo $management2_content1_intro3_title?></h5>
                      <p>
                        <?PHP echo $management2_content1_intro3_cnts?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="arrow">
                  <img src="/_img/subpage/compliance_arrow.png" alt="">
                </div>
                <div class="result_box black">
                  <span><?PHP echo $management2_content1_intro_arrow?></span>
                </div>
              </div>
            </div>
            <div class="compliance_box">
              <div class="title_thum" style="background-color: #432913">
                <div class="bg" style="background-image: url(/_img/subpage/compliance_bg_02.png)"></div>
                <h3><?PHP echo $management2_content2_title?></h3>
              </div>
              <div class="content">
                <ul class="contact_step compliance">
                  <li><?php echo $management2_content2_activity1 ?></li>
                  <li class="arrow"></li>
                  <li><?php echo $management2_content2_activity2 ?></li>
                  <li class="arrow"></li>
                  <li><?php echo $management2_content2_activity3 ?></li>
                  <li class="arrow"></li>
                  <li><?php echo $management2_content2_activity4 ?></li>
                </ul>
              </div>
            </div>
            <div class="compliance_box">
              <div class="title_thum" style="background-color: #443E38">
                <div class="bg" style="background-image: url(/_img/subpage/compliance_bg_03.png)"></div>
                <h3><?PHP echo $management2_content3_title?></h3>
              </div>
              <div class="content">
                <ul class="compliance_step">
                  <li>1. <?php echo $management2_content3_activity1 ?></li>
                  <li>2. <?php echo $management2_content3_activity2 ?></li>
                  <li>3. <?php echo $management2_content3_activity3 ?></li>
                  <li>4. <?php echo $management2_content3_activity4 ?></li>
                  <li>5. <?php echo $management2_content3_activity5 ?></li>
                </ul>
              </div>
            </div>
            <div class="compliance_contact">
              <div class="title">
                <h3><?PHP echo $management2_content4_title?></h3>
                <p><span>E-mail</span> CEK-Legal-Inquiry@ce-korea.com</p>
              </div>
              <ul class="contact_step">
                <li><?PHP echo $management2_content4_step1?></li>
                <li class="arrow"></li>
                <li><?PHP echo $management2_content4_step2?></li>
                <li class="arrow"></li>
                <li><?PHP echo $management2_content4_step3?></li>
                <li class="arrow"></li>
                <li><?PHP echo $management2_content4_step4?></li>
                <li class="arrow"></li>
                <li><?PHP echo $management2_content4_step5?></li>
              </ul>
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
      
      // tl2.set($('.compliance_box .title_thum .bg'), {left: '-100%', opacity: 0})
      // tl2.set($('.compliance_box .title_thum h3'), {opacity: 0})
      // tl2.set($('.compliance_box .content'), {y: -30, opacity: 0})
      
      // tl2.to($('.compliance_box .title_thum .bg'), {left: 0, opacity: 1, duration: 1})
      // tl2.to($('.compliance_box .title_thum h3'), {opacity: 1, duration: 0.3})
      // tl2.to($('.compliance_box .content'), {y: 0, opacity: 1, duration: 0.3})

      const complianceItem = gsap.utils.toArray(".compliance_box");
      complianceItem.forEach((obj, index) => {
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
        tl3.set($(obj).find('.content'), {y: -30, opacity: 0})
        tl3.set($('.compliance_contact'), {y: -30, opacity: 0})

        tl3.add("show1")
          .to($(obj).find('.title_thum .bg'), {left: 0, opacity: 1, duration: 0.8}, "show1")
          .to($(obj).find('.title_thum h3'), {y: 0,opacity: 1, duration: 0.3, delay: 0.4}, "show1")
          .to($(obj).find('.content'), {y: 0, opacity: 1, duration: 1, delay: 0.8}, "show1")
          .to($('.compliance_contact'), {y: 0, opacity: 1, duration: 1, delay: 1}, "show1")
      });
    })

    // const tl4 = gsap.timeline({
    //   scrollTrigger: {
    //     trigger: '.compliance_box:nth-child(3)',
    //     pin: false,
    //     start: 'center center',
    //     end: 'bottom bottom',
    //     scrub: false,
    //     markers: false,
    //     once: true
    //   },
    // })

    // tl4.set($('.compliance_contact'), {y: -30, opacity: 0})
    // tl4.to($('.compliance_contact'), {y: 0, opacity: 1, delay: 0.5})
  </script>
</body>

</html>