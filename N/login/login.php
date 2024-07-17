<!DOCTYPE html>
<html>
  <head>
    <title>login form in html and css</title>
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <form method = "POST" action="l.php">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="Username" name = "username" required />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" name = "password" required />

          <i class="bx bxs-lock-alt"></i>
        </div>
        <div class="remember-forget">
          <label> <input type="checkbox" />Remember me</label>
          <a href="#"> Forgot password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
          <p>
            Don't have an account?
            <a href="http://localhost/final/N/register/register.php">Register</a>
          </p>
          <p>
            View your profile?
            <a href="http://localhost/register/read.php">VIEW</a>
          </p>
        </div>
      </form>
    </div>
  </body>
</html>
