<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Akademik | {{$title}}</title>
</head>

<body>

  <div class="container">
    <!-- @if(session()->has('LoginError'))
    <div class="alert-alert-danger alert-dismissible fade show" role="alert">
      {{session('LoginError')}}
      <button type="button" class="button-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif -->
    @foreach($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
    <form action="/login" method="POST" class="login-email">
      @csrf
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
      <div class="input-group">
        <input type="email" placeholder="Email" name="email" value="" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" name="password" value="" required>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Login</button>
      </div>
      <p class="login-register-text">Don't have an account? <a href="/register">Register Here</a></p>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>