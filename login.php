<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create Account</h4>
        <p class="text-center">Get Started with your free account</p>
        <p>
          <a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>
            Login via Gmail</a>
            <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i>
              Login via facebook</a>
        </p>
        <p class="divider-text">
          <span class="bg-light">OR</span>
        </p>
        <form action="process.php" method="POST">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa user"></i></span>
            </div>
            <input name="username" class="form-control" placeholder="Full name" typ="text" required>
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class ="fa fa-envelope"></i></span>
            </div>
            <input name="email" class="form-control" placeholder="Email address" type="email" required>
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
            <input name="mobile" class="form-control" placeholder="Phone number" type="number" required>
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>
            <input class="form-control" placeholder="Create password" type="password" name="password" value"" required>
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>
            <input class="form-control" placeholder="Repeat password" type="password" name="cpassword" value"" required>
          </div>

          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
          </div>
          <p class="text-center">Have an account?<a href="login.php">Log In</a></p>
        </form>
      </article>
      </div>
     </div>
    </div>
   </div>
 </body>
</html>
