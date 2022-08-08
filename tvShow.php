<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
		.btn-circle.btn-xl {
            width: 100px;
			height: 100px;
			padding: 30px 18px;
			border-radius: 60px;
			font-size: 15px;
			text-align: center;
		}
	</style>
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
echo"<a type='button' href='tvShow.php' class='btn btn-primary'>Back</a>";
 $moviename=$_GET['movieName'];
 $show_path = "/opt/lampp/htdocs/Projects/MoviePlayer/Movies/TV Shows/$moviename";
 $season_files = scandir($show_path);
 $season_files = array_diff(scandir($show_path), array('.', '..'));
 echo "<div class='row'>";
 foreach($season_files as $season){
   
    echo"<div class='btn btn-primary btn-circle btn-xl'>
    <p class='btn btn-primary btn-block'>$season</p>";
        $episode_path = "/opt/lampp/htdocs/Projects/MoviePlayer/Movies/TV Shows/$moviename/$season";
        $episode_files = scandir($episode_path);
        $episode_files = array_diff(scandir($episode_path), array('.', '..'));
    foreach($episode_files as $episode){
        echo" <div class='p-4 text-dark col-md-2 mx-1d-flex flex-column align-items-center justify-content-center'>
        <a href='player.php?movieName=$moviename&season=$season&episode=$episode'
       >$episode</a>
        </div>";
        
    }
    echo"</div>";
  }
echo"</div>";
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
          <a href='tvShow.php?movieName=$file'> 
          <img style=' height:75%' src='./Thumbnails/TvShows/$file.png' class='card-img-top rounded' alt='img'></a>
          <div class='card-body '>
          <a href='tvShow.php?movieName=$file' class='btn btn-primary btn-block'>$file</a>
          </div>
          </div>";
        }
        echo "</div>";
    }
?>