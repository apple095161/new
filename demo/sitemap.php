<!DOCTYPE html>
<html lang="zh-Hant">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="keywords" content="蜜蜂計算 :: 此為校稿頁面">
<meta name="description" content="蜜蜂計算 :: 此為校稿頁面">
<title>蜜蜂計算 :: 蜜蜂計算</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<base href="./" data-theme="" data-lang="">
<!-- Favicon -->
<link href="favicon.ico" rel="icon">
<link href="favicon.ico" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<!-- Web Fonts -->
<!-- CSS RWD Core -->
<link href="assets/css/core.min.css" rel="stylesheet">
<!-- CSS Plugins -->
<!-- CSS Themes -->
<link href="assets/css/custom.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="assets/js/plugins/html5shiv-3.7.3.min.js"></script>
<script src="assets/js/plugins/respond-1.4.2.min.js"></script>
<![endif]-->
</head>
<body>
<!--Header-->
<?php include('page_header.php'); ?>
<!--Main-->
<!-- 頁面 id 請於此命名 -->
<div class="g-wrap" id="sitemap">
	  <!-- Banner-->
    <section class="p-banner">
      <img src="assets/images/blank.png" data-src="assets/images/ban_sitemap.png" class="hidden-xs img-responsive lazy" alt="">
      <img src="assets/images/blank.png" data-src="assets/images/ban_sitemap_s.png" class="visible-xs img-responsive lazy" alt="">
      <h2 class="h2 showrole">網站地圖</h2>
      <div class="container-1400">
        <?php include ("page_breadcrumb.php");?>
      </div>
    </section>

    <section class="page-wrap">
      <div class="bg"><img src="assets/images/sitemap_bg.jpg" alt="" data-parallax='{"y": 300}'/></div>
      <div class="container">
        <ul class="reset list">
          
          <li>
            <a href="product_list.php" title="產品介紹" class="h2">產品介紹<span></span></a>
            <ul class="reset">
              <li><a href="product_list.php" title="礦機">礦機</a></li>
              <li><a href="product_list.php" title="雲算力服務">雲算力服務</a></li>
              <li><a href="product_list.php" title="配件">配件</a></li>
            </ul>
          </li>
          <li>
            <a href="about.php" title="關於蜜蜂" class="h2">關於蜜蜂<span></span></a>
            <ul class="reset">
              <li><a href="about.php" title="公司介紹">公司介紹</a></li>
              <li><a href="team.php" title="經營團隊">經營團隊</a></li>
            </ul>
          </li>
          <li>
            <a href="news_list.php" title="最新消息" class="h2">最新消息<span></span></a>
            <ul class="reset">
              <li><a href="news_list.php" title="新聞中心">新聞中心</a></li>
              <li><a href="news_list.php" title="活動訊息">活動訊息</a></li>
            </ul>
          </li>
          <li>
            <a href="contact_us_form.php" title="聯繫我們" class="h2">聯繫我們</a>
            <ul class="reset">
              <li><a href="contact_us_form.php" title="諮詢表單">諮詢表單</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </section>


</div>


<!--Footer-->
<?php include('page_footer.php'); ?>

<script src="assets/js/plugins/mobiledetect-1.4.2.min.js"></script>
<!-- Core -->
<!--[if lt IE 9]>
<script src="assets/js/plugins/jQuery/jquery-1.12.4.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="assets/js/plugins/jQuery/jquery-2.2.4.min.js"></script>
<!--<![endif]-->
<script src="assets/js/plugins/jQuery/jquery.mobile-1.4.5.custom.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.lazy-1.7.9.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.easing-1.4.1.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.scrollview-1.6.min.js"></script>
<script src="assets/js/plugins/Bootstrap/bootstrap-3.3.7.min.js"></script>
<!-- Plugins -->
<script src="assets/js/plugins/jQuery/jquery.parallax-scroll.js"></script>

<!-- Scripts -->
<script src="assets/js/common.js"></script>
<script>
$(function() {

  var bg_left = $(".bg-left");
  var bg_right = $(".bg-right");

  $(window).scroll(function() {
      bg_left.css('margin-top', ($(window).scrollTop())/3); // Parallax scrolling
      bg_right.css('margin-top', ($(window).scrollTop())/3); // Parallax scrolling
      bg_left.css('opacity', 1 - ($(window).scrollTop())/bg_left.height()); // Fading out
      bg_right.css('opacity', 1 - ($(window).scrollTop())/bg_left.height()); // Fading out
  });




});
</script>
</body>
</html>