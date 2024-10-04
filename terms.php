<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_breadcrumb" style="top: 80px">
          <ul class="breadcrumb">
            <li class="home">
              <a href="/">
                <img src="/_img/common/icon_home.svg" alt="">
              </a>
            </li>
            <li class="depth depth_1">
              <div class="selected">
                <span><?PHP echo $menu_terms?></span>
                <button class="btn_open"></button>
              </div>
              <div class="dropdown">
                <ul>
                  <li><a href="/terms.php"><?PHP echo $menu_terms?></a></li>
                  <li><a href="/privacy.php"><?PHP echo $menu_privacy?></a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <div class="detail__inner">
          <div class="dtl_title">
            <h2><?PHP echo $menu_terms?></h2>
          </div>
          <div class="dtl_content">
            <div class="cnts">
              <div class="terms_box">
                <h5 class="sub_tit"><?PHP echo $terms_text1?></h5>
                <p>
                  <?PHP echo $terms_text2?>
                </p>
              </div>
              <div class="terms_box">
                <h5 class="sub_tit"><?PHP echo $terms_text_title?></h5>
                <p>
                  <?PHP echo $terms_text3?><br>
                  <?PHP echo $terms_text4?><br><br>
                  <?PHP echo $terms_text5?><br><br>
                  <?PHP echo $terms_text6?><br><br>
                  <?PHP echo $terms_text7?><br><br>
                  <?PHP echo $terms_text8?><br><br>
                  <?PHP echo $terms_text9?><br><br>
                  <?PHP echo $terms_text12?><br><br>
                  <?PHP echo $terms_text13?><br><br>
                  <?PHP echo $terms_text14?><br><br>
                  <?PHP echo $terms_text15?><br><br>
                  <?PHP echo $terms_text16?><br><br>
                  <?PHP echo $terms_text17?><br><br>
                  <?PHP echo $terms_text18?><br><br>
                  <?PHP echo $terms_text19?><br><br>
                  <?PHP echo $terms_text20?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
</body>

</html>