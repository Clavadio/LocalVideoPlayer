<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV Shows</title>
</head>
<body>
    
</body>
</html>
<?php
require_once './_partials/header.php';
?>
<?php
if(isset($_GET['movieName'])){
 $moviename=$_GET['movieName'];
 $path = "/opt/lampp/htdocs/Projects/MoviePlayer/Movies/TV Shows/$moviename";
 $files = scandir($path);
 $files = array_diff(scandir($path), array('.', '..'));
 //echo"<div class='p-3 mb-2 bg-warning text-dark'>";
 echo "<div class='row bg-secondary'>";
 foreach($files as $file){
    echo"
    <div class='col-md-2 mx-1d-flex flex-column align-items-center justify-content-center'>
    <a href='player.php?movieName=$file'> 
    <img style=' height:75%' src='./Thumbnails/$file.png' class='card-img-top rounded' alt='img'></a>
    <div class='card-body '>
    <a href='tvShow.php?movieName=$file' class='btn btn-primary btn-block'>$file</a>
    </div>
    </div>";
  }
  echo "</div>";
}
    else{
        $path = "/opt/lampp/htdocs/Projects/MoviePlayer/Movies/TV Shows";
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        echo "<div class='row bg-secondary'>";
        foreach($files as $file){
          $viewable_file = substr($file, 0, strpos($file, "("));
          echo "
          <div class='p-4 text-dark col-md-2 mx-1d-flex flex-column align-items-center justify-content-center'>
          <a href='player.php?movieName=$file'> 
          <img style=' height:75%' src='./Thumbnails/TvShows/$file.png' class='card-img-top rounded' alt='img'></a>
          <div class='card-body '>
          <a href='tvShow.php?movieName=$file' class='btn btn-primary btn-block'>$file</a>
          </div>
          </div>";
        }
        echo "</div>";
    }
    //echo"</div>";
?>