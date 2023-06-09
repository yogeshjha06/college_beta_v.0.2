
<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="login_style.css" type="text/css" rel="stylesheet"/>
  <script type="text/javascript" src="jquery.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
<!-- javascript ajax to authonticate data -->

<!-- done authontication -->

    <title>Student</title>
    <link rel="icon" type="image/x-icon" href="assets/favio.png">
  </head>
  <body>
    <!-- login container form -->
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="./stu_log_backend.php" method="POST" class="sign-in-form">
            <h2 class="title">Student Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="uname" id="uname" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" id="password" placeholder="Password" />
            </div>
            <input type="submit" name="login" value="Login" class="btn solid" />
            <a id="sign-up-btn1" style="text-decoration:none; color:black;cursor: pointer;" >Contact us.</a>
          </form>



        <!-- Forget password container form -->


          <form action="./stu_log_backend.php" method="POST" class="sign-up-form">
            <h2 class="title">Forget Credentials </h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="reg_id" placeholder="Regestration ID" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <input type="submit" name="signup" class="btn" value="Find Me" />
            <a style="text-decoration: none;" href="./student_otp.php">Forget Password ?</a>
           
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Missing Something ?</h3>
            <p>
              Forget Something! Don't worry we will help you find out your credentials and hope you remember this time.
            </p>
            <button class="btn transparent" id="sign-up-btn">Find Me</button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            If you already joined us, please click 
            the button below to Login to your profile account.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
