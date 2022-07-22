<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Signin Template · Bootstrap v5.2</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">





  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- style CSS Bootstrap -->
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="styles/signin.css" rel="stylesheet">
</head>

<body class="text-right">
  <!-- membuat form register -->
  <main class="form-signin w-100 m-auto">
    <form action="process/register_process.php" method="post">
      <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
      <div class="mb-3">
        <label for="inputUser" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="username">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>

      <div class="mb-3">
        <label for="PasswordConfirmed" class="form-label">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" id="password">
      </div>
      <!-- membuat button sign up -->
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
      <p class="mt-5 mb-3 text-center">&copy; muhamadwildan-2022</p>
    </form>
  </main>
</body>

</html>