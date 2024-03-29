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
            Login
          </h2>
        </div>
        <form class="login_form" method="GET" action="{{  route('products.index')  }}">
          @csrf
          @method("GET")
          <div class="form-floating my-2">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating my-2">
            <input type="password" class="form-control" id="floatingInput" placeholder="********">
            <label for="floatingInput">Password</label>
          </div>
          <div class = "ms-1">
            <label for="remember">
              <input type="checkbox" name="remember" id="remember"> Remember Me
            </label>
          </div>
          <p class = "ms-1">No Account?  <a href="/register" class="link-primary">Register Now!</a></p>
          <div class="btn-container d-flex justify-content-center align-self-center">
            <button type="submit" class="btn btn-login">Login</button>
          </div>
        </form>
      </div>
  
  </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  </body>

</html>