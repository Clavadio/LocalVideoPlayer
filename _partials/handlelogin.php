<?php
require_once 'connection.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM `users` WHERE `User`='$user' AND `Pass`='$pass'";
$result = $conn->query($sql);
$num = $result->num_rows;
echo $num;
if ($num==0) {
   header ('location:../pictures.php');
}
else {
    session_start();
    $_SESSION['isloggedin']=true;
    $_SESSION['xyz']=$user;
   header ('location:../index.php');
}
?>