<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<script src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>
<?php
require_once './_partials/header.php';
          session_start();
          if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']==1){
          $i = $_GET['movieName'];
          if(isset($_GET['season'])&& (isset($_GET['episode']))){
            echo "show
          <br><video style=margin-left:10%;width:75%;height:25% controls=controls/>
          <source type='video/mp4' src='./Movies/Movies/$i'>
          <source type='video/webm' src='./Movies/Movies/$i'>
          <track src='./Movies/Movies/$i.vtt' label='English' kind='subtitles' srclang='en' default >
          </video>";
          }
          else{
          echo "movie
          <br><video style=margin-left:10%;width:75%;height:25% controls=controls/>
          <source type='video/mp4' src='./Movies/Movies/$i'>
          <source type='video/webm' src='./Movies/Movies/$i'>
          <track src='./Movies/Movies/$i.vtt' label='English' kind='subtitles' srclang='en' default >
          </video>";
          }
          echo"
          <html>
          <head>
          <title>$i</title>

          </head>
          <body>

          </body>
          </html>";
          }
            else{
              $err="Login Required";
              header("location:./login.php?err=$err");

            }


?>

</html>
