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
<div class="g-wrap" id="contact">
  <!-- Banner-->
  <section class="p-banner">
    <img src="assets/images/blank.png" data-src="assets/images/ban_contact.png" class="hidden-xs img-responsive lazy" alt="">
    <img src="assets/images/blank.png" data-src="assets/images/ban_contact_s.png" class="visible-xs img-responsive lazy" alt="">
    <h2 class="h2 showrole">聯繫我們</h2>
    <div class="container-1400">
      <?php include ("page_breadcrumb.php");?>
    </div>
  </section>

  <section class="map-wrap">
    <div class="container">
      <div class="logo-box"><img src="assets/images/logo_black.png" alt=""></div>
      <div class="wrap">
        <div class="left-box">
          <div class="box">
            <h3 class="h3">台灣總部</h3>
            <a href="https://goo.gl/maps/1bFusXGB6X7hb3c58" target="_blank" class="txt">台灣新北市三重區重新路4段89號7樓</a>
          </div>
          <ul class="reset">
            <li><i class="fas fa-phone"></i><span class="bold">連絡電話</span>：<a href="tel:+886289726638" title="+886-2-89726638">+886-2-89726638</a></li>
            <li><i class="fas fa-envelope"></i><span class="bold">聯絡信箱</span>：<a href="mailto:master@bee-comp.com" title="master@bee-comp.com">master@bee-comp.com</a></li>
            <li><i class="fas fa-handshake"></i><span class="bold">商務合作</span>：<a href="mailto:sales@bee-comp.com" title="sales@bee-comp.com">sales@bee-comp.com</a></li>
            <li><i class="fas fa-newspaper"></i><span class="bold">媒體連繫</span>：<a href="mailto:pr@bee-comp.com" title="pr@bee-comp.com">pr@bee-comp.com</a></li>
          </ul>
        </div>
        <div class="right-box">
          <div class="box">
            <h3 class="h3">香港</h3>
            <p class="txt">香港銅鑼灣希慎道33號利園一期19樓1902室</p>
          </div>
          <div class="box">
            <h3 class="h3">北京</h3>
            <p class="txt">北京市朝陽區朝陽公園南路21號郡王府體育館西側1層</p>
          </div>
          <div class="box">
            <h3 class="h3">杭州</h3>
            <p class="txt">浙江省杭州市濱江區浦沿街道六和路368號1幢(北)四樓B4054室</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="from-wrap">
    <div class="container-1400">
      <h3 class="h3">諮詢表單</h3>
      <div class="msg-welcome">有任何疑問歡迎填寫底下表單，我們會盡快回覆您。<br class="hidden-xs">（ <i class="star">*</i>為必填欄位）</div>
     <form action="contact_us_finish.php" name="form_contact">
      <div class="form-box">
        <span class="label-style"><i class="star">*</i>諮詢分類</span>
        <select name="contact_type" class="select-style">
          <option>請選擇主題</option>
        </select>
      </div>
       <div class="form-box form-half">
         <span class="label-style"><i class="star">*</i>主旨</span>
         <input type="text" name="subject" class="input-style">
       </div>
       <div class="form-box form-sex">
         <span class="label-style"><i class="star">*</i>姓名</span>
         <input type="text" name="fullname" class="input-style">
         <div class="sex-group">
           <label class="radio-style" for="sex_mr"><input type="radio" name="sex" value="" id="sex_mr" checked><span><i></i></span>先生</label>
           <label class="radio-style" for="sex_mrs"><input type="radio" name="sex" value="" id="sex_mrs"><span><i></i></span>小姐</label>
         </div>
       </div>
       <div class="form-box form-half">
         <span class="label-style"><i class="star">*</i>E-mail</span>
         <input type="email" name="email" class="input-style">
       </div>
       <div class="form-box form-half">
         <span class="label-style"><i class="star">*</i>聯絡電話</span>
         <input type="text" name="tel" class="input-style">
       </div>
       <div class="form-box">
         <span class="label-style"><i class="star">*</i>諮詢內容</span>
         <textarea name="content" cols="30" rows="10" class="textarea-style"></textarea>
       </div>
       <div class="form-bottom clearfix">
         <div class="form-box code">
           <div class="label-style"><i class="star">*</i>驗證碼</div>
           <input type="text" name="captcha" id="contact_code" class="input-style">
           <a href="javascript:void(0);" title="點擊更換驗證碼" class="codeimg"><img src="assets/images/del/captcha.jpg" alt="驗證碼"></a>
         </div>
          <button type="submit" class="btn-submit" title="SUBMIT"><span>SUBMIT</span></button>
       </div>
     </form>

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



});
</script>
</body>
</html>