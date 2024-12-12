<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login & Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>

  <div class="cont">
    <!-- Sign In Form -->
    <div class="form sign-in">
      <h2>Sign In</h2>
      <form action="../actions/login_action.php" method="POST" id="signInForm">
        <label>
          <span>Email Address</span>
          <input type="email" name="email" required>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" required>
        </label>
        <button class="submit" type="submit" name="action" value="login">Sign In</button>
      </form>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h1>New here?</h1>
          <p>Sign up and discover</p>
        </div>
        <div class="img-text m-in">
          <h1>One of us?</h1>
          <p>Just sign in</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>

      <!-- Sign Up Form -->
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <form action="../actions/register_action.php" method="POST" id="signUpForm">
          <label>
            <span>Name</span>
            <input type="text" name="username" required>
          </label>
          <label>
            <span>Email</span>
            <input type="email" name="email" required>
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password" required>
          </label>
          <label>
            <span>Confirm Password</span>
            <input type="password" name="confirm_password" required>
          </label>
          <button type="submit" name="action" value="signup" class="submit">Sign Up Now</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Include SweetAlert2 for notifications -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>

  <!-- script.js -->
  <script type="text/javascript" src="../JS/script.js"></script>

</body>
</html>
