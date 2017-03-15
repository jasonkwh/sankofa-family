<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/css/w3.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery.min.js"></script>
    <script>
        function validateForm(){
            var useremail = $('#username').val();
            var userpwd = $('#espwd').val();
            var cuserpwd = $('#cespwd').val();

            if((!isValidEmailAddress(useremail)) || (!useremail)) {
                alert("请检查电子邮件是否输入正确");
                $('#username').css('border-color','#FF0000');
                $('#username').css('box-shadow','inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6)');
                $('#espwd').css('border-color','');
                $('#espwd').css('box-shadow','');
                $('#cespwd').css('border-color','');
                $('#cespwd').css('box-shadow','');
                return false;
            } else if(!userpwd) {
                alert("密码不能为空");
                $('#username').css('border-color','');
                $('#username').css('box-shadow','');
                $('#espwd').css('border-color','#FF0000');
                $('#espwd').css('box-shadow','inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6)');
                $('#cespwd').css('border-color','');
                $('#cespwd').css('box-shadow','');
                return false;
            } else if(!cuserpwd) {
                alert("请确认密码");
                $('#username').css('border-color','');
                $('#username').css('box-shadow','');
                $('#espwd').css('border-color','');
                $('#espwd').css('box-shadow','');
                $('#cespwd').css('border-color','#FF0000');
                $('#cespwd').css('box-shadow','inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6)');
            } else if(userpwd != cuserpwd) {
                alert("密码不一致，请重新输入");
                $('#username').css('border-color','');
                $('#username').css('box-shadow','');
                $('#espwd').css('border-color','#FF0000');
                $('#espwd').css('box-shadow','inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6)');
                $('#cespwd').css('border-color','#FF0000');
                $('#cespwd').css('box-shadow','inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6)');
                return false;
            } else {
                return true;
            }
        }

        function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        }
    </script>
</head>
<body>
<form id="regform" action="/wp-content/themes/sankofafamily/es-register-insert.php" onsubmit="return validateForm()" method="post">
<p>个人信息</p>
<div class="w3-center" style="margin-bottom:30px">
<p><input class="w3-input estore-input-login w3-opacity" type="text" name="username" id="username" placeholder="电子邮件（作为用户名）"></p>
<p><input class="w3-input estore-input-login w3-opacity" type="password" name="espwd" id="espwd" placeholder="密码"></p>
<p><input class="w3-input estore-input-login w3-opacity" type="password" name="cespwd" id="cespwd" placeholder="确认密码"></p>
</div>
<p>信用卡资料 (可选填)</p>
<div class="w3-center" style="margin-bottom:30px">
<p><input class="w3-input estore-input-login w3-opacity" type="text" name="cardholder" placeholder="持卡人姓名"></p>
<p><input class="w3-input estore-input-login w3-opacity" type="text" name="cardnumber" placeholder="信用卡号码"></p>
<p><input class="w3-input estore-input-login w3-opacity" type="text" name="cardexpiry" placeholder="到期年月 (MM/YY)"></p>
<p><input class="w3-input estore-input-login w3-opacity" type="text" name="cardcvv" placeholder="CVV"></p>
</div>
<p>其他信息 (可选填)</p>
<div class="w3-center" style="margin-bottom:30px">
<p><input class="w3-input estore-input-login w3-opacity" type="text" name="birthdate" placeholder="出生日期"></p>
<p><input class="w3-input estore-input-login w3-opacity" type="text" name="address" placeholder="地址"></p>
<p><input class="w3-input estore-input-login w3-opacity" type="text" name="state" placeholder="省份/州"></p>
<p><input class="w3-input estore-input-login w3-opacity" type="text" name="country" placeholder="国家"></p>
</div>
</form>
</body>
</html>