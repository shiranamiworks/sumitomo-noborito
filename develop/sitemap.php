<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "sitemap",
  "gnav_set" => "sitemap",
  "page_class" => "",
  "url" => "sitemap.html",
  "title" => "�T�C�g�}�b�v�b",
  "keywords" => "�T�C�g�}�b�v,",
  "description" => "�T�C�g�}�b�v�y�[�W�B",
  "add_stylesheet" => ["css/sitemap.css"],
    
  "logo_text" => "�T�C�g�}�b�v�b"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
  <div class="content">

  <div class="wrap">
    <h2 class="title">�T�C�g�}�b�v</h2>
    <ul class="pages">
      <li class="top"><a href="./"><span class="ja">�V�e�B�e���X�o�� �g�b�v</span></a></li>
      <li class="concept"><a href="./concept.html"><span class="ja">�R���Z�v�g</span></a></li>
      <li class="design disable"><a href="./design01.html" class="disable"><span class="ja">�f�U�C��</span></a></li>
      <li class="public disable"><a href="./public01.html" class="disable"><span class="ja">���p���</span></a></li>
      <li class="private disable"><a href="./private01.html" class="disable"><span class="ja">�������</span></a></li>
     <li class="plan disable"><a href="javascript:planFn();" class="disable"><span class="ja">�Ԏ��</span></a></li>
      <li class="equipment disable"><a href="./equipment01.html" class="disable"><span class="ja">�ݔ��E�d�l</span></a></li>
      <li class="structur disable"><a href="./structure01.html" class="disable"><span class="ja">�\���E�h��</span></a></li>
      <li class="location disable">���P�[�V���� �i <span><a href="./location01.html"><span class="ja">�y�n��搮�����ƂŐ��܂�ς��X</span></a></span> / <span><a href="./location02.html"><span class="ja">���Ɨ΂̎��R��g�߂ɁB</span></a></span> / <span><a href="./location03.html"><span class="ja">�u�o�ˁv�w���ӂ̗D�ꂽ���֐�</span></a></span> �j</li>
      <li class="access"><a href="./access.html"><span class="ja">�A�N�Z�X</span></a></li>
      <li class="link map"><a href="map.html" target="_blank"><span class="ja">���n�ē��}</span></a></li>
      <li class="link outline"><a href="javascript:outline();"><span class="ja">�����T�v</span></a></li>
      <li class="link faq"><a href="/<?= $folder_name?>faq.cgi" target="_blank"><span class="ja">FAQ</span></a></li>
      <li class="link blog disable"><a href="javascript:blog();"  class="disable"><span class="ja">�}���V�������u���O</span></a></li>
      <li class="link sitemap"><a href="sitemap.html"><span class="ja">�T�C�g�}�b�v</span></a></li>
      <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=ct_noborito&LINK=footer"></script>
    </ul>


  </div><!-- wrap -->
</div><!-- content -->
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
