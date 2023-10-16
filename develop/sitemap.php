<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "sitemap",
  "gnav_set" => "sitemap",
  "page_class" => "",
  "url" => "sitemap.html",
  "title" => "サイトマップ｜",
  "keywords" => "サイトマップ,",
  "description" => "サイトマップページ。",
  "add_stylesheet" => ["css/sitemap.css"],
    
  "logo_text" => "サイトマップ｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
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
      <li class="link blog disable"><a href="javascript:blog();"  class="disable"><span class="ja">マンション情報ブログ</span></a></li>
      <li class="link sitemap"><a href="sitemap.html"><span class="ja">サイトマップ</span></a></li>
      <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=ct_noborito&LINK=footer"></script>
    </ul>


  </div><!-- wrap -->
</div><!-- content -->
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
