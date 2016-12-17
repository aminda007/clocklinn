<?php
error_reporting(0);
session_start();
    if (!$_SESSION["LoggedIn"]) {
    header("Location:../logIn/loginExpired.html");
    exit();    
    }else{
        $username_i=$_SESSION["username_i"];
    }   
?>
<?php
include './connection.php';
$passportID=$_POST['passportID'];
$q="INSERT INTO customer_del SELECT d.* FROM customer d WHERE passportID='$passportID'";
$qresult=mysql_query($q);
$query = "DELETE FROM customer WHERE passportID='$passportID' ";
$result = mysql_query($query);
if (!$result) {
    echo 'not saved';
    echo "<script type='text/javascript'>alert('Not deleted!')</script>";
   // header("Location:home.php");
}  else {
    header("Location:homeReception.php");
    echo 'saved';  
}