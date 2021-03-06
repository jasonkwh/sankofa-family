<?php
    session_start();

    function navMenu($smfos_nav_lan) {
        if($smfos_nav_lan == "en") {
            echo "<li><a href='/en' class='w3-padding-large w3-text-light-grey'>Home</a></li><li><a href='/services-en' class='w3-padding-large w3-text-light-grey'>Products</a></li><li><a href='/estore' class='w3-padding-large w3-text-light-grey'>eStore</a></li><li><a href='/our-team-en' class='w3-padding-large w3-text-light-grey'>Our team</a></li><li><a href='/en#sankofa-contact' class='w3-padding-large w3-text-light-grey'>Contact us</a></li>";
        } elseif($smfos_nav_lan == "zh") {
            echo "<li><a href='/' class='w3-padding-large w3-text-light-grey'>首页</a></li><li><a href='/services' class='w3-padding-large w3-text-light-grey'>产品信息</a></li><li><a href='/estore' class='w3-padding-large w3-text-light-grey'>eStore</a></li><li><a href='/our-team' class='w3-padding-large w3-text-light-grey'>团队介绍</a></li><li><a href='/#sankofa-contact' class='w3-padding-large w3-text-light-grey'>联系我们</a></li>";
        } elseif($smfos_nav_lan == "zh_estore") {
            echo "<li><a href='/' class='w3-padding-large w3-hover-dark-grey estore-nav'>首页</a></li><li><a href='/services' class='w3-padding-large w3-hover-dark-grey estore-nav'>产品信息</a></li><li><a href='/estore' class='w3-padding-large w3-hover-dark-grey estore-nav'>eStore</a></li><li><a href='/our-team' class='w3-padding-large w3-hover-dark-grey estore-nav'>团队介绍</a></li><li><a href='/#sankofa-contact' class='w3-padding-large w3-hover-dark-grey estore-nav'>联系我们</a></li>";
        } else {
            echo "<li><a href='/en' class='w3-padding-large w3-hover-dark-grey estore-nav'>Home</a></li><li><a href='/services-en' class='w3-padding-large w3-hover-dark-grey estore-nav'>Products</a></li><li><a href='/estore' class='w3-padding-large w3-hover-dark-grey estore-nav'>eStore</a></li><li><a href='/our-team-en' class='w3-padding-large w3-hover-dark-grey estore-nav'>Our team</a></li><li><a href='/en#sankofa-contact' class='w3-padding-large w3-hover-dark-grey estore-nav'>Contact us</a></li>";
        }
    }

    function navMenuLogin($loginStyle, $loginLan, $loginText) {
        if(isset($_SESSION['esuserid'])) {
            require('sf-passwd.php');
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            }
            
            $carthref = "/estore?errorcart";
            $query = "select * from cs_cart where CustomerId=" . $_SESSION['esuserid'] . " and Sold=0 and Trash=0";
            $result = $mysqli->query($query);
            if(($result) && ($result->num_rows !== 0)){
                $carthref = "/estore?cart";
            }
        }
        
        $dropdownMenu = "";
        $loginLabel = "";
        $loginLabelAdmin = "";
        $loginLabelCart = "";
        $loginLabelSignout = "";
        if($loginLan == "en") {
            $loginLabel = "<span class='glyphicon glyphicon-log-in' style='margin-right:10px'></span>Login";
            $loginLabelAdmin = "Profile";
            $loginLabelCart = "Shopping Cart";
            $loginLabelSignout = "Sign Out";
        } elseif($loginLan == "zh") {
            $loginLabel = "<span class='glyphicon glyphicon-log-in' style='margin-right:10px'></span>登录";
            $loginLabelAdmin = "个人资料";
            $loginLabelCart = "购物车";
            $loginLabelSignout = "登出";
        }
        if($loginText != "") {
            $loginLabel = "<span class='glyphicon glyphicon-user' style='margin-right:10px'></span>" . $loginText;
            $dropdownMenu = "<div class='sf-dropdown-content'><a href='" . $carthref . "'><span class='glyphicon glyphicon-shopping-cart' style='margin-right:10px'></span>" . $loginLabelCart . "</a><a href='/estore?editprofile'><span class='glyphicon glyphicon-cog' style='margin-right:10px'></span>" . $loginLabelAdmin . "</a><a href='/wp-content/themes/sankofafamily/es-logout.php'><span class='glyphicon glyphicon-log-out' style='margin-right:10px'></span>" . $loginLabelSignout . "</a></div>";
        }
        if($loginStyle == 0) {
            //original
            echo "<li class='w3-hide-small w3-right sf-dropdown'><a href='/estore?login' class='w3-padding-large w3-hover-green w3-text-light-grey sf-dropbtn'>" . $loginLabel . "</a>" . $dropdownMenu . "</li>";   
        } else {
            //estore
            echo "<li class='w3-hide-small w3-right sf-dropdown'><a href='/estore?login' class='w3-padding-large w3-hover-green estore-nav sf-dropbtn'>" . $loginLabel . "</a>" . $dropdownMenu . "</li>";
        }
    }
?>