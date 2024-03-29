<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Test Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body class="body-login">
    <div class="container">
      <div class="login_form">
        <div class="login">
          <h2 class="text-center">
            Register
          </h2>
        </div>
        <form action="{{ route('register.store') }}" class="login_form" method="POST">
          @csrf
          @method('POST')
          <div class="form-floating my-2">
            <input type="text" class="form-control" name="name" id="name" placeholder="Blaire Kalubihon">
            <label for="name">Name</label>
          </div>
          <div class="form-floating my-2">
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
          </div>
          <div class="form-floating my-2">
            <input type="password" class="form-control" name="password" id="password" placeholder="*********">
            <label for="password">Password</label>
          </div>
          <div class="btn-container d-flex justify-content-center align-self-center">
            <button type="submit" style="cursor:pointer" class="btn btn-login">Register</button>
          </div>
        </form>
      </div>
  
  </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  </body>

</html>