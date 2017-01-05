<?php
/*
Template Name: sankofa-crm-client-info
*/
$current_user = wp_get_current_user();

if ( is_user_logged_in() ):

$servername = "localhost";
$username = "root";
$password = "Sankofa809";
$dbname = "sankofa-family";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

//get message status
session_start();
$crm_status = $_SESSION['crm_client_info_status'];

//get query string
$group = $_GET['group'];

//sql query
$sql = "SELECT * FROM sf_crm_client_group WHERE ref_id_manage = ( SELECT ref_id FROM sf_crm_info WHERE user_login = '$current_user->user_login') AND group_id = '$group'";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM sf_crm_client_info WHERE group_id = '$group'";
$result2 = $conn->query($sql2);

//add calendar
include 'calendar.php';
$calendar = new Calendar();
?>
<!DOCTYPE html>
<html>
<title>Sankofa CRM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/calendar.css">
<script src="/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.hidden').fadeIn(500).removeClass('hidden');
    $(".crm-client-info-msg").fadeOut(2750).removeClass('crm-client-info-msg');
});
</script>
<style>
.w3-sidenav {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-weight:bold}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="<?php echo get_avatar_url ( $current_user->user_email, 300 ); ?>" style="width:45%;" class="w3-round"><br><br>
    <h4 class="w3-padding-0"><b><?php echo $current_user->user_login ?></b></h4>
    <p class="w3-text-grey"><?php echo $current_user->user_email ?></p>
  </div>
  <a href="/portal" onclick="w3_close()" class="w3-padding w3-hover-text-light-grey">主页</a>
  <a href="/client_group" onclick="w3_close()" class="w3-padding crm-text-blue w3-hover-text-light-grey">客户群管理</a>
  <a href="<?php echo wp_logout_url( home_url() ); ?>" onclick="w3_close()" class="w3-padding w3-hover-text-light-grey">登出</a>
   
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

<!-- Header -->
<header class="w3-container w3-right-align crm-title-padding">
    <h3>客户群管理</h3>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- MAIN -->
<div class="w3-col l8 s12">
<?php if($crm_status > 0) { if($crm_status == 1) { ?>
<div class="w3-margin crm-box-bonus crm-client-info-msg hidden">
    <div class="w3-container">
    <p>成功新建客户群，请完善客户群详细资料。</p>
    </div>
  </div>
<hr class="crm-client-info-msg">
<?php } elseif($crm_status == 2) { ?>
<div class="w3-margin crm-box-error crm-client-info-msg hidden">
    <div class="w3-container">
    <p>数据添加失败，必填项不能为空。</p>
    </div>
  </div>
<hr class="crm-client-info-msg">
<?php } elseif($crm_status == 3) { ?>
<div class="w3-margin crm-box-error crm-client-info-msg hidden">
    <div class="w3-container">
    <p>数据添加失败，数据类型不符或客户群已存在。</p>
    </div>
  </div>
<hr class="crm-client-info-msg">
<?php } $_SESSION['crm_client_info_status'] = 0; } ?>
  <div class="w3-margin crm-box hidden">
    <div class="w3-container">
      <h4><b>客户数据</b></h4>
    </div>
      <div class="w3-container">
    <form method="post" action="/insert-crm-group.php">
        <table style="padding:10px;font-size:14px">
        <tbody>
        <tr>
        <td class="crm-input-validate">客户姓名:</td><td><input class="w3-input crm-box-input w3-opacity" type="text" name="group_no" placeholder="必填，仅数字"></td>
        <td class="crm-input-validate">微信号:</td><td><input class="w3-input crm-box-input w3-opacity" type="text" name="client_name" placeholder="必填，中英文皆可"></td>
        </tr>
        <tr>
        <td class="crm-input-validate">手机号:</td><td></td>
        <td class="crm-input-validate">电子邮件:</td><td></td>
        </tr>
        <tr>
        <td class="crm-input-validate">客户职业:</td><td></td>
        <td class="crm-input-validate">ID:</td><td><input class="w3-input crm-box-input w3-opacity" type="text" name="city" placeholder="必填"></td>
        </tr>
        </tbody>
        </table>
      <div class="w3-row">
        <div class="w3-col m8 s12">
        <input type="submit" class="crm-box-btn-group w3-padding" value="更新客户资料">
        </div>
      </div>
    </form>
</div>
</div>
<hr>
<div class="w3-margin crm-box-bonus hidden">
    <div class="w3-container">
      <h4><b>Graph</b></h4>
    </div>
    <div class="w3-container">
    <p>testing</p>
    </div>
  </div>
    
<!-- END MAIN -->
</div>
    
<!-- Sidebar -->
<div class="w3-col l4">
<div class="w3-margin crm-box-search hidden">
    <div class="w3-container">
    <form method="post" action="/">
    <input class="w3-input crm-search-input" type="text" name="search_value" placeholder="CRM 数据库搜索">
    </form>
    </div>
  </div>
<hr>
 <?php if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
<div class="w3-margin crm-box-bonus hidden">
    <div class="w3-container">
    <h4><b>客户<?php echo $group; ?>群</b></h4>
    </div>
    <div class="w3-container">
    <form method="post" action="/insert-crm-group.php">
        <table style="padding:10px;font-size:14px">
        <tbody>
        <tr>
        <td class="crm-input-validate">后台客服:</td><td></td>
        </tr>
        <tr>
        <td class="crm-input-validate">渠道编号:</td><td></td>
        </tr>
        <tr>
        <td class="crm-input-validate">上级:</td><td></td>
        </tr>
        <tr>
        <td class="crm-input-validate">所在城市:</td><td></td>
        </tr>
        <tr>
        <td class="crm-input-validate">地址:</td><td></td>
        </tr>
        <tr>
        <td class="crm-input-validate">邮编:</td><td></td>
        </tr>
        </tbody>
        </table>
      <div class="w3-row">
        <div class="w3-center">
        <input type="submit" class="crm-box-bonus-btn w3-padding" value="更新群资料">
        </div>
      </div>
    </form>
    </div>
  </div>
<?php } } else { ?>
<div class="w3-margin crm-box-error hidden">
    <div class="w3-container">
    <h4><b>客户群加载失败</b></h4>
    </div>
    <div class="w3-container">
        <div class="w3-center">
        <p>数据加载失败，请联系管理员!</p>
        <hr>
        <p><button class="crm-box-error-btn w3-padding">联系系统管理员</button></p>
        </div>
    </div>
  </div>
<?php } $conn->close(); ?>

  
<!-- END Sidebar -->
</div>

<!-- END GRID -->
</div>

<a href="#0" class="cd-top">Top</a>

<!-- End page content -->
</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-black";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-black", "");
    }
}
</script>
<script src="/js/back.to.top.js"></script>
</body>
</html>
<?php
else: 
header( 'Location: /wp-admin' ) ;
endif;
?>