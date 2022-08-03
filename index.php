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
//require_once("Chromecast.php");
//echo "passed";
//Create Chromecast object and give IP and Port
// $cc = new Chromecast("192.168.1.200","8009");
// $cc->DMP->play("https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4","BUFFERED","video/mp4",true,0);
// $cc->DMP->UnMute();
// $cc->DMP->SetVolume(1);
// sleep(5);
// $cc->DMP->pause();
// print_r($cc->DMP->getStatus());
// sleep(5);
// $cc->DMP->restart();
// sleep(5);
// $cc->DMP->seek(100);
// sleep(5);
// $cc->DMP->SetVolume(0.5);
// sleep(15);
// $cc->DMP->SetVolume(1); // Turn the volume back up
// $cc->DMP->Mute();
// sleep(20);
// $cc->DMP->UnMute();
// sleep(5);
// $cc->DMP->Stop();
$path = "/opt/lampp/htdocs/Projects/MoviePlayer/Movies/Movies";
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
echo "<div class='row bg-secondary'>";
foreach($files as $file){
if(strtolower(end(explode(".",$file))) =="mp4") {
  $viewable_file = substr($file, 0, strpos($file, "("));
  echo "
  <div class='p-4 text-dark col-md-2 mx-1d-flex flex-column align-items-center justify-content-center'>
  <a href='player.php?movieName=$file'> 
  <img style=' height:75%' src='./Thumbnails/$file.png' class='card-img-top rounded' alt='img'></a>
  <div class='card-body '>
  <a href='player.php?movieName=$file' class='btn btn-primary btn-block'>$viewable_file</a>
  </div>
  </div>";
}
}
echo "</div>";
?>

</html>