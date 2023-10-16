<footer class="footer">
  <!--<div class="footer-contacts">
    <ul class="links clearfix js-scroll">
      <li class="onlineBtn disable"><a href="<?= $site_setting["online_link"] ?>" target="_blank">オンライン見学会予約</a></li>
      <li class="requestBtn"><a href="<?= $site_setting["request_link"] ?>" target="_blank">資料請求</a></li>
    </ul>
    <p class="about-colona js-scroll"><a href="#colona">新型コロナウイルス感染防止対策について</a></p>
    <p class="about-tel js-scroll">お問い合わせは<br class="sp">住友不動産「リモート販売センター品川」</p>
     <p class="tel-link-wrap js-scroll"><a href="<?= $site_setting["tel_link"]?>">0120-112-507</a></p>
    <p class="mail js-scroll"><a href="mailto:ct-noborito@j.sumitomo-rd.co.jp" class="disabled">ct-noborito@j.sumitomo-rd.co.jp</a></p>
    <p class="bussiness-hour js-scroll">営業時間／10：00&#x301c;18：00<br class="sp">（火・水曜定休（祝日除く）、年末年始は休業）<br>※携帯電話・PHSからもご利用になれます。</p>
  </div> -->
  <div class="entry">      
    <div class="container">
      <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=ct_noborito&LINK=entry"></script>
      <script type="text/javascript" src="/bukken_manage/bukken_manage_link.cgi?AREA_CD=shuto&PROP_CD=ct_noborito"></script>
      <div class="entry-tel">
        <p>お問い合わせは<br class="sp">住友不動産「リモート販売センター品川」</p>
        <a href="tel:<?= $site_setting["tel_link"]?>" class="entry-tel__num"><img src="./images/common/icn_entry-tel.png" alt=""><span class="f-en">0120-112-507</span></a><br>
        <a href="mailto:ct-noborito@j.sumitomo-rd.co.jp" class="disabled">ct-noborito@j.sumitomo-rd.co.jp</a>
      </div>
      <p class="entry-info">営業時間／10：00&#x301c;18：00<br class="sp">（火・水曜定休（祝日除く）、年末年始は休業）</p>
    </div>
  </div>
  <nav class="footer-menu">
    <div class="container">
      <ul>
        <li class="start top"><a href="<?= $page_settings["directory_pos"]  ?>">トップページ</a></li>
        <li class="concept"><a href="<?= $page_settings["directory_pos"]  ?>concept.html">コンセプト</a></li>
        <li class="design">デザイン</li>
        <li class="public">共&#12132;空間</li>
        <li class="private">室内空間</li>
        <li class="roomplan">間取り</li>
        <li class="equipment">設備・仕様</li>
        <li class="structure">構造・防災</li>
        <li class="location"><a href="<?= $page_settings["directory_pos"]  ?>location01.html">ロケーション</a></li>
        <li class="access"><a href="<?= $page_settings["directory_pos"]  ?>access.html">アクセス</a></li>
        <li class="map"><a href="<?= $page_settings["directory_pos"]  ?>map.html" target="_blank">現地案内図</a></li>
        <li class="outline"><a href="javascript:outline()">物件概要</a></li>
        <li class="blog">マンション情報ブログ</li>
        <li class="faq"><a href="/<?= $folder_name?>faq.cgi" target="_blank">FAQ</a></li>
        <li class="sitemap"><a href="<?= $page_settings["directory_pos"]  ?>sitemap.html">サイトマップ</a></li>
        <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=ct_noborito&LINK=footer"></script>
      </ul>
    </div>
  </nav><!-- footer-menu -->

  <div class="footer-recommend">
    <div class="container">
      <ul class="footer-recommend__menu f-min">
        <li>登戸 マンション</li>
        <li>登戸 新築マンション</li>
        <li>シティテラス登戸</li>
        <li>神奈川県川崎市</li>
        <li>小田急小田原線</li>
        <li>登戸</li>
        <li>新築分譲マンション</li>
        <li>住友不動産</li>
        <li>すみふ登戸</li>
      </ul>

      <!-- おススメ物件 -->
      <p class="footer-recommend__ttl">おすすめ物件</p>
      <script type="text/javascript" src="/bukken_manage/bukken_manage_recommend.cgi?AREA_CD=shuto&PROP_CD=ct_noborito"></script>
      <!-- <div class="footer-recommend__slide" id="recommendSlide">
        <div>
          <div class="cont">
            <figure><a href="/shuto/tamagawa/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend01.jpg" alt="シティテラス多摩川"></a></figure>
            <dl>
              <dt><a href="/shuto/tamagawa/" target="_blank">シティテラス多摩川</a></dt>
              <dd>
                <p>交　通：京王線「調布」駅(東口)/徒歩31分(Ｆ棟)~徒歩35分(Ｂ棟)</p>
                <p>住　所：東京都調布市染地</p>
                <p>総戸数：905戸［非分譲住戸245戸含む］</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/shuto/fuchumiyanishicho/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend02.jpg" alt="シティテラス府中"></a></figure>
            <dl>
              <dt><a href="/shuto/fuchumiyanishicho/" target="_blank">シティテラス府中</a></dt>
              <dd>
                <p>交　通：京王電鉄京王線「府中」駅まで徒歩4分</p>
                <p>住　所：東京都府中市宮西町</p>
                <p>総戸数：122戸［その他店舗1区画含む］</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/shuto/fuchuhachimancho/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend03.jpg" alt="シティテラス府中"></a></figure>
            <dl>
              <dt><a href="/shuto/fuchuhachimancho/" target="_blank">シティハウス府中八幡町</a></dt>
              <dd>
                <p>交　通：京王電鉄京王線「府中」駅まで徒歩4分</p>
                <p>住　所：東京都府中市八幡町</p>
                <p>総戸数：57戸［その他店舗1区画含む］</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/shuto/ct_chuorinkan/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend04.jpg" alt="シティテラス中央林間"></a></figure>
            <dl>
              <dt><a href="/shuto/ct_chuorinkan/" target="_blank">シティテラス中央林間</a></dt>
              <dd>
                <p>交　通：小田急電鉄江ノ島線「南林間」駅まで徒歩5分</p>
                <p>住　所：神奈川県大和市林間</p>
                <p>総戸数：192戸</p>
              </dd>
            </dl>
          </div>
        </div> -->
      </div><!-- //#recommendSlide -->
