<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
<?php
require_once './_partials/header.php';
?>

<?php
session_start();
if(isset ($_SESSION['isloggedin']) && $_SESSION['isloggedin']==1){
    require_once 'connection.php';
    $user = $_SESSION['xyz'];
    $sql = "SELECT * FROM `users` WHERE `User`='$user'";
    $result = $conn->query($sql);
    while ($row = $res->fetch_assoc()) {
    }
?>
</body>

</html>