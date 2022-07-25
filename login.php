<!-- Button trigger modal -->
<!-- Modal -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
<?php 
require_once './_partials/header.php'; 
?>
<div style='margin-top:100px;
  display: flex;
  justify-content: center;
  align-items: center';>
<form action="./_partials/handlelogin.php" method="POST">
  <div class="form-outline mb-4">
    <input type="text" name="user" class="form-control" placeholder="Email address"/>
  </div>

  <div class="form-outline mb-4">
    <input type="password" name="pass" class="form-control" placeholder="Password"/>
    
  </div>
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

</form>
</div>
</body>
</html>
