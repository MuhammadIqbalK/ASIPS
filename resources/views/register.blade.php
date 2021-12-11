<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Asips</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image:url(https://wallpapercave.com/wp/wp7538243.jpg) ">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="/register" method= "post">
                                            @csrf
                                            <div class="col-md-15">
                                               
                                                <div class="form-floating mb-3">
                                                    <input class="form-control @error('name') is-invalid @enderror"  id="name" name="name" type="text" placeholder="create a username" required value={{ old('name') }} >
                                                    <label for="inputEmail">username</label>
                                                    @error('name')
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-15">
                                               
                                            <div class="form-floating mb-3">
                                                <input class="form-control @error('email') is-invalid @enderror"  id="email" name="email" type="email" placeholder="name@example.com" required value={{ old('email') }} >
                                                <label for="inputEmail">Email address</label>
                                                @error('email')
              <div class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
                                            </div>
                                        </div>
                                          
                                                <div class="col-md-15">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('password') is-invalid @enderror"  id="password" name="password" type="password" placeholder="Create a password" required />
                                                        <label for="inputPassword">Password</label>
                                                        @error('password')
              <div class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
                                                    </div>
                                                </div>
                   
                                          
                                            <div class="mt-4 mb-0">
                                              
                                                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Create Account</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login">Have an account? Go to login</a></div>
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
                            <div class="text-muted">Copyright &copy; Asips 2021</div>
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
