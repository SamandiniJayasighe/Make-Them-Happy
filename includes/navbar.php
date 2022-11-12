
<nav class="navbar navbar-expand-lg navbar-light bg-light fs-5 pt-4 pb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php"><h1>Make Them Happy.</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
        <?php
        if(isset($_SESSION['auth'])){
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['auth_user'] ['name'];?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
          <?php
        }
        else{
          ?>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Login.php">Login</a>
          </li>
          <?php
        }

         ?>


      </ul>
    </div>
  </div>
</nav>