<!-- //おススメ物件 -->
    </div>
  </div>

  <div class="footer-logo">
    <div class="container">
      <ul>
        <li>
          <a href="/official/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo01.png" alt="住友不動産のマンション 公式サイト"></a>
        </li>
        <li>
          <a href="/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo02.png" alt="住友不動産のマンション 物件総合サイト"></a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="/gallery/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo03.png" alt="総合マンションギャラリー"></a>
        </li>
        <li>
          <a href="/brand/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo04.png" alt="光景となる象徴"></a>
        </li>
        <li>
          <a href="/su-my_club/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo05.png" alt="住まいクラブ"></a>
        </li>
      </ul>
    </div>
  </div>

  <div class="footer-wrapper f-min">
    <div class="position-relative">
      <nav>
        <ul>
          <li>
            <a href="http://www.sumitomo-rd.co.jp/privacy_policy/" target="_blank"><i class="fa-solid fa-angle-right"></i>個&#12040;情報保護&#12101;針・個&#12040;情報のお取り扱い</a>
          </li>
          <li>
            <a href="https://www.sumitomo-rd.co.jp/security_policy/" target="_blank"><i class="fa-solid fa-angle-right"></i>情報セキュリティ基本&#12101;針</a>
          </li>
          <li>
            <a href="/cmn2013/html/caution.html" target="_blank"><i class="fa-solid fa-angle-right"></i>ご利&#12132;上の注意</a>
          </li>
          <li>
            <a href="/cmn2013/html/about.html" target="_blank"><i class="fa-solid fa-angle-right"></i>掲載物件情報について</a>
          </li>
          <li>
            <a href="/cmn2013/html/browser.html" target="_blank"><i class="fa-solid fa-angle-right"></i>推奨環境について</a>
          </li>
        </ul>
      </nav>
      <a href="http://www.sumitomo-rd.co.jp/" class="footer-wrapper__logo01" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/ft_logo.svg" alt="住友不動産"></a>
      <p class="copyright">Copyright &copy; Sumitomo Realty & Development Co., Ltd.</p>
    </div>
  </div>
  <div class="footer-btn">
    <div class="float-btn">
    <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=ct_noborito&LINK=float"></script>
    </div>
    <div class="fixed-btn">
      <a href="<?= $site_setting["tel_link"] ?>">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_tel.png" alt="電話問合せ"><br>電話問合せ</p>
      </a>
      <a href="<?= $page_settings["directory_pos"]  ?>map.html" target="_blank">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_map.png" alt="現地案内図"><br>現地案内図</p>
      </a>
      <a href="/shuto/ct_noborito/catalog.cgi" class="fixed-btn__mail" target="_blank">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_mail.png" alt="資料請求"><br>資料請求</p>
      </a>
      <a href="javascript:online()" class="fixed-btn__btn001">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_btn02.png" alt="見学会予約"><br>オンライン<br>見学会予約</p>
      </a>
      <div id="sp-menu-btn-ft" class="hamburger">
        <div class="hamburger-wrapper">
          <div class="menu-trigger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <p>MENU</p>
        </div>
      </div>
    </div>
    <div id="spfraijo" class="sp">
    <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=ct_noborito&LINK=sp-footer"></script>
		</div>
  </div>
</footer>

</div>






