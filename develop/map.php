<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "",
  "url" => "map.html",
  "title" => "現地案内図｜【公式】シティテラス登戸｜登戸の新築マンション｜住友不動産",
  "keywords" => "現地案内図,シティテラス登戸,登戸 マンション,登戸 新築マンション,登戸,小田急小田原線,川崎市,マンション,新築マンション,分譲マンション,住友不動産",
  "description" => "現地案内図ページ。小田急小田原線・JR南武線「登戸」まで徒歩11分。住友不動産の新築マンションが登戸に誕生。【すみふ登戸】川崎市のマンションなら住友不動産。",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
    
  "logo_text" => "登戸駅徒歩11分｜シティテラス登戸｜登戸 新築マンション｜現地案内図｜すみふ登戸｜住友不動産"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<div class="content-inner">
    <div class="print-area">
      <h2 class="page-title js-scroll"><span class="font-size400">MAP</span><br class="sp">現地案内図</h2>

      <div class="map-image">
        <div class="image pc"><img src="./images/map/map.jpg" alt="現地案内図"></div>
        <figure class="img img05 sp">
          <img src="./images/map/map.jpg" class="sp-hide" alt="">
          <img src="./images/map/map.jpg" class="zoomImg sp" alt=""/>
        </figure>
      </div><!-- map-image -->
      <p class="text01 js-scroll">神奈川県川崎市多摩区登戸3816番3（地番）<span>※住戸表示ではありません。</span></p>
    </div> 

    <ul class="link-buttons js-scroll">
      <li class="link"><a href="https://goo.gl/maps/H5tvKTZVVkfrqE4L6" target="_blank">Google Mapsで見る</a></li>
      <li class="link02 pc"><a href="JavaScript:;" onclick="print_out(); return false;">印刷する</a></li>
    </ul>
    <p class="annotation js-scroll">※掲載の現地案内図は一部道路・施設等を抜粋して表記しています。</p>
  </div>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
