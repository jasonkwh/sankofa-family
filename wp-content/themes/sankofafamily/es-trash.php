<?php
session_start();
require_once('DBConnect.php');

if(isset($_SESSION['esuserid'])) {
    $itemid = $_GET['itemid'];
    $query = "UPDATE cs_cart SET Trash=1 WHERE Id=" . $itemid . " AND CustomerId=" . $_SESSION['esuserid'];
    $mysqli->query($query);
    
    $query = "select * from cs_cart where CustomerId=" . $_SESSION['esuserid'] . " and Sold=0 and Trash=0";
    $result = $mysqli->query($query);
    if(($result) && ($result->num_rows !== 0)){
        header( 'Location: /estore?cart&trashed' );
    } else {
        header( 'Location: /estore?errorcart' );
    }
} else {
    header( 'Location: /estore' );
}
?>