<footer class="footer">
  <!--<div class="footer-contacts">
    <ul class="links clearfix js-scroll">
      <li class="onlineBtn disable"><a href="<?= $site_setting["online_link"] ?>" target="_blank">オンライン見学会予約</a></li>
      <li class="requestBtn"><a href="<?= $site_setting["request_link"] ?>" target="_blank">資料請求</a></li>
    </ul>
    <p class="about-colona js-scroll"><a href="#colona">新型コロナウイルス感染防止対策について</a></p>
    <p class="about-tel js-scroll">お問い合わせは<br class="sp">住友不動産「リモート販売センター品川」</p>
     <p class="tel-link-wrap js-scroll"><a href="<?= $site_setting["tel_link"]?>">0120-112-507</a></p>
    <p class="mail js-scroll"><a href="mailto:sakurajosui@j.sumitomo-rd.co.jp" class="disabled">sakurajosui@j.sumitomo-rd.co.jp</a></p>
    <p class="bussiness-hour js-scroll">営業時間／10：00&#x301c;18：00<br class="sp">（火・水曜定休（祝日除く）、年末年始は休業）<br>※携帯電話・PHSからもご利用になれます。</p>
  </div> -->
  <div class="entry">      
    <div class="container">
      <div class="entry-btn entry-btn--3">
        <!-- <p class="entry-btn-p">来場予約</p> -->
        <a href="javascript:online();" class="none"><p>オンライン見学会予約</p></a>
        <a href="javascript:siryo();"><p>資料請求</p></a>
      </div>
      <div class="entry-tel">
        <p>お問い合わせは<br class="sp">住友不動産「リモート販売センター品川」</p>
        <a href="tel:<?= $site_setting["tel_link"]?>" class="entry-tel__num"><img src="./images/common/icn_entry-tel.png" alt=""><span class="f-en">0120-112-507</span></a><br>
        <a href="mailto:sakurajosui@j.sumitomo-rd.co.jp" class="disabled">sakurajosui@j.sumitomo-rd.co.jp</a>
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
        <li class="start map"><a href="<?= $page_settings["directory_pos"]  ?>map.html" target="_blank">現地案内図</a></li>
        <li class="outline"><a href="javascript:outline()">物件概要</a></li>
        <li class="blog">マンション情報ブログ</li>
        <li class="faq"><a href="/<?= $folder_name?>faq.cgi" target="_blank">FAQ</a></li>
        <li class="sitemap"><a href="<?= $page_settings["directory_pos"]  ?>sitemap.html">サイトマップ</a></li>
        <li class="online">オンライン見学会予約</li>
        <li class="delivery">出前deオンライン見学会予約</li>
        <li class="raijo">来場予約</li>
        <li class="request"><a href="javascript:siryo()">資料請求</a></li>
      </ul>
    </div>
  </nav><!-- footer-menu -->

  <div class="footer-recommend">
    <div class="container">
      <ul class="footer-recommend__menu f-min">
        <li>桜上水 新築マンション</li>
        <li>シティテラス桜上水</li>
        <li>東京都世田谷区上北沢</li>
        <li>京王電鉄京王線</li>
        <li>桜上水駅</li>
        <li>新築分譲マンション</li>
        <li>住友不動産</li>
        <li>すみふ桜上水</li>
      </ul>

      <!-- おススメ物件 -->
      <!--<p class="footer-recommend__ttl">おすすめ物件</p>
      <div class="footer-recommend__slide" id="recommendSlide">
        <div>
          <div class="cont">
            <figure><a href="/shuto/ct_koishikawa/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend03.jpg" alt="シティテラス文京小石川"></a></figure>
            <dl>
              <dt><a href="/shuto/ct_koishikawa/" target="_blank">シティテラス文京小石川</a></dt>
              <dd>
                <p>交　通：東京メトロ丸ノ内線「後楽園」駅まで徒歩11分</p>
                <p>住　所：東京都文京区小石川</p>
                <p>総戸数：120戸</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/shuto/nishiikebukuro/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend01.jpg" alt="シティハウス西池袋"></a></figure>
            <dl>
              <dt><a href="/shuto/nishiikebukuro/" target="_blank">シティハウス西池袋</a></dt>
              <dd>
                <p>交　通：東京メトロ有楽町線「要町」駅まで徒歩4分</p>
                <p>住　所：東京都豊島区西池袋</p>
                <p>総戸数：137戸［非分譲住戸79戸、その他住戸1戸含む］</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/shuto/ch_ayase/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend02.jpg" alt="シティハウス綾瀬"></a></figure>
            <dl>
              <dt><a href="/shuto/ch_ayase/" target="_blank">シティハウス綾瀬</a></dt>
              <dd>
                <p>交　通：東京メトロ千代田線「綾瀬」駅まで徒歩4分</p>
                <p>住　所：東京都足立区綾瀬</p>
                <p>総戸数：67戸</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/shuto/ayase/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend04.jpg" alt="シティタワー綾瀬"></a></figure>
            <dl>
              <dt><a href="/shuto/ayase/" target="_blank">シティタワー綾瀬</a></dt>
              <dd>
                <p>交　通：京メトロ千代田線「綾瀬」駅まで徒歩1分</p>
                <p>住　所：東京都足立区綾瀬</p>
                <p>総戸数：427戸［その他店舗区画 6区画］</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/shuto/ayase/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend04.jpg" alt="シティタワー綾瀬"></a></figure>
            <dl>
              <dt><a href="/shuto/ayase/" target="_blank">シティタワー千住大橋</a></dt>
              <dd>
                <p>交　通：京成電鉄本線「千住大橋」駅まで徒歩5分</p>
                <p>住　所：東京都足立区千住橋戸町</p>
                <p>総戸数：466戸</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>--><!-- //#recommendSlide -->
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
      <a href="https://www.keio.co.jp/" class="footer-wrapper__logo02" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/ft_logo02.svg" alt="京王電鉄"></a>
      <p class="copyright">Copyright &copy; Sumitomo Realty & Development Co., Ltd.</p>
    </div>
  </div>
  <div class="footer-btn">
    <div class="float-btn">
      <!-- <p class="bg_btn--gray">来場予約</p> -->
      <p class="bg_btn--gray">オンライン<br>見学会予約</p>
      <!-- <a href="javascript:online()" class="bg_btn"><p>オンライン<br>見学会予約 </p></a>
      <a href="javascript:delivery()" class="bg_btn"><p>出前ｄｅオンライン<br>見学会予約 </p></a> -->
      <a href="javascript:siryo()" class="bg_btn--request"><p>資料請求</p></a>
    </div>
    <div class="fixed-btn">
      <a href="<?= $site_setting["tel_link"] ?>">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_tel.png" alt="電話問合せ"><br>電話問合せ</p>
      </a>
      <a href="<?= $page_settings["directory_pos"]  ?>map.html" target="_blank">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_map.png" alt="現地案内図"><br>現地案内図</p>
      </a>
      <a href="javascript:siryo()" class="fixed-btn__mail">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_mail.png" alt="資料請求"><br>資料請求</p>
      </a>
      <a href="javascript:online()" class="fixed-btn__reserve none">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_reserve.png" alt="見学会予約"><br>見学会予約</p>
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
	dynx_prefecture: "東京都",
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
	dynx_prefecture: "東京都",
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