<!-- 解析タグここから -->
<!-- アクセス履歴タグ挿入 begin -->
<img src="/bukken_access.cgi?AREA_CD=<?= $site_setting['area'] ?>&PROP_CD=<?= $site_setting['prop'] ?>" width="1" height="1" id="adtag">
<!-- アクセス履歴タグ挿入 end -->

<!-- ADPLANタグ挿入 begin -->
<script language="JavaScript" type="text/javascript" src="http://o.advg.jp/ojs?aid=1346&pid=6">
</script>
<noscript>
<iframe src="http://o.advg.jp/oif?aid=1346&pid=6" width="1" height="1"></iframe>
</noscript>
<!-- ADPLANタグ挿入 end -->

<!-- dataLayer creteoタグ begin -->
<script type="text/javascript">
/* <![CDATA[ */
var google_tag_params = {
	dynx_pagetype: "product",
	dynx_device: "d",
       dynx_area: "<?= $site_setting['area'] ?>",
	dynx_prefecture: "神奈川県",
	dynx_city: "",
	dynx_railway: "",
	dynx_itemid: "<?= $site_setting['prop'] ?>",
	dynx_pvalue: "",
	dynx_station: ""
};

var dataLayer = [{
  google_tag_params: window.google_tag_params
}];
/* ]]> */
</script>
<!-- dataLayer creteoタグ end -->

<!-- Google Tag Manager begin -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M7LSST"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7LSST');</script>
<!-- Google Tag Manager end -->

<!-- Yahoo Tag Manager begin -->
<script type="text/javascript">
(function () {
var tagjs = document.createElement("script");
var s = document.getElementsByTagName("script")[0];
tagjs.async = true;
tagjs.src = "//s.yjtag.jp/tag.js#site=DJWhE55";
s.parentNode.insertBefore(tagjs, s);
}());
</script>
<noscript>
<iframe src="//b.yjtag.jp/iframe?c=DJWhE55" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
<!-- Yahoo Tag Manager end -->

<!-- NabiSTAR script begin -->
<script type="text/javascript">(function(d,u){var b=d.getElementsByTagName("script")[0],j=d.createElement("script");j.async=true;j.src=u;b.parentNode.insertBefore(j,b);})(document,"//img.ak.impact-ad.jp/ut/be1ed93f154f602c_2269.js");</script><noscript><iframe src="//nspt.unitag.jp/be1ed93f154f602c_2269.php" width="0" height="0" frameborder="0"></iframe></noscript>
<!-- NabiSTAR script end -->

<!-- アクセス履歴タグ挿入 begin -->
<img src="/bukken_access.cgi?AREA_CD=<?= $site_setting['area'] ?>&PROP_CD=<?= $site_setting['prop'] ?>" width="1" height="1" id="adtag">
<!-- アクセス履歴タグ挿入 end -->

<!-- ADPLANタグ挿入 begin -->
<script language="JavaScript" type="text/javascript" src="http://o.advg.jp/ojs?aid=1346&pid=6">
</script>
<noscript>
<iframe src="http://o.advg.jp/oif?aid=1346&pid=6" width="1" height="1"></iframe>
</noscript>
<!-- ADPLANタグ挿入 end -->

<!-- dataLayer creteoタグ begin -->
<script type="text/javascript">
/* <![CDATA[ */
var google_tag_params = {
	dynx_pagetype: "product",
	dynx_device: "d",
       dynx_area: "<?= $site_setting['area'] ?>",
	dynx_prefecture: "神奈川県",
	dynx_city: "",
	dynx_railway: "",
	dynx_itemid: "<?= $site_setting['prop'] ?>",
	dynx_pvalue: "",
	dynx_station: ""
};

var dataLayer = [{
  google_tag_params: window.google_tag_params
}];
/* ]]> */
</script>
<!-- dataLayer creteoタグ end -->

<!-- Google Tag Manager begin -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M7LSST"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7LSST');</script>
<!-- Google Tag Manager end -->

<!-- Yahoo Tag Manager begin -->
<script type="text/javascript">
(function () {
var tagjs = document.createElement("script");
var s = document.getElementsByTagName("script")[0];
tagjs.async = true;
tagjs.src = "//s.yjtag.jp/tag.js#site=DJWhE55";
s.parentNode.insertBefore(tagjs, s);
}());
</script>
<noscript>
<iframe src="//b.yjtag.jp/iframe?c=DJWhE55" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
<!-- Yahoo Tag Manager end -->

<!-- NabiSTAR script begin -->
<script type="text/javascript">(function(d,u){var b=d.getElementsByTagName("script")[0],j=d.createElement("script");j.async=true;j.src=u;b.parentNode.insertBefore(j,b);})(document,"//img.ak.impact-ad.jp/ut/be1ed93f154f602c_2269.js");</script><noscript><iframe src="//nspt.unitag.jp/be1ed93f154f602c_2269.php" width="0" height="0" frameborder="0"></iframe></noscript>
<!-- NabiSTAR script end -->
<!-- 解析タグここまで -->

