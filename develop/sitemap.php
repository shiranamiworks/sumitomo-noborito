<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "sitemap",
  "gnav_set" => "sitemap",
  "page_class" => "",
  "url" => "sitemap.html",
  "title" => "サイトマップ｜【公式】シティテラス桜上水｜桜上水の新築マンション｜住友不動産",
  "keywords" => "サイトマップ,シティテラス桜上水,桜上水 新築マンション,桜上水,桜上水駅,京王電鉄京王線,世田谷区上北沢,マンション,新築マンション,分譲マンション,住友不動産",
  "description" => "サイトマップページ。京王電鉄京王線「桜上水駅」から徒歩12分。住友不動産の新築マンションが桜上水に誕生。【すみふ桜上水】世田谷区上北沢の新築マンションなら住友不動産。",
  "add_stylesheet" => ["css/sitemap.css"],
    
  "logo_text" => "桜上水駅徒歩12分｜シティテラス桜上水｜桜上水 新築マンション｜サイトマップ｜すみふ桜上水｜住友不動産"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<!-- パンくずリスト -->
  <div class="breadcrumb sp-hide">
    <ul>
      <li><a href="./index.html">シティテラス桜上水｜桜上水 新築マンション｜トップ</a></li>
      <li><p>サイトマップ</p></li>
    </ul>
  </div>
	<!--// パンくずリスト -->
  <div class="content">

  <div class="wrap">
    <h2 class="title">サイトマップ</h2>
    <ul class="pages">
      <li class="top"><a href="./"><span class="ja">シティテラス桜上水 トップ</span></a></li>
      <li class="concept"><a href="./concept.html"><span class="ja">コンセプト</span></a></li>
      <li class="design disable"><a href="./design01.html" class="disable"><span class="ja">デザイン</span></a></li>
      <li class="public disable"><a href="./public01.html" class="disable"><span class="ja">共用空間</span></a></li>
      <li class="private disable"><a href="./private01.html" class="disable"><span class="ja">室内空間</span></a></li>
     <li class="plan disable"><a href="javascript:planFn();" class="disable"><span class="ja">間取り</span></a></li>
      <li class="equipment disable"><a href="./equipment01.html" class="disable"><span class="ja">設備・仕様</span></a></li>
      <li class="structur disable"><a href="./structure01.html" class="disable"><span class="ja">構造・防災</span></a></li>
      <li class="location disable">ロケーション （ <span><a href="./location01.html"><span class="ja">上質な住環境が広がる桜上水</span></a></span> / <span><a href="./location02.html"><span class="ja">家族の憩いの場が広がる桜上水</span></a></span> ）</li>
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
      <li class="requestBtn"><a href="javascript:siryo();" target="_blank"><span class="btnText">資料請求<!--（無料）--></span></a></li>
    </ul>


  </div><!-- wrap -->
</div><!-- content -->
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
