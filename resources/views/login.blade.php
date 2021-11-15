<<<<<<< HEAD
<html lang="en">

<head>

  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Flat Login</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   
    <link rel="stylesheet" type="text/css" href="login.css">
  

  <!--[if lt IE 9]>
		<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<link rel="stylesheet" type="text/css" href="login.css">
<body>

  <div class="container">
    <div class="flat-form">
      <ul class="tabs">
        <li>
          <a href="#login" class="active">Login</a>
        </li>
        <li>
          <a href="#register">Register</a>
        </li>
        <li>
          <a href="#reset">Reset Password</a>
        </li>
      </ul>
      <div id="login" class="form-action show">
        <h1>Login on webapp</h1>
        <p>
          Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
          Maecenas sed diam eget risus varius bladit sit amet non
        </p>
        <form>
          <ul>
            <li>
              <input type="text" placeholder="Username" />
            </li>
            <li>
              <input type="password" placeholder="Password" />
            </li>
            <li>
              <input type="submit" value="Login" class="button" />
            </li>
          </ul>
        </form>
      </div>
      <!--/#login.form-action-->
      <div id="register" class="form-action hide">
        <h1>Register</h1>
        <p>
          You should totally sign up for our super awesome service.
          It's what all the cool kids are doing nowadays.
        </p>
        <form>
          <ul>
            <li>
              <input type="text" placeholder="Username" />
            </li>
            <li>
              <input type="password" placeholder="Password" />
            </li>
            <li>
              <input type="submit" value="Sign Up" class="button" />
            </li>
          </ul>
        </form>
      </div>
      <!--/#register.form-action-->
      <div id="reset" class="form-action hide">
        <h1>Reset Password</h1>
        <p>
          To reset your password enter your email and your birthday
          and we'll send you a link to reset your password.
        </p>
        <form>
          <ul>
            <li>
              <input type="text" placeholder="Email" />
            </li>
            <li>
              <input type="text" placeholder="Birthday" />
            </li>
            <li>
              <input type="submit" value="Send" class="button" />
            </li>
          </ul>
        </form>
      </div>
      <!--/#register.form-action-->
    </div>
  </div>
  <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</body>

</html>
=======
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-primary" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
>>>>>>> 8151253feec31e560b6bfac9d1630791f55a9d48
