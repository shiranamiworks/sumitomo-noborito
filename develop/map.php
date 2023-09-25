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
	<div class="content-inner">
    <div class="print-area">
      <h2 class="page-title js-scroll"><span class="font-size400">MAP</span><br class="sp">���n�ē��}</h2>

      <div class="map-image">
        <div class="image pc"><img src="./images/map/map.jpg" alt="���n�ē��}"></div>
        <figure class="img img05 sp">
          <img src="./images/map/map.jpg" class="sp-hide" alt="">
          <img src="./images/map/map.jpg" class="zoomImg sp" alt=""/>
        </figure>
      </div><!-- map-image -->
      <p class="text01 js-scroll">�_�ސ쌧���s������o��3816��3�i�n�ԁj<span>���Z�˕\���ł͂���܂���B</span></p>
    </div> 

    <ul class="link-buttons js-scroll">
      <li class="link"><a href="https://goo.gl/maps/H5tvKTZVVkfrqE4L6" target="_blank">Google Maps�Ō���</a></li>
      <li class="link02 pc"><a href="JavaScript:;" onclick="print_out(); return false;">�������</a></li>
    </ul>
    <p class="annotation js-scroll">���f�ڂ̌��n�ē��}�͈ꕔ���H�E�{�ݓ��𔲐����ĕ\�L���Ă��܂��B</p>
  </div>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
