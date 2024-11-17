<?php
// session

session_start();

// $_SESSION['username'] = 'ookapratama';

// echo $_SESSION['username'];

// unset($_SESSION['username']);

// echo $_SESSION['username'];

if (isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($password != 'admin123'){
        echo "
        <script>('Password anda salah!'); 
        window.location.href = 'Login.php';
        </script>";
    }


        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        // header('Location: index.php');

        echo "<script>('Anda salah!'); 
        window.location.href = 'index.php';
        </script>";
    
}

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


  <div class="container-sm">
    <h1 class="text-center at-5 text-uppercase">Login</h1>


   

<div class="card mx-auto" style="width: 30rem;">
  <img src="Login.png" class="card-img-top" alt="..."  >
  <div class="card-body">

  <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

   
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button name="submit" type="submit" class="btn btn-primary">Login</button>

</form>

  </div>
</div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>