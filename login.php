<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Log In</title>
    <link rel="stylesheet" href="./css/login.css">
  </head>
  <body>
    <div class="container flex">
      <div class="login-page flex">
        <div class="Text-Log">
            <h1 class="title">
                <img src="manga.svg" alt="Icon" width="600" height="300" />
            </h1>
            <p>Discover the latest and manga</p>
            <p>Your gateway to endless stories.</p>
        </div>
        
        <form action="./config/process.php" method="POST">
          <input type="email" name="email" placeholder="Email or phone number" required>
          <input type="password" name="password" placeholder="Password" required>
          <input type="hidden" name="action" value="login"> 
          <div class="link">
            <button type="submit" class="loginbtn">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="./signup.php">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
