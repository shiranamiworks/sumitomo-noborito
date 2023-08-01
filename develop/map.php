<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "",
  "url" => "map.html",
  "title" => "現地案内図｜【公式】シティテラス桜上水｜桜上水の新築マンション｜住友不動産",
  "keywords" => "現地案内図,シティテラス桜上水,桜上水 新築マンション,桜上水,桜上水駅,京王電鉄京王線,世田谷区上北沢,マンション,新築マンション,分譲マンション,住友不動産",
  "description" => "現地案内図ページ。京王電鉄京王線「桜上水駅」から徒歩12分。住友不動産の新築マンションが桜上水に誕生。【すみふ桜上水】世田谷区上北沢の新築マンションなら住友不動産。",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
    
  "logo_text" => "桜上水駅徒歩12分｜シティテラス桜上水｜桜上水 新築マンション｜現地案内図｜すみふ桜上水｜住友不動産"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<div class="content-inner">
    <div class="print-area">
      <h2 class="page-title js-scroll"><span class="font-size400">MAP</span><br class="sp">現地案内図</h2>

      <div class="map-image">
        <div class="image js-scroll swipe-img"><img src="./images/map/map.jpg" alt="現地案内図"></div>
        <!-- <p class="swipe"><img src="./images/common/icon_swipe.svg" alt="左右にスワイプできます。"></p> -->
        <p class="text01 js-scroll">東京都世田谷区上北沢１丁目５（地番）</p>
        <!--<p class="annotation js-scroll">※掲載の現地案内図は一部道路・施設等を抜粋して表記しています。</p>-->
      </div><!-- map-image -->
    </div> 

    <ul class="link-buttons js-scroll">
      <li class="link"><a href="https://goo.gl/maps/kyAtphpgAPJbw2xt6" target="_blank">Google Mapsで見る</a></li>
      <li class="link02 pc"><a href="JavaScript:;" onclick="print_out(); return false;">印刷する</a></li>
    </ul>
  </div>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
