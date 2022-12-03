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
    <form action="/register" method="POST" class="login-email">
      @csrf
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>

      <div><label for="Username" class="form-label">Username</label></div>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Min 5 karakter" name="username" required>
      </div>

      <div><label for="Email" class="form-label">Email</label></div>
      <div class="input-group">
        <input type="email" class="form-control" placeholder="@gmail.com" name="email" required>
      </div>

      <label for="Password" class="form-label">Password</label>
      <div class="input-group">
        <input type="password" class="form-control" placeholder="Min 8 karakter" name="password" required>
      </div>

      <div class="input-group">
        <button name="submit" class="btn">Register</button>
      </div>
      <p class="login-register-text">Have an account? <a href="/login">Login Here</a></p>
    </form>
  </div>
</body>

</html>