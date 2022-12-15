<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test | {{ $title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
  <link rel="stylesheet" href="/css/register.css">
</head>

<div class="login-card-container">
    <div class="login-card">
      <div class="login-card-header">
        <h1>Sign Up</h1>
        <div>Registration Form</div>
      </div>

      <form class="login-card-form" action="/register" method="post">

        @csrf
        <div class="form-item">
        <span class="form-item-icon material-symbols-rounded">person</span>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" id="name" required value="{{ old ('name') }}">
          @error ('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- <div class="form-floating">
          <input type="text" name="name" class="form-control  @error('name') is-invalid  @enderror" id="name" placeholder="name" required value="{{ old ('name')}}">
          <label for="name">Name</label>
          @error ('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div> -->

        <div class="form-item">
        <span class="form-item-icon material-symbols-rounded">person</span>
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Enter Username" id="username" required value="{{ old ('username') }}">
          @error ('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid  @enderror" id="username" placeholder="username" required value="{{ old ('username')}}">
          <label for="username">Username</label>
          @error ('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div> -->

        <div class="form-item">
        <span class="form-item-icon material-symbols-rounded">mail</span>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" id="email" required value="{{ old ('email') }}">
          @error ('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" id="email" placeholder="name@example.com" required value="{{ old ('email')}}">
          <label for="email">Email address</label>
          @error ('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div> -->

        <div class="form-item">
        <span class="form-item-icon material-symbols-rounded">lock</span>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" id="password" required>
          @error ('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid  @enderror" id="password" placeholder="password" required>
          <label for="password">Password</label>
          @error ('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div> -->

        <button class="mt-3 d-block text-center" type="submit"> Sign Up </button>
      </form>

      <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>

    </main>

  </div>

</div>
