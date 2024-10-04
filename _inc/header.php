<header class="header primary">
  <div class="header__inner">
    <a href="/" class="logo"></a>
    <nav id="gnb">
      <ul>
        <li class="gnb_li">
          <a href="/company/greeting.php"><?PHP echo $gnb_company?></a>
          <div class="snb">
            <ul>
              <li class="snb_li">
                <a href="/company/greeting.php"><?PHP echo $menu_greeting?></a>
              </li>
              <li class="snb_li">
                <a href="/company/history.php"><?PHP echo $menu_history?></a>
              </li>
              <li class="snb_li">
                <a href="/company/management.php"><?PHP echo $menu_management_br?></a>
              </li>
              <li class="snb_li">
                <a href="/company/ci.php"><?PHP echo $menu_ci?></a>
              </li>
              <li class="snb_li">
                <a href="/company/ideal.php"><?PHP echo $menu_ideal?></a>
              </li>
              <li class="snb_li">
                <a href="/company/map.php"><?PHP echo $menu_map?></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="gnb_li">
          <a href="/business/business1.php"><?PHP echo $gnb_business?></a>
          <div class="snb">
            <ul>
              <li class="snb_li">
                <a href="/business/business1.php"><?PHP echo $menu_business1?></a>
              </li>
              <li class="snb_li">
                <a href="/business/business2.php"><?PHP echo $menu_business2?></a>
              </li>
              <li class="snb_li">
                <a href="/business/business3.php"><?PHP echo $menu_business3_br?></a>
              </li>
              <li class="snb_li">
                <a href="/business/business4.php"><?PHP echo $menu_business4?></a>
              </li>
              <li class="snb_li">
                <a href="/business/business5.php"><?PHP echo $menu_business5?></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="gnb_li">
          <a href="/esg/management1.php"><?PHP echo $gnb_esg?></a>
          <div class="snb">
            <ul>
              <li class="snb_li">
                <a href="/esg/management1.php"><?PHP echo $menu_management1_br?></a>
              </li>
              <li class="snb_li">
                <a href="/esg/management2.php"><?PHP echo $menu_management2?></a>
              </li>
              <li class="snb_li">
                <a href="/esg/management3.php"><?PHP echo $menu_management3?></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="gnb_li">
          <a href="/media/notice.php"><?PHP echo $gnb_media?></a>
          <div class="snb">
            <ul>
              <li class="snb_li">
                <a href="/media/notice.php"><?PHP echo $menu_notice?></a>
              </li>
              <li class="snb_li">
                <a href="/media/release.php"><?PHP echo $menu_media?></a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <div class="header_lang_menu">
      <div class="header_lang">
        <ul>
          <?PHP 

          $korOn = "";
          $engOn = "";

          if($COOKIE_LANG == "ko"){
              $korOn = "active";
          }else{
              $engOn = "active";
          }
          ?>
          <li class="<?PHP echo $korOn?>"><a href="javascript:void(0);" onclick="Language('ko')">KOR</a></li>
          <li class="<?PHP echo $engOn?>"><a href="javascript:void(0);" onclick="Language('en')">ENG</a></li>
        </ul>
      </div>
      <button type="button" class="mo_open_category"></button>
    </div>
  </div>
  <div class="header_bg"></div>
</header>
<div class="mo_category">
  <div class="mo_category__inner">
    <div class="mo_category_header">
      <div class="logo">
        <img src="/_img/common/logo_white.png" alt="">
      </div>
      <button class="mo_close_category"></button>
    </div>
    <div class="mo_category_body">
      <ul class="mo_gnb">
        <li class="mo_gnb_li">
          <span><?PHP echo $gnb_company?></span>
          <ul class="mo_snb">
            <li><a href="/company/greeting.php"><?PHP echo $menu_greeting?></a></li>
            <li><a href="/company/management.php"><?PHP echo $menu_management?></a></li>
            <li><a href="/company/ci.php"><?PHP echo $menu_ci?></a></li>
            <li><a href="/company/ideal.php"><?PHP echo $menu_ideal?></a></li>
            <li><a href="/company/history.php"><?PHP echo $menu_history?></a></li>
            <li><a href="/company/map.php"><?PHP echo $menu_map?></a></li>
          </ul>
        </li>
        <li class="mo_gnb_li">
          <span><?PHP echo $gnb_business?></span>
          <ul class="mo_snb">
            <li><a href="/business/business1.php"><?PHP echo $menu_business1?></a></li>
            <li><a href="/business/business2.php"><?PHP echo $menu_business2?></a></li>
            <li><a href="/business/business3.php"><?PHP echo $menu_business3?></a></li>
            <li><a href="/business/business4.php"><?PHP echo $menu_business4?></a></li>
            <li><a href="/business/business5.php"><?PHP echo $menu_business5?></a></li>
          </ul>
        </li>
        <li class="mo_gnb_li">
          <span><?PHP echo $gnb_esg?></span>
          <ul class="mo_snb">
            <li><a href="/esg/management1.php"><?PHP echo $menu_management1?></a></li>
            <li><a href="/esg/management2.php"><?PHP echo $menu_management2?></a></li>
            <li><a href="/esg/management3.php"><?PHP echo $menu_management3?></a></li>
          </ul>
        </li>
        <li class="mo_gnb_li">
          <span><?PHP echo $gnb_media?></span>
          <ul class="mo_snb">
            <li><a href="/media/notice.php"><?PHP echo $menu_notice?></a></li>
            <li><a href="/media/release.php"><?PHP echo $menu_media?></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>