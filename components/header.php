
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="manga.svg" alt="Manga Hinog Logo" style="height: 50px;">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav d-flex align-items-center my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Browse
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="action.php">Action</a></li>
            <li><a class="dropdown-item" href="another-action.php">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="something-else.php">Something else here</a></li>
          </ul>
        </li>
      </ul>

      <form class="d-flex align-items-center ms-auto" role="search">
        <input class="form-control" type="search" placeholder="Type your Anime" aria-label="Search">
        <button class="btn bg-black text-white ms-2" type="submit">Search</button>
        <?php if (isset($_SESSION['username'])): ?>
          <div class="dropdown ms-3">
            <a href="#" class="d-flex align-items-center" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <img src="userr.svg" alt="User Icon" style="height: 40px;" fill="#000">
              
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <span class="ms-2"><?php echo $_SESSION['username']; ?></span>
             <li><a class="dropdown-item" href="profile.php">Profile</a></li>
             <li><hr class="dropdown-divider"></li>
             <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </div>
          <?php else: ?>
            <a href="login.php" class="ms-3">
             <img src="userr.svg" alt="User Icon" style="height: 40px;" fill="#000">
            </a>
          <?php endif; ?>
      </form>
    </div>
  </div>
</nav>
