<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "sitemap",
  "gnav_set" => "sitemap",
  "page_class" => "",
  "url" => "sitemap.html",
  "title" => "�T�C�g�}�b�v�b�y�����z�V�e�B�e���X�o�ˁb�o�˂̐V�z�}���V�����b�Z�F�s���Y",
  "keywords" => "�T�C�g�}�b�v,�V�e�B�e���X�o��,�o�� �}���V����,�o�� �V�z�}���V����,�o��,���c�}���c����,���s,�}���V����,�V�z�}���V����,�����}���V����,�Z�F�s���Y",
  "description" => "�T�C�g�}�b�v�y�[�W�B���c�}���c�����EJR�앐���u�o�ˁv�܂œk��11���B�Z�F�s���Y�̐V�z�}���V�������o�˂ɒa���B�y���݂ӓo�ˁz���s�̃}���V�����Ȃ�Z�F�s���Y�B",
  "add_stylesheet" => ["css/sitemap.css"],
    
  "logo_text" => "�o�ˉw�k��11���b�V�e�B�e���X�o�ˁb�o�� �V�z�}���V�����b�T�C�g�}�b�v�b���݂ӓo�ˁb�Z�F�s���Y"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<!-- �p���������X�g -->
  <div class="breadcrumb sp-hide">
    <ul>
      <li><a href="./index.html">�V�e�B�e���X�o�ˁb�o�� �}���V�����b�g�b�v</a></li>
      <li><p>�T�C�g�}�b�v</p></li>
    </ul>
  </div>
	<!--// �p���������X�g -->
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
      <!-- <li class="link blog"><a href="javascript:blog();"><span class="ja">�}���V�������u���O</span></a></li> -->
     <!--<li class="sns-icons">
        <ul class="lists clearfix">
          <li class="sns"><a href="#twitter" target="_blank"><img src="./static/images/common/ico_twitter.png" alt=""></a></li>
          <li class="sns"><a href="#insta" target="_blank"><img src="./static/images/common/ico_instagram.png" alt=""></a></li>
        </ul>
      </li>-->
      <li class="reserveBtn disable"><a href="javascript:raijo();" target="_blank" class="disable">����\��</a></li>
      <li class="onlineBtn disable"><a href="javascript:online();" target="_blank" class="disable"><span class="btnText">�I�����C�����w��</span></a></li>
      <li class="demaeBtn disable"><a href="javascript:delivery();" target="_blank" class="disable">�o�Ode�I�����C�����w��</a></li>
      <!--<li class="requestPageBtn"><a href="#requested_only" target="_blank">���������Ҍ���y�[�W</a></li>
      <li class="meta-gallery"><a href="https://www.sumitomo-rd-mansion.jp/gallery/" target="_blank">���^�}���V�����M�������[</a></li>-->
      <li class="requestBtn"><a href="javascript:siryo();"><span class="btnText">��������<!--�i�����j--></span></a></li>
    </ul>


  </div><!-- wrap -->
</div><!-- content -->
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
