<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "sitemap",
  "gnav_set" => "sitemap",
  "page_class" => "",
  "url" => "sitemap.html",
  "title" => "サイトマップ｜【公式】シティテラス登戸｜登戸の新築マンション｜住友不動産",
  "keywords" => "サイトマップ,シティテラス登戸,登戸 マンション,登戸 新築マンション,登戸,小田急小田原線,川崎市,マンション,新築マンション,分譲マンション,住友不動産",
  "description" => "サイトマップページ。小田急小田原線・JR南武線「登戸」まで徒歩11分。住友不動産の新築マンションが登戸に誕生。【すみふ登戸】川崎市のマンションなら住友不動産。",
  "add_stylesheet" => ["css/sitemap.css"],
    
  "logo_text" => "登戸駅徒歩11分｜シティテラス登戸｜登戸 新築マンション｜サイトマップ｜すみふ登戸｜住友不動産"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<!-- パンくずリスト -->
  <div class="breadcrumb sp-hide">
    <ul>
      <li><a href="./index.html">シティテラス登戸｜登戸 マンション｜トップ</a></li>
      <li><p>サイトマップ</p></li>
    </ul>
  </div>
	<!--// パンくずリスト -->
  <div class="content">

  <div class="wrap">
    <h2 class="title">サイトマップ</h2>
    <ul class="pages">
      <li class="top"><a href="./"><span class="ja">シティテラス登戸 トップ</span></a></li>
      <li class="concept"><a href="./concept.html"><span class="ja">コンセプト</span></a></li>
      <li class="design disable"><a href="./design01.html" class="disable"><span class="ja">デザイン</span></a></li>
      <li class="public disable"><a href="./public01.html" class="disable"><span class="ja">共用空間</span></a></li>
      <li class="private disable"><a href="./private01.html" class="disable"><span class="ja">室内空間</span></a></li>
     <li class="plan disable"><a href="javascript:planFn();" class="disable"><span class="ja">間取り</span></a></li>
      <li class="equipment disable"><a href="./equipment01.html" class="disable"><span class="ja">設備・仕様</span></a></li>
      <li class="structur disable"><a href="./structure01.html" class="disable"><span class="ja">構造・防災</span></a></li>
      <li class="location disable">ロケーション （ <span><a href="./location01.html"><span class="ja">土地区画整理事業で生まれ変わる街</span></a></span> / <span><a href="./location02.html"><span class="ja">水と緑の自然を身近に。</span></a></span> / <span><a href="./location03.html"><span class="ja">「登戸」駅周辺の優れた利便性</span></a></span> ）</li>
      <li class="access"><a href="./access.html"><span class="ja">アクセス</span></a></li>
      <li class="link map"><a href="map.html" target="_blank"><span class="ja">現地案内図</span></a></li>
      <li class="link outline"><a href="javascript:outline();"><span class="ja">物件概要</span></a></li>
      <li class="link faq"><a href="/<?= $folder_name?>faq.cgi" target="_blank"><span class="ja">FAQ</span></a></li>
      <!-- <li class="link blog"><a href="javascript:blog();"><span class="ja">マンション情報ブログ</span></a></li> -->
     <!--<li class="sns-icons">
        <ul class="lists clearfix">
          <li class="sns"><a href="#twitter" target="_blank"><img src="./static/images/common/ico_twitter.png" alt=""></a></li>
          <li class="sns"><a href="#insta" target="_blank"><img src="./static/images/common/ico_instagram.png" alt=""></a></li>
        </ul>
      </li>-->
      <li class="reserveBtn disable"><a href="javascript:raijo();" target="_blank" class="disable">来場予約</a></li>
      <li class="onlineBtn disable"><a href="javascript:online();" target="_blank" class="disable"><span class="btnText">オンライン見学会</span></a></li>
      <li class="demaeBtn disable"><a href="javascript:delivery();" target="_blank" class="disable">出前deオンライン見学会</a></li>
      <!--<li class="requestPageBtn"><a href="#requested_only" target="_blank">資料請求者限定ページ</a></li>
      <li class="meta-gallery"><a href="https://www.sumitomo-rd-mansion.jp/gallery/" target="_blank">メタマンションギャラリー</a></li>-->
      <li class="requestBtn"><a href="javascript:siryo();"><span class="btnText">資料請求<!--（無料）--></span></a></li>
    </ul>


  </div><!-- wrap -->
</div><!-- content -->
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
