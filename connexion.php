<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
    </style>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="data:image/jpeg;base64,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"
     style="width:350px" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center center-content-lg-start"><br><br>
            <p class="lead fw-normal mb-0 me-3" >Sign in</p>
          </div>

          

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>  
</body>
</html>