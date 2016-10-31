<?php
/*
Template Name: sankofa-class
*/
$current_user = wp_get_current_user();
?>
<!DOCTYPE HTML>  
<html>
<head>
<title>Sankofa 家族办公室</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/w3.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<style>
a {text-decoration: none}
</style>
</head>
<body>  

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li><a href="/" class="w3-padding-large w3-text-light-grey">首页</a></li>
      <li><a href="/services" class="w3-padding-large w3-text-light-grey">产品信息</a></li>
      <li><a href="#" class="w3-padding-large w3-text-light-grey">什么是家族办公室</a></li>
      <li><a href="/#our-team" class="w3-padding-large w3-text-light-grey">团队介绍</a></li>
      <li><a href="/#sankofa-contact" class="w3-padding-large w3-text-light-grey">联系我们</a></li>
    <li class="w3-hide-small w3-right">
      <?php if ( is_user_logged_in() ): ?>
        <a href="/wp-admin" class="w3-padding-large w3-hover-green w3-text-light-grey"><?php echo $current_user->user_login ?></a>
        <?php else: ?>
      <a href="/wp-admin" class="w3-padding-large w3-hover-green w3-text-light-grey">登录</a>
        <?php endif; ?>
    </li>
  </ul>
</div>

<!-- Slideshow -->
  <div class="w3-display-container w3-wide sankofa-product-preview w3-opacity2">
    <img src="http://www.smfos.com.au/images/sydney1.jpg">
    <div class="w3-display-bottomleft w3-text-white w3-container w3-padding-32 w3-hide-small">
        <span class="w3-black w3-padding-large w3-animate-bottom w3-xlarge w3-text-light-grey"><a href="/class">微信课堂登记</a></span>
    </div>
  </div>

<div class="w3-content w3-container w3-text-dark-grey sankofa-product-box" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
<!-- Content -->
<form class="w3-container" method="post" action="/insert.php">
<h3>基本信息</h3>
  <p><input class="w3-input" type="text" name="clientname">
      <label class="w3-label w3-text-dark-grey">姓名 NAME (必填)</label></p>
  <p><input class="w3-input" type="text" name="mobile">
    <label class="w3-label w3-text-dark-grey">电话 PHONE (必填)</label></p>
  <p><?php if ( is_user_logged_in() ): ?>
<input class="w3-input" type="text" name="email" value="<?php echo $current_user->user_email ?>"></p>
<?php else: ?>
<input class="w3-input" type="text" name="email">
<?php endif; ?>
    <label class="w3-label w3-text-dark-grey">电子邮件 EMAIL (必填)</label></p>
  <p><input class="w3-input" type="text" name="job">
    <label class="w3-label w3-text-dark-grey">职业 OCCUPATION</label></p>
<p><input class="w3-radio" type="radio" name="gender" value="1" checked>
<label class="w3-text-dark-grey">男 MALE</label></p>
    <p><input class="w3-radio" type="radio" name="gender" value="0">
<label class="w3-text-dark-grey">女 FEMALE</label></p>
<br>
<h3>兴趣话题</h3>
<div class="w3-half">
<p><input class="w3-check" type="checkbox" name="familytrust" value="yes" checked="checked">
<label class="w3-text-dark-grey">家族信托</label></p>
<p><input class="w3-check" type="checkbox" name="immi" value="yes" checked="checked">
<label class="w3-text-dark-grey">移民</label></p>
<p><input class="w3-check" type="checkbox" name="study" value="yes" checked="checked">
<label class="w3-text-dark-grey">留学</label></p>
<p><input class="w3-check" type="checkbox" name="property" value="yes" checked="checked">
<label class="w3-text-dark-grey">海外置业</label></p>
<p><input type="submit" class="w3-btn w3-hover-light-grey w3-medium" value="提交"></p>
</div>
<div class="w3-half">
<p><input class="w3-check" type="checkbox" name="forex" value="yes" checked="checked">
<label class="w3-text-dark-grey">换汇</label></p>
<p><input class="w3-check" type="checkbox" name="trustfund" value="yes" checked="checked">
<label class="w3-text-dark-grey">基金投资</label></p>
<p><input class="w3-check" type="checkbox" name="cooperate" value="yes" checked="checked">
<label class="w3-text-dark-grey">合作伙伴</label></p>
<p><input class="w3-check" type="checkbox" name="others" value="yes" checked="checked">
<label class="w3-text-dark-grey">其他</label></p>
</div>
</form>

</div>

<!-- Footer -->
<div class="footer-text w3-round-large w3-hover-black">
  <p><img src="/images/warning.png"> Disclaimer: Any general advice in this material does not take into account you or your client‘s personal objectives, financial situation and needs. Please seek advice from a financial adviser or broker and read the relevant IM before making a decision in relation to any investment. In the event of any inconsistency or misinterpretation between the marketing material and SMFOs Pty Ltd.</p>
</div>

<footer class="w3-padding-12">
    <a href="http://www.sankofafund.com.au"><img src="/images/logo_black.png"></a>
    <p class="w3-left-align">© 2016 <strong>SMFOs Pty Ltd</strong> (ACN 613532835), All rights reserved.</p>
</footer>
<script src="/js/back.to.top.js"></script>
<a href="#0" class="cd-top">Top</a>
    
</body>
</html>
