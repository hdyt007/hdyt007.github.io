<?php 
require '../kontrol/function.php';
session_start();

if (isset($_POST["submit"])) {
  $user = $_POST["username"];
  $pass = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$user'");
  if (mysqli_num_rows($result) == true) {
        $row = mysqli_fetch_assoc($result);
        if ($pass == $row["password"]) {
          $_SESSION["login"] = true;
          $_SESSION["username"] = $user;

          // cook
          if (isset($_POST["cook"])) {
            setcookie('login','true',time() + 60);
          }
          header("Location: ../aft_login/index.php");
        }
  }
$err = 1;
}

if (isset($err)) {
  echo "<div class='alert alert-warning' role='alert'>
          Username atau Password yang anda masukkan salah !
        </div>";
}
 ?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../boot/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Halaman Login</title>
    <style>
      .inpt{
        width: 300px;
      }
      .mobil{
        width: 500px;
        background-color: #eaeaea;
        height: 370px;
        border: green solid 1px;
        border-top: none;
        margin: auto;
        margin-top: 10%;
      }
    </style>
  </head>
  <body>
  <form action="" method="post">
<div class="mobil">
      <section id="formm" class="fromm">
      <div class="container p-5">
        <h1 class="pb-3 pt-3">Login</h1>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-info text-white" id="inputGroup-sizing-default">Username</span>
        </div>
        <input maxlength="6" type="text" autocomplete="off" class="inpt" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-info text-white" id="inputGroup-sizing-default">Password.</span>
        </div>
        <input type="Password" class="inpt" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <input type="checkbox" name="cook" id="cok">
      <label for="cok">Remember Me</label>

      <button type="submit" name="submit" class="btn btn-success float-right">Login</button>
      </div>
      </section>
    <a href="index.html">Kembali ?</a>
</div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </form>
  </body>
</html>