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
<form action="./_partials/handlelogin.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="email">Username</label>
                        <input type="username" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
</body>
</html>