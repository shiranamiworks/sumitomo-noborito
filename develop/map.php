<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "",
  "url" => "map.html",
  "title" => "現地案内図｜",
  "keywords" => "現地案内図,",
  "description" => "現地案内図ページ。",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
    
  "logo_text" => "現地案内図｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer" class="map-sec">
    <h2 class="ttl"><span class="eng">MAP</span><span class="ja">現地案内図</span></h2>
      <div class="mapArea">
        <div class="image pc"><img src="./images/map/map.jpg" alt="現地案内図" id="map1"></div>
        <figure class="img img05 sp tb">
          <img src="./images/map/map.jpg" class="sp-hide" alt="">
          <img src="./images/map/map.jpg" class="zoomImg sp" alt=""/>
        </figure>
      </div><!-- mapArea -->
      <p class="zip js-scroll">神奈川県川崎市多摩区登戸3816番3（地番）<span>※住戸表示ではありません。</span></p>

    <div id="btnArea">
			<div id="GoogleMap"><a href="https://goo.gl/maps/H5tvKTZVVkfrqE4L6" target="_blank"><img src="images/map/btn_googlemap.jpg" alt="Google Map"></a></div>
			<div id="PrintMap"><a href="JavaScript:;" onclick="print_out(); return false;"><img src="images/map/btn_print.jpg" alt="印刷" class="pc"></a></div>
    </div>

    <div class="container">
	     <p class="txt">※掲載の現地案内図は一部道路・施設等を抜粋して表記しています。</p>
    </div>  
  <!-- </div> -->
</section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
