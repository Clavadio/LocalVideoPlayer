<?php
    // require_once 'connection.php';
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // echo "$username" . "$password";
// $query = "Select * from users WHERE 'username'=$username and 'password'=$password";
// $result = mysqli_query($conn, $query);
// if(mysqli_num_rows($result)==0){
//     $err='Log In Failed';
// header('location:./header.php$i=$err');
// echo"fail";
// }
// else {
session_start();
$_SESSION['isloggedin'] = true;
//$_SESSION['xyz']=$username;
header('location:../index.php');
// }
?>