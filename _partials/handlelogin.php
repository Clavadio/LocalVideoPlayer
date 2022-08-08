<?php
require_once 'connection.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM `users` WHERE `User`='$user' AND `Pass`='$pass'";
$result = $conn->query($sql);
$num = $result->num_rows;
echo $num;
if ($num==1) {
    session_start();
    $_SESSION['isloggedin']=1;
    $_SESSION['xyz']=$user;
    header ('location:../index.php');
    exit();
   
}
else {
    $err="Invalid Credentials";
    $_SESSION['isloggedin']=0;
    header ("location:../login.php?err=$err");
}
?>