<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "",
  "url" => "map.html",
  "title" => "���n�ē��}�b",
  "keywords" => "���n�ē��},",
  "description" => "���n�ē��}�y�[�W�B",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
    
  "logo_text" => "���n�ē��}�b"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer" class="map-sec">
    <h2 class="ttl"><span class="eng">MAP</span><span class="ja">���n�ē��}</span></h2>
      <div class="mapArea">
        <div class="image pc"><img src="./images/map/map.jpg" alt="���n�ē��}" id="map1"></div>
        <figure class="img img05 sp tb">
          <img src="./images/map/map.jpg" class="sp-hide" alt="">
          <img src="./images/map/map.jpg" class="zoomImg sp" alt=""/>
        </figure>
      </div><!-- mapArea -->
      <p class="zip js-scroll">�_�ސ쌧���s������o��3816��3�i�n�ԁj<span>���Z�˕\���ł͂���܂���B</span></p>

    <div id="btnArea">
			<div id="GoogleMap"><a href="https://goo.gl/maps/H5tvKTZVVkfrqE4L6" target="_blank"><img src="images/map/btn_googlemap.jpg" alt="Google Map"></a></div>
			<div id="PrintMap"><a href="JavaScript:;" onclick="print_out(); return false;"><img src="images/map/btn_print.jpg" alt="���" class="pc"></a></div>
    </div>

    <div class="container">
	     <p class="txt">���f�ڂ̌��n�ē��}�͈ꕔ���H�E�{�ݓ��𔲐����ĕ\�L���Ă��܂��B</p>
    </div>  
  <!-- </div> -->
</section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
