<!doctype html>
<html lang="en">
  <head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="\bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  </head>

  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Login Page</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="wrap">
              <div class="img" style="background-image: url(https://laravel-package-ocean.com/laravel-package-ocean-opengraph.webp);"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Sign In</h3>
                  </div>
                  <div class="w-100">
                  <p class="social-media d-flex justify-content-end">
    <!-- Facebook Icon -->
    <a href="#" class="social-icon d-flex align-items-center justify-content-center">
        <img src="{{ asset('images/icon/facebook-app-symbol.png') }}" alt="Facebook" class="social-icon-img" style="height:20px; width:20px;">
    </a>
    <!-- Twitter Icon -->
    <a href="#" class="social-icon d-flex align-items-center justify-content-center">
        <img src="{{ asset('images/icon/twitter.png') }}" alt="Twitter" class="social-icon-img" style="height:20px; width:20px;">
    </a>
</p>


                  </div>
                </div>
                <form action="{{route('login')}}" class="signin-form" method="POST">
                    @csrf
                  <div class="form-group mt-3" >
                    <input type="text" class="form-control" required name="email">
                    <label class="form-control-placeholder" for="username">Username</label>
                  </div>
                  <div class="form-group">
                    <input id="password-field" type="password" class="form-control" required name="password">
                    <label class="form-control-placeholder" for="password">Password</label>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                  </div>
                  <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                      <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="w-50 text-md-right">
                      <a href="#">Forgot Password</a>
                    </div>
                  </div>
                </form>
                <p class="text-center">Not a member? <a data-toggle="tab" href="signup">Sign Up</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
