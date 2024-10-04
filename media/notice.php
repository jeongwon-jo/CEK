<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main id="main">
      <div class="container">
        <div class="title_container">
          <div class="bg" style="background-image: url(/_img/subpage/media_01_bg.png)"></div>
          <div class="title_content">
            <ul class="breadcrumb">
              <li>Home</li>
              <li><?PHP echo $gnb_media?></li>
              <li class="active"><?PHP echo $menu_notice?></a></li>
            </ul>
            <h1><?PHP echo $menu_notice?></a></h1>
          </div>
        </div>
        <div class="content_area">
          <div class="notice__inner">
            <h3 class="media_title"><?PHP echo $menu_notice?></a></h3>
            <div class="notice_total_search">
              <p class="total_cnt"><?PHP echo $notice_total?></p>
              <div class="search">
                <input type="text" placeholder="<?PHP echo $notice_search_placeholder?>">
                <button type="button" class="btn_search"></button>
              </div>
            </div>
            <div class="notice_content">
              <div class="tbl--typeA tbl_notice">
                <table>
                  <colgroup>
                    <col style="width: 120px;">
                    <col style="width: auto;">
                    <col style="width: 178px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>번호</th>
                      <th>제목</th>
                      <th>작성일</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1048</td>
                      <td>
                        <a href="./detail.php" class="title">2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)</a>
                      </td>
                      <td>2024-06-18</td>
                    </tr>
                    <tr>
                      <td>1047</td>
                      <td>
                        <a href="./detail.php" class="title">2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)</a>
                      </td>
                      <td>2024-06-18</td>
                    </tr>
                    <tr>
                      <td>1046</td>
                      <td>
                        <a href="./detail.php" class="title">2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)</a>
                      </td>
                      <td>2024-06-18</td>
                    </tr>
                    <tr>
                      <td>1045</td>
                      <td>
                        <a href="./detail.php" class="title">2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)</a>
                      </td>
                      <td>2024-06-18</td>
                    </tr>
                    <tr>
                      <td>1044</td>
                      <td>
                        <a href="./detail.php" class="title">2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)</a>
                      </td>
                      <td>2024-06-18</td>
                    </tr>
                    <tr>
                      <td>1043</td>
                      <td>
                        <a href="./detail.php" class="title">2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)</a>
                      </td>
                      <td>2024-06-18</td>
                    </tr>
                    <tr>
                      <td>1042</td>
                      <td>
                        <a href="./detail.php" class="title">2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)</a>
                      </td>
                      <td>2024-06-18</td>
                    </tr>
                    <tr>
                      <td>1041</td>
                      <td>
                        <a href="./detail.php" class="title">2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)</a>
                      </td>
                      <td>2024-06-18</td>
                    </tr>
                    <tr>
                      <td>1040</td>
                      <td>
                        <a href="./detail.php" class="title">2024년 CEK 주식회사 제2차 이사회 및 임시총회 개최(6.18)</a>
                      </td>
                      <td>2024-06-18</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <ul class="pagination">
                <li class="first"><a href="javascript:void(0);"></a></li>
                <li class="prev"><a href="javascript:void(0);"></a></li>
                <li class="on"><a href="javascript:void(0);">1</a></li>
                <li><a href="javascript:void(0);">2</a></li>
                <li><a href="javascript:void(0);">3</a></li>
                <li><a href="javascript:void(0);">4</a></li>
                <li><a href="javascript:void(0);">5</a></li>
                <li><a href="javascript:void(0);">6</a></li>
                <li><a href="javascript:void(0);">7</a></li>
                <li><a href="javascript:void(0);">8</a></li>
                <li><a href="javascript:void(0);">9</a></li>
                <li><a href="javascript:void(0);">10</a></li>
                <li class="next"><a href="javascript:void(0);"></a></li>
                <li class="last"><a href="javascript:void(0);"></a></li>
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
    })
  </script>
</body>

</html>