<!DOCTYPE html>
<?php
/*
Template Name: sankofa-services-en
*/
$cookie_name = "sk_lan";
$cookie_value = "";

if(!isset($_COOKIE[$cookie_name])) {
    $cookie_value = "en";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/', 'www.smfos.com.au'); // 86400 = 1 day
} else {
    $cookie_value = $_COOKIE[$cookie_name];
    $var = $_GET['set'];
    if($cookie_value == "zh") {
        if($var == "en") {
            $cookie_value = "en";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/', 'www.smfos.com.au'); // 86400 = 1 day
            header( 'Location: /services-en' );
        } else {
            header( 'Location: /services' );
        }
    } else { ?>
<html>
<head>
<title>Sankofa Multi-Family Offices</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/w3.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/hexagon.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/vegas.min.css">
<script src="/js/jquery.min.js"></script>
<script src="/js/vegas.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li><a href="/en" class="w3-padding-large w3-text-light-grey">Home</a></li>
      <li><a href="/services-en" class="w3-padding-large w3-text-light-grey">Products</a></li>
      <li><a href="#" class="w3-padding-large w3-text-light-grey">Definition of MFOs</a></li>
      <li><a href="/our-team-en" class="w3-padding-large w3-text-light-grey">Our team</a></li>
      <li><a href="/en#sankofa-contact" class="w3-padding-large w3-text-light-grey">Contact us</a></li>
    <li class="w3-hide-small w3-right">
      <a href="/services?set=zh" class="w3-padding-large w3-hover-green w3-text-light-grey">中文</a>
    </li>
  </ul>
</div>

<div class="w3-content w3-container">
<div class="sankofa-center w3-animate-opacity-sankofa-products">
<div class="row w3-center">
			
			<a href="http://www.smfos.com.au/sankofa-invest-en/"><div class="hexagon">
				<div class="outer">
					<div class="inner money-en">
					</div>
				</div>
                </div></a>
			
			<a href="http://www.smfos.com.au/sankofa-property-en/"><div class="hexagon even">
				<div class="outer">
					<div class="inner property-en">
					</div>
				</div>
                </div></a>
			
			<a href="http://www.smfos.com.au/sankofa-family-en/"><div class="hexagon">
				<div class="outer">
					<div class="inner family-en">
					</div>
				</div>
                </div></a>
    
    <a href="http://www.smfos.com.au/sankofa-study-en/"><div class="hexagon even">
				<div class="outer">
					<div class="inner study-en">
					</div>
				</div>
        </div></a>		
    
    <a href="http://www.smfos.com.au/sankofa-heritage-en/"><div class="hexagon">
				<div class="outer">
					<div class="inner heritage-en">
					</div>
				</div>
        </div></a>
			
		</div>

<div class="row w3-center">
    
    <a href="http://www.smfos.com.au/sankofa-exchange-en/"><div class="hexagon">
				<div class="outer">
					<div class="inner forex-en">
					</div>
				</div>
        </div></a>
    
    <a href="http://www.smfos.com.au/sankofa-immi-en/"><div class="hexagon fixhexagon">
				<div class="outer">
					<div class="inner immi-en">
					</div>
				</div>
        </div></a>
    
    <a href="http://www.smfos.com.au/sankofa-tax-en/"><div class="hexagon fixhexagon">
				<div class="outer">
					<div class="inner tax-en">
					</div>
				</div>
        </div></a>
    
		</div>
    
<div class="row w3-center">
    <a href="http://www.smfos.com.au/sankofa-trade-en/"><div class="hexagon fixhexagon">
				<div class="outer">
					<div class="inner trade-en">
					</div>
				</div>
        </div></a>
</div>
    
    </div>
    </div>
    
<!-- Footer -->
<div class="footer-text w3-round-large w3-hover-black">
<p><img src="/images/warning.png"> Disclaimer: Any general advice in this material does not take into account you or your client‘s personal objectives, financial situation and needs. Please seek advice from a financial adviser or broker and read the relevant IM before making a decision in relation to any investment. In the event of any inconsistency or misinterpretation between the marketing material and SMFOs Pty Ltd.</p>
</div>

<footer class="w3-padding-12 w3-transparent">
    <a href="http://www.sankofafund.com.au"><img src="/images/logo.png"></a>
    <p class="w3-left-align w3-text-white">© 2016 <strong>SMFOs Pty Ltd</strong> (ACN 613532835), All rights reserved.</p>
</footer>
<script src="/js/services.js"></script>
<script src="/js/back.to.top.js"></script>
<a href="#0" class="cd-top">Top</a>
</body>
</html>
<?php } } ?>