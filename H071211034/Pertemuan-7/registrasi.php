<?php
require 'functions.php';
session_start();


// cek data berhasil di regis atau tidak k,kalau ya makan ganti display
if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    $regisberhasil = "none";
    $berhasil = "block";
    $berhasil1 = "flex";
  } else {
    echo mysqli_error($conn);
  }
}


?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Registrasi</title>
  <script src="https://kit.fontawesome.com/71f23b0b94.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
  li{
    list-style:none;
  }
</style>

<body class="text-center">
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

<form action ="" method="post" class="mx-1 mx-md-4">

  <div class="d-flex flex-row align-items-center mb-4">
    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
    <div class="form-outline flex-fill mb-0">
      <input type="text" class="form-control" name="username" id="username" placeholder="username" required />
      <label class="form-label" for="username">Username</label>
    </div>
  </div>

  <div class="d-flex flex-row align-items-center mb-4">
    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
    <div class="form-outline flex-fill mb-0">
      <input type="password"  class="form-control" name="password" id="password" placeholder="password" required />
      <label class="form-label" for="password">Password</label>
    </div>
  </div>

  <div class="d-flex flex-row align-items-center mb-4">
    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
    <div class="form-outline flex-fill mb-0">
      <input type="password" id="password2" class="form-control" name="password2" placeholder="confrim password" required  />
      <label class="form-label" for="password2">Repeat your password</label>
    </div>
  </div>

  <div class="username form-check d-flex justify-content-center mb-5">
    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
    <label class="form-check-label" for="form2Example3">
      I agree all statements in <a href="#!">Terms of service</a>
    </label>
  </div>

  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
    <button class="button btn btn-primary btn-lg" type="submit" name="register">Register</button>
  </div>
  <P>Already have account?</p>
  <a href="login.php">sign in</a>
</form>

</div>
<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

<img src="https://ps.w.org/login-customizer/assets/icon-256x256.png?rev=2455454" width="500" height="500">
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>           
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>