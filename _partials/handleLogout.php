<?php
session_start();
$_SESSION['isloggein']=0;
session_destroy();
header('location:../index.php');
?>