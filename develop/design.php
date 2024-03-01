<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "design",
  "gnav_set" => "design",
  "page_class" => "",
  "url" => "design.html",
  "title" => "デザイン｜",
  "keywords" => "デザイン,",
  "description" => "デザインページ。",
  "add_stylesheet" => ["css/design.css"],
  "add_script" =>  [],
  
  "logo_text" => "デザイン｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<!-- パンくずリスト -->
  <div class="breadcrumb sp-hide">
    <ul>
      <li><a href="./index.html">シティテラス登戸｜登戸 マンション｜トップ</a></li>
      <li><p>デザイン</p></li>
    </ul>
  </div>
	<!--// パンくずリスト -->

  <header class="main-visual">
    <!-- <h2 class="page-lead gothic">Hello New World.</h2> -->
   <div class="image"><img src="./images/design/mv01.jpg" alt="" class="pc"><img src="./images/design/mv01-sp.jpg" alt="" class="tb"><p class="annotation white">外観完成予想図①</p></div>
   <div class="image"><img src="./images/design/mv02.jpg" alt="" class="pc"><img src="./images/design/mv02-sp.jpg" alt="" class="tb"><p class="annotation white">外観完成予想図②</p></div>
  </header><!-- main-visual -->

  <section class="intro sections">
    <div class="inner">
      <h2 class="section-title">DESIGN</h2>
      <p class="text">伸びやかな水平ラインを基調とした外観に、<br class="pc">ホワイトのラインとグレー系のマテリアルが、<br class="pc">高級感と重厚な佇まいをもたらすデザインです。</p>
    </div>
    <div class="image"><img src="./images/design/intro.jpg" alt=""><p class="annotation white">外観完成予想図③</p></div>
  </section><!-- intro -->



<p class="page-annotation js-scroll wrap">※掲載の外観完成予想図①・②は計画段階の図面を基に描き起こしたもので、実際とは多少異なります。また、形状の細部および設備機器等については省略しております。<br>※植栽計画は今後変更される場合がありますので、あらかじめご了承ください。<br>※敷地内の樹木等はある程度生育した後をイメージして描いたものです。また、葉や花の色合い、 樹形等はイメージであり実際とは異なります。<br>※掲載の外観完成予想図③は東京都狛江市元和泉２丁目付近上空から南方面を撮影（2023年10月撮影）したものに計画段階の図面を基に描き起こした建物完成予想図をCG合成・加工したもので、実際とは多少異なります。また、周辺環境は将来変わる場合があります。</p>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
