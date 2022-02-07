<?php

include 'Usert.php';

$user = new Usert();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $user->register();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="stylec.css" rel="stylesheet">
    <link rel="stylesheet" href="Index.css">
    <link rel="stylesheet" href="styles.css">
    <title>MMG - Register</title>
</head>
<body>
<header class="p-3 bg-purple text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            </a>
            <ul id="menu" class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><img src="images/Logo.png" class="logo"</li>
                <li><a href="index.php" class="nav-link px-2 text-white hover">Home</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn nav-link px-2 text-white hover">Products</a>
                    <div class="dropdown-content">
                        <a href="gewichten.php">weights</a>
                        <a href="apparaturen.php">equipment</a>
                        <a href="supplementen.php">supplements</a>
                    </div>
                <li><a href="#workout" class="nav-link px-2 text-white hover">Workout Tips</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..."
                       aria-label="Search">
            </form>

            <div class="text-end">
                <a href="loginp.php">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                </a>
                <a href="registerpage.php">
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </a>
            </div>
        </div>
    </div>
</header>
<main class="form-signin">
    <form method="post">
        <h1 class="h3 mb-3 fw-normal">Please make an account</h1>
        <div class="form-floating">
            <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Name" required>
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                   required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password"
                   required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input name="confirm" type="password" class="form-control" id="floatingPassword"
                   placeholder="Confirm Password" required>
            <label for="floatingPassword">Confirm Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Make account</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
    </form>
</main>
<style>
    html,
    body {
        height: 100%;
    }

    body {
        align-items: center;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        margin-top: 40px;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[name="password"] {
        margin-bottom: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .form-signin input[name="confirm"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
</body>
</html>
