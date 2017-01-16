<?php
function returnRights($rights_type,$smfos_lan,$smfos_href) {
    if($smfos_lan == "zh") {
        $smfos_footer_lan = "English";
    } else {
        $smfos_footer_lan = "中文页面";
    }
    if($rights_type == 0) {
        //normal style
        echo "<footer class='w3-center w3-light-grey w3-padding-32'><a href='https://www.smfos.com.au'><img src='/images/smfos_logo.png'></a><p style='font-size:13px;margin-top:5px'>By using this site, you signify that you agree to be bound by these <a href='/terms-conditions/' style='text-decoration:underline'>Terms & Conditions</a>.</p><ul style='list-style-type:none;font-size:13px;margin-top:-15px;color:#747474;text-decoration:underline'><li style='display:inline;margin-right:10px'><a href='/legal'>Legal</a></li><li style='display:inline;margin-right:10px'><a href='/privacy-policy'>Privacy Policy</a></li><li style='display:inline;margin-right:10px'><a href='/disclaimer'>Disclaimer</a></li><li style='display:inline;margin-right:10px'><a href='/#sankofa-contact'>Contact us</a></li><li style='display:inline'><a href='" . $smfos_href . "'>" . $smfos_footer_lan . "</a></li></ul><p style='font-size:13px;margin-top:-15px'>© " . date("Y") . " <strong>SMFOs Pty Ltd</strong> (ABN 41 613 532 835), All rights reserved.</p></footer>";
    } elseif($rights_type == 1) {
        //services
        echo "<footer class='w3-center w3-transparent w3-padding-32'><a href='https://www.smfos.com.au'><img src='/images/smfos_logo_white.png'></a><p style='font-size:13px;margin-top:5px;color:#ffffff'>By using this site, you signify that you agree to be bound by these <a href='/terms-conditions/' style='text-decoration:underline'>Terms & Conditions</a>.</p><ul style='list-style-type:none;font-size:13px;margin-top:-15px;color:#ffffff;text-decoration:underline'><li style='display:inline;margin-right:10px'><a href='/legal'>Legal</a></li><li style='display:inline;margin-right:10px'><a href='/privacy-policy'>Privacy Policy</a></li><li style='display:inline;margin-right:10px'><a href='/disclaimer'>Disclaimer</a></li><li style='display:inline;margin-right:10px'><a href='/#sankofa-contact'>Contact us</a></li><li style='display:inline'><a href='" . $smfos_href . "'>" . $smfos_footer_lan . "</a></li></ul><p style='font-size:13px;margin-top:-15px;color:#ffffff'>© " . date("Y") . " <strong>SMFOs Pty Ltd</strong> (ABN 41 613 532 835), All rights reserved.</p></footer>";
    } elseif($rights_type == 2) {
        //estore
        echo "<footer class='estore-footer w3-center w3-transparent w3-padding-32'><a href='https://www.smfos.com.au'><img src='/images/smfos_logo.png'></a><p style='font-size:13px;margin-top:5px'>By using this site, you signify that you agree to be bound by these <a href='/terms-conditions/' style='text-decoration:underline'>Terms & Conditions</a>.</p><ul style='list-style-type:none;font-size:13px;margin-top:-15px;color:#747474;text-decoration:underline'><li style='display:inline;margin-right:10px'><a href='/legal'>Legal</a></li><li style='display:inline;margin-right:10px'><a href='/privacy-policy'>Privacy Policy</a></li><li style='display:inline;margin-right:10px'><a href='/disclaimer'>Disclaimer</a></li><li style='display:inline'><a href='/#sankofa-contact'>Contact us</a></li></ul><p style='font-size:13px;margin-top:-15px'>© " . date("Y") . " <strong>SMFOs Pty Ltd</strong> (ABN 41 613 532 835), All rights reserved.</p></footer>";
    } else {
        //single language
        echo "<footer class='w3-center w3-light-grey w3-padding-32'><a href='https://www.smfos.com.au'><img src='/images/smfos_logo.png'></a><p style='font-size:13px;margin-top:5px'>By using this site, you signify that you agree to be bound by these <a href='/terms-conditions/' style='text-decoration:underline'>Terms & Conditions</a>.</p><ul style='list-style-type:none;font-size:13px;margin-top:-15px;color:#747474;text-decoration:underline'><li style='display:inline;margin-right:10px'><a href='/legal'>Legal</a></li><li style='display:inline;margin-right:10px'><a href='/privacy-policy'>Privacy Policy</a></li><li style='display:inline;margin-right:10px'><a href='/disclaimer'>Disclaimer</a></li><li style='display:inline'><a href='/#sankofa-contact'>Contact us</a></li></ul><p style='font-size:13px;margin-top:-15px'>© " . date("Y") . " <strong>SMFOs Pty Ltd</strong> (ABN 41 613 532 835), All rights reserved.</p></footer>";
    }
}
?>