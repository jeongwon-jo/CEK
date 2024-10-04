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
                <span><?PHP echo $menu_privacy?></span>
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
            <h2><?PHP echo $menu_privacy?></h2>
          </div>
          <div class="dtl_content">
            <div class="cnts">
              <p><?PHP echo $privacy_text1?></p>
              <div class="tbl_privacy_wrap">
                <div class="tbl--typeB tbl_privacy">
                  <table>
                    <colgroup>
                      <col style="width: 200px;">
                      <col style="width: auto;">
                    </colgroup>
                    <tbody>
                      <tr>
                        <th><?PHP echo $privacy_table1_th1?></th>
                        <td><?PHP echo $privacy_table1_td1?></td>
                      </tr>
                      <tr>
                        <th><?PHP echo $privacy_table1_th2?></th>
                        <td><?PHP echo $privacy_table1_td2?></td>
                      </tr>
                      <tr>
                        <th><?PHP echo $privacy_table1_th3?></th>
                        <td><?PHP echo $privacy_table1_td3?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <p><?PHP echo $privacy_text1_1?></p>
              <p><?PHP echo $privacy_text2?></p>
              <div class="tbl_privacy_wrap">
                <div class="tbl--typeB tbl_privacy">
                  <table>
                    <colgroup>
                      <col style="width: 200px;">
                      <col style="width: auto;">
                    </colgroup>
                    <tbody>
                      <tr>
                        <th><?PHP echo $privacy_table2_th1?></th>
                        <td><?PHP echo $privacy_table2_td1?></td>
                      </tr>
                      <tr>
                        <th><?PHP echo $privacy_table2_th2?></th>
                        <td><?PHP echo $privacy_table2_td2?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div>
                <?PHP echo $privacy_text3?>
              </div>
              <div class="tbl_privacy_wrap">
                <div class="tbl--typeB tbl_privacy">
                  <table>
                    <colgroup>
                      <col style="width: 200px;">
                      <col style="width: auto;">
                    </colgroup>
                    <tbody>
                      <tr>
                        <th><?PHP echo $privacy_table3_th1?></th>
                        <td><?PHP echo $privacy_table3_td1?></td>
                      </tr>
                      <tr>
                        <th><?PHP echo $privacy_table3_th2?></th>
                        <td><?PHP echo $privacy_table3_td2?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div>
                <?PHP echo $privacy_text4?>
              </div>
              <div class="tbl_privacy_wrap">
                <div class="tbl--typeA tbl_privacy">
                  <table>
                    <colgroup>
                      <col style="width: 25%;">
                      <col style="width: 25%;">
                      <col style="width: 25%;">
                      <col style="width: 25%;">
                    </colgroup>
                    <thead>
                      <tr>
                        <th><?PHP echo $privacy_table4_th1?></th>
                        <th><?PHP echo $privacy_table4_th2?></th>
                        <th><?PHP echo $privacy_table4_th3?></th>
                        <th><?PHP echo $privacy_table4_th4?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?PHP echo $privacy_table4_td1?></td>
                        <td rowspan="3">
                          <?PHP echo $privacy_table4_td2?>
                        </td>
                        <td rowspan="3">
                          <?PHP echo $privacy_table4_td3?>
                        </td>
                        <td rowspan="3">
                          <?PHP echo $privacy_table4_td4?>
                        </td>
                      </tr>
                      <tr>
                        <td><?PHP echo $privacy_table4_td5?></td>
                      </tr>
                      <tr>
                        <td><?PHP echo $privacy_table4_td6?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div>
                <?PHP echo $privacy_text5?>
                <?PHP echo $privacy_text5_1?>
              </div>
              <div>
                <?PHP echo $privacy_text6?>
              </div>
              <div>
                <?PHP echo $privacy_text7?>
              </div>
              <div>
                <?PHP echo $privacy_text8?>
              </div>
              <div>
                <?PHP echo $privacy_text9?>
                <div class="tbl_privacy_wrap">
                  <div class="tbl--typeB tbl_privacy">
                    <table>
                      <colgroup>
                        <col style="width: 250px;">
                        <col style="width: auto;">
                      </colgroup>
                      <tbody>
                        <tr>
                          <th><?PHP echo $privacy_table9_th1?></th>
                          <td><?PHP echo $privacy_table9_td1?></td>
                        </tr>
                        <tr>
                          <th><?PHP echo $privacy_table9_th2?></th>
                          <td><?PHP echo $privacy_table9_td2?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <?PHP echo $privacy_text9_1?>
              </div>
              <div>
                <?PHP echo $privacy_text10?>
              </div>
              <div>
                <?PHP echo $privacy_text11?>
              </div>
              <div>
                <?PHP echo $privacy_text12?>
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