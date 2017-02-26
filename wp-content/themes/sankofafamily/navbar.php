<?php
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
        $dropdownMenu = "";
        $loginLabel = "";
        $loginLabelAdmin = "";
        $loginLabelCart = "";
        $loginLabelSignout = "";
        if($loginLan == "en") {
            $loginLabel = "Login";
            $loginLabelAdmin = "Preferences";
            $loginLabelCart = "Shopping Cart";
            $loginLabelSignout = "Sign Out";
        } elseif($loginLan == "zh") {
            $loginLabel = "登录";
            $loginLabelAdmin = "用户设置";
            $loginLabelCart = "购物车";
            $loginLabelSignout = "登出";
        }
        if($loginText != "") {
            $loginLabel = $loginText;
            $dropdownMenu = "<div class='sf-dropdown-content'><a href='/wp-admin'>" . $loginLabelAdmin . "</a><a href='#'>" . $loginLabelCart . "</a><a href='" . wp_logout_url( home_url() ) . "'>" . $loginLabelSignout . "</a></div>";
        }
        if($loginStyle == 0) {
            //original
            echo "<li class='w3-hide-small w3-right sf-dropdown'><a href='/wp-admin' class='w3-padding-large w3-hover-green w3-text-light-grey sf-dropbtn'>" . $loginLabel . "</a>" . $dropdownMenu . "</li>";   
        } else {
            //estore
            echo "<li class='w3-hide-small w3-right sf-dropdown'><a href='/wp-admin' class='w3-padding-large w3-hover-green estore-nav sf-dropbtn'>" . $loginLabel . "</a>" . $dropdownMenu . "</li>";
        }
    }
?>