<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<?php
require_once './_partials/header.php';
?>
<?php
$path = "/opt/lampp/htdocs/Projects/MoviePlayer/Movies/Movies";
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
echo "<div class='row'>";
foreach($files as $file){
if(strtolower(end(explode(".",$file))) =="mp4") {
  echo "
  <div class='p-4 bg-secondary text-dark col-md-2 mx-1d-flex flex-column align-items-center justify-content-center'>
  <a href='player.php?movieName=$file'> 
  <img src='./Thumbnails/$file.png' class='card-img-top rounded' alt='img'></a>
  <div class='card-body '>
  <a href='player.php?movieName=$file' class='btn btn-primary btn-block'>$file</a>
  </div>
  </div>";}
}
echo "</div>";
?>

</html>