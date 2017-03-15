<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
session_start();

include 'sf-passwd.php';
$mysqli = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

    // Escape user inputs for security
    $username = $mysqli->real_escape_string($_REQUEST['username']);
    $password = $mysqli->real_escape_string($_REQUEST['espwd']);
    $cardholder = $mysqli->real_escape_string($_REQUEST['cardholder']);
    $cardexpiry = $mysqli->real_escape_string($_REQUEST['cardexpiry']);
    $cardnumber = $mysqli->real_escape_string($_REQUEST['cardnumber']);
    $cardcvv = $mysqli->real_escape_string($_REQUEST['cardcvv']);
    $birthdate = $_REQUEST['birthdate'];
    $address = $mysqli->real_escape_string($_REQUEST['address']);
    $state = $mysqli->real_escape_string($_REQUEST['state']);
    $country = $mysqli->real_escape_string($_REQUEST['country']);
    
    // attempt insert query execution
    $query = "INSERT INTO cs_users (Username, Password, CardHolder, CardNo, CardExpiry, CVV, CreatedDate, Dob, Address, Country) VALUES ('" . $username . "', '" . hash('sha256',$password) . "', '" . $cardholder . "', " . $cardnumber . ", '" . $cardexpiry . "', " . $cardcvv . ", NOW(), " . $birthdate . ", '" . $address . "', '" . $country . "');";
    $result = $mysqli->query($query);

    if($result) {
        header('Location: /estore');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>