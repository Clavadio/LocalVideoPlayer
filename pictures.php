<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pictures</title>
</head>
<body>
    
</body>
</html>
<?php
require_once './_partials/header.php';
?>

<?php
$path = "/opt/lampp/htdocs/Projects/MoviePlayer/Movies/Pictures";
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
echo "<div class='row bg-secondary'>";
foreach($files as $file){
if(strtolower(end(explode(".",$file))) =="png" || strtolower(end(explode(".",$file))) =="jpg" ) {
  $viewable_file = substr($file, 0, strpos($file, "("));
  echo "
  <div class='p-4 text-dark col-md-2 mx-1d-flex flex-column align-items-center justify-content-center'>
  <a href='player.php?movieName=$file'> 
  <img style=' height:75%' src='./Movies/Pictures/$file' class='card-img-top rounded' alt='img'></a>
  </div>";
}
}
echo "</div>";
?>