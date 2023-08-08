<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "",
  "url" => "map.html",
  "title" => "���n�ē��}�b�y�����z�V�e�B�e���X�o�ˁb�o�˂̐V�z�}���V�����b�Z�F�s���Y",
  "keywords" => "���n�ē��},�V�e�B�e���X�o��,�o�� �}���V����,�o�� �V�z�}���V����,�o��,���c�}���c����,���s,�}���V����,�V�z�}���V����,�����}���V����,�Z�F�s���Y",
  "description" => "���n�ē��}�y�[�W�B���c�}���c�����EJR�앐���u�o�ˁv�܂œk��11���B�Z�F�s���Y�̐V�z�}���V�������o�˂ɒa���B�y���݂ӓo�ˁz���s�̃}���V�����Ȃ�Z�F�s���Y�B",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
    
  "logo_text" => "�o�ˉw�k��11���b�V�e�B�e���X�o�ˁb�o�� �V�z�}���V�����b���n�ē��}�b���݂ӓo�ˁb�Z�F�s���Y"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<div class="content-inner">
    <div class="print-area">
      <h2 class="page-title js-scroll"><span class="font-size400">MAP</span><br class="sp">���n�ē��}</h2>

      <div class="map-image">
        <div class="image js-scroll swipe-img"><img src="./images/map/map.jpg" alt="���n�ē��}"></div>
        <!-- <p class="swipe"><img src="./images/common/icon_swipe.svg" alt="���E�ɃX���C�v�ł��܂��B"></p> -->
        <p class="text01 js-scroll">�_�ސ쌧���s������o��</p>
        <!--<p class="annotation js-scroll">���f�ڂ̌��n�ē��}�͈ꕔ���H�E�{�ݓ��𔲐����ĕ\�L���Ă��܂��B</p>-->
      </div><!-- map-image -->
    </div> 

    <ul class="link-buttons js-scroll">
      <li class="link"><a href="https://goo.gl/maps/H5tvKTZVVkfrqE4L6" target="_blank">Google Maps�Ō���</a></li>
      <li class="link02 pc"><a href="JavaScript:;" onclick="print_out(); return false;">�������</a></li>
    </ul>
  </div>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
