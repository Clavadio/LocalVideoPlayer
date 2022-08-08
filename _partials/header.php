<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h4 class="navbar-brand">Sajan's Movies</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="index.php">Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tvShow.php">Tv Shows</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pictures.php">Pictures</a>
      </li>
      <li class="nav-item">
          <?php
          session_start();
          if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']==1){
            $user=$_SESSION['xyz'];
            echo "
            <li><a class='nav-link' href='Account.php'>$user</a></li>
            <li>
            <a class='btn btn-primary' href='./_partials/handleLogout.php'>Logout</a>
            </li>";
            
          }
            else{
                echo '<a class="btn btn-primary mx-2" href="login.php">Login</a>';

            }
        ?>
        
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button  header="search.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
