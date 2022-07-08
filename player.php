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


$i = $_GET['movieName'];
echo "
<a class='btn btn-primary' href='index.php' role='button'>Back</a>
<br><video width='75%' height='75%' controls='controls' />
<source type='video/mp4' src='./Movies/$i'>
</video>";
echo"<html>
<head>
    <title>$i</title>
</head>
<body>
    
</body>
</html>";
?>
</html>
