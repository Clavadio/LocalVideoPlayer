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
<!-- <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="_partials/handleLogin.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->
</body>
</html>