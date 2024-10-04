<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap" class="home">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div id="fullpage">
        <div id="section_1" class="section section_1">
          <div class="swiper section1_swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="bg">
                  <div class="img">
                    <span style="background: url(./_img/main/main_banner_01.png) no-repeat center center / cover;"></span>
                  </div>
                </div>
                <div class="swiper_title">
                  <span><?PHP echo $main_swiper_slide1_text1?></span>
                  <h1><?PHP echo $main_swiper_slide1_text2?></h1>
                  <p>
                    <?PHP echo $main_swiper_slide1_text3?>
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="bg">
                  <div class="img">
                    <span style="background: url(./_img/main/main_banner_02.png) no-repeat center center / cover;"></span>
                  </div>
                </div>
                <div class="swiper_title">
                  <span><?PHP echo $main_swiper_slide2_text1?></span>
                  <h1><?PHP echo $main_swiper_slide2_text2?></h1>
                  <p>
                    <?PHP echo $main_swiper_slide2_text3?>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="scroll_down">
            <p class="scrolldown_text">scroll down</p>
            <span class="mouse"></span>
          </div>
        </div>
        <div id="section_2" class="section section_2">
          <div class="sec2__inner">
            <div class="title">
              <span>Our Work</span>
              <h2>
                <?PHP echo $section2_title_text2?><br>
                <?PHP echo $section2_title_text3?>
              </h2>
            </div>
            <div class="sec2_banner_list">
              <div class="sec2_banner">
                <div class="bg">
                  <img src="./_img/main/section2_banner01.png" alt="배너이미지">
                </div>
                <div class="top_num">
                  <span class="bar"></span>
                  <span class="num">01</span>
                </div>
                <div class="bottom_info">
                  <h3><?PHP echo $section2_content1_text?></h3>
                </div>
              </div>
              <div class="sec2_banner">
                <div class="bg">
                  <img src="./_img/main/section2_banner02.png" alt="배너이미지">
                </div>
                <div class="top_num">
                  <span class="bar"></span>
                  <span class="num">02</span>
                </div>
                <div class="bottom_info">
                  <h3><?PHP echo $section2_content2_text?></h3>
                </div>
              </div>
              <div class="sec2_banner">
                <div class="bg">
                  <img src="./_img/main/section2_banner03.png" alt="배너이미지">
                </div>
                <div class="top_num">
                  <span class="bar"></span>
                  <span class="num">03</span>
                </div>
                <div class="bottom_info">
                  <h3><?PHP echo $section2_content3_text?></h3>
                </div>
              </div>
              <div class="sec2_banner">
                <div class="bg">
                  <img src="./_img/main/section2_banner04.png" alt="배너이미지">
                </div>
                <div class="top_num">
                  <span class="bar"></span>
                  <span class="num">04</span>
                </div>
                <div class="bottom_info">
                  <h3><?PHP echo $section2_content4_text?></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="section_3" class="section section_3">
          <div class="sec3-count">
            <div class="sec3-count__inner">
              <div class="sec3-count_list">
                <div class="sec3_count_item">
                  <div class="desc">
                    <span><?PHP echo $section3_content1_title?></span>
                    <h1><span class="count" data-count="574">0</span><?PHP echo $section3_content1_unit?></h1>
                  </div>
                  <div class="icon">
                    <img src="/_img/main/section3_count_icon02.png" alt="">
                  </div>
                </div>
                <div class="sec3_count_item">
                  <div class="desc">
                    <span><?PHP echo $section3_content2_title?></span>
                    <h1><span class="count" data-count="695">0</span> <?PHP echo $section3_content2_unit?></h1>
                  </div>
                  <div class="icon">
                    <img src="/_img/main/section3_count_icon01.png" alt="">
                  </div>
                </div>
                <div class="sec3_count_item">
                  <div class="desc">
                    <span><?PHP echo $section3_content3_title?></span>
                    <h1><span class="count" data-count="144">0</span> <?PHP echo $section3_content3_unit?></h1>
                  </div>
                  <div class="icon">
                    <img src="/_img/main/section3_count_icon03.png" alt="">
                  </div>
                </div>
                <div class="sec3_count_item">
                  <div class="desc">
                    <span><?PHP echo $section3_content4_title?></span>
                    <h1><span class="count" data-count="125">0</span> <?PHP echo $section3_content4_unit?></h1>
                  </div>
                  <div class="icon">
                    <img src="/_img/main/section3_count_icon04.png" alt="">
                  </div>
                </div>
                <div class="sec3_count_item">
                  <div class="desc">
                    <span><?PHP echo $section3_content5_title?></span>
                    <h1><span class="count" data-count="120">0</span><span>+</span> <?PHP echo $section3_content5_unit?></h1>
                  </div>
                  <div class="icon">
                    <img src="/_img/main/section3_count_icon05.png" alt="">
                  </div>
                </div>
                <div class="sec3_count_item">
                  <div class="desc">
                    <span><?PHP echo $section3_content6_title?></span>
                    <h1><span class="count" data-count="7">0</span><?PHP echo $section3_content6_unit?></h1>
                  </div>
                  <div class="icon">
                    <img src="/_img/main/section3_count_icon06.png" alt="">
                  </div>
                </div>
                <div class="sec3_count_item">
                  <div class="desc">
                    <span><?PHP echo $section3_content7_title?></span>
                    <h1><span class="count" data-count="250">0</span><span>+</span> <?PHP echo $section3_content7_unit?></h1>
                  </div>
                  <div class="icon">
                    <img src="/_img/main/section3_count_icon07.png" alt="">
                  </div>
                </div>
                <div class="sec3_count_item">
                  <div class="desc">
                    <span><?PHP echo $section3_content8_title?></span>
                    <h1><span class="count" data-count="1996">0</span> <?PHP echo $section3_content8_unit?></h1>
                  </div>
                  <div class="icon">
                    <img src="/_img/main/section3_count_icon08.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="section_4" class="section section_4">
          <div class="sec4-truck">
            <div class="sec4_green_bg"></div>
            <div class="sec4-truck__inner">
              <div class="sec4_content">
                <div class="blur"></div>
                <div class="truck_img">
                  <img src="./_img/main/section4_truck.png" alt="">
                </div>
                <div class="title">
                  <h1>Circular</h1>
                  <h1>Energy</h1>
                  <h1>Korea</h1>
                </div>
                <div class="sec4_top">
                  <h2>
                    <?PHP echo $section4_title_text?>
                  </h2>
                </div>
                <div class="btns">
                  <p>
                    <?PHP echo $section4_content_text?>
                  </p>
                  <button class="btn_go_arrow">
                    <span><?PHP echo $section4_btn_text?></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="section_5" class="section section_5">
          <div class="sec5__inner">
            <div class="title">
              <span>Our Business</span>
              <h2>
                <?PHP echo $section5_title_text1?>
              </h2>
            </div>
            <div class="sec5_icon_list">
              <div class="sec5_icon">
                <img src="./_img/main/section5_icon01.png" alt="아이콘">
                <h5>Waste Incineration</h5>
              </div>
              <div class="sec5_icon">
                <img src="./_img/main/section5_icon02.png" alt="아이콘">
                <h5>Wastewater Treatment</h5>
              </div>
              <div class="sec5_icon">
                <img src="./_img/main/section5_icon03.png" alt="아이콘">
                <h5>Waste Oil Treatment</h5>
              </div>
              <div class="sec5_icon">
                <img src="./_img/main/section5_icon04.png" alt="아이콘">
                <h5>Food Waste<br>Treatment</h5>
              </div>
              <div class="sec5_icon">
                <img src="./_img/main/section5_icon05.png" alt="아이콘">
                <h5>Environment<br>Consulting</h5>
              </div>
            </div>
          </div>
        </div>
        <div id="section_6" class="section section_6 fp-auto-height">
          <div class="sec6__inner">
            <div class="title">
              <span>ESG Management</span>
              <h2><?PHP echo $section6_title_text1?></span></h2>
              <button class="btn_go_arrow">
                <span><?PHP echo $section6_btn_text?></span>
              </button>
            </div>
            <div class="swiper section6_swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="sec6_esg">
                    <div class="bg">
                      <img src="./_img/main/section6_esg01.png" alt="esg 이미지1">
                    </div>
                    <div class="info">
                      <h4><?PHP echo $section6_swiper1_title?></h4>
                      <p><?PHP echo $section6_swiper1_text?></p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="sec6_esg">
                    <div class="bg">
                      <img src="./_img/main/section6_esg02.png" alt="esg 이미지1">
                    </div>
                    <div class="info">
                      <h4><?PHP echo $section6_swiper2_title?></h4>
                      <p><?PHP echo $section6_swiper2_text?></p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="sec6_esg">
                    <div class="bg">
                      <img src="./_img/main/section6_esg03.png" alt="esg 이미지1">
                    </div>
                    <div class="info">
                      <h4><?PHP echo $section6_swiper3_title?></h4>
                      <p><?PHP echo $section6_swiper3_text?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h1 class="back_tit">Circular Energy Korea</h1>
        </div>
        <div id="section_7" class="section section_7">
          <div class="sec7__inner">
            <div class="sec7__header">
              <h2><?PHP echo $section7_title_text1?></h2>
              <p><?PHP echo $section7_title_text2?></p>
            </div>
            <div class="sec7_content">
              <div class="sec7_media_center"> 
                <div class="title">
                  <h2>Media Center</h2>
                  <p><?PHP echo $section7_content_title?></p>
                </div>
                <div class="media_slider">
                  <div class="slider_slide">
                    <a href="javascript:void(0);" class="media_item">
                      <div class="thum">
                        <img src="./_img/main/media01.png" alt="">
                      </div>
                      <div class="desc">
                        <span class="category">NEWS</span>
                        <h4>CEK 주식회사, ESG 경영 실천 및 탄소 중립을 위해 “환경 보호 활동” 캠페인 실시</h4>
                        <p class="date">2024-05-29</p>
                      </div>
                    </a>
                  </div>
                  <div class="slider_slide">
                    <a href="javascript:void(0);" class="media_item">
                      <div class="thum">
                        <img src="./_img/main/media02.png" alt="">
                      </div>
                      <div class="desc">
                        <span class="category">NEWS</span>
                        <h4>CEK 주식회사, ESG 경영 실천 및 탄소 중립을 위해 “환경 보호 활동” 캠페인 실시</h4>
                        <p class="date">2024-05-29</p>
                      </div>
                    </a>
                  </div>
                  <div class="slider_slide">
                    <a href="javascript:void(0);" class="media_item">
                      <div class="thum">
                        <img src="./_img/main/media03.png" alt="">
                      </div>
                      <div class="desc">
                        <span class="category">NEWS</span>
                        <h4>CEK 주식회사, ESG 경영 실천 및 탄소 중립을 위해 “환경 보호 활동” 캠페인 실시</h4>
                        <p class="date">2024-05-29</p>
                      </div>
                    </a>
                  </div>
                  <div class="slider_slide">
                    <a href="javascript:void(0);" class="media_item">
                      <div class="thum">
                        <img src="./_img/main/media01.png" alt="">
                      </div>
                      <div class="desc">
                        <span class="category">NEWS</span>
                        <h4>CEK 주식회사, ESG 경영 실천 및 탄소 중립을 위해 “환경 보호 활동” 캠페인 실시</h4>
                        <p class="date">2024-05-29</p>
                      </div>
                    </a>
                  </div>
                  <div class="slider_slide">
                    <a href="javascript:void(0);" class="media_item">
                      <div class="thum">
                        <img src="./_img/main/media02.png" alt="">
                      </div>
                      <div class="desc">
                        <span class="category">NEWS</span>
                        <h4>CEK 주식회사, ESG 경영 실천 및 탄소 중립을 위해 “환경 보호 활동” 캠페인 실시</h4>
                        <p class="date">2024-05-29</p>
                      </div>
                    </a>
                  </div>
                  <div class="slider_slide">
                    <a href="javascript:void(0);" class="media_item">
                      <div class="thum">
                        <img src="./_img/main/media03.png" alt="">
                      </div>
                      <div class="desc">
                        <span class="category">NEWS</span>
                        <h4>CEK 주식회사, ESG 경영 실천 및 탄소 중립을 위해 “환경 보호 활동” 캠페인 실시</h4>
                        <p class="date">2024-05-29</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="slider_progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                  <span class="slider__label sr-only">
                </div>
                <div class="media_btn_area">
                  <button class="btn_go_arrow">
                    <span><?PHP echo $section7_content_btns?></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="section_footer" class="section section_footer fp-auto-height">
          <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
        </div>
      </div>
      <div class="fullpage_navi">
        <button type="button" class="btn_prev"></button>
        <button type="button" class="btn_next"></button>
      </div>
    </main>
    <div class="mouse-cursor">
      <div class="mouse-pointer">View<br>more</div>
    </div>
  </div>
  <script src="/_js/main.js?v=<?php echo date('Ymdhis'); ?>"></script>
  <script>
    
  </script>
</body>
</html>