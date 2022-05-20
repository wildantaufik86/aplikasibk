<?php
@session_start();
@ob_start();
include "koneksi.php";

//Check_Session
if (@$_SESSION['admin']) {
    header("location:inde.php");
} else  
        if (@$_SESSION['tatausaha']) {
    header("location:tatausaha/index.php");
} else 
        if (@$_SESSION['guru']) {
    header("location:guru/index.php");
} else 
        if (@$_SESSION['siswa']) {
    header("location:./siswa/index.php");
}

if(isset($_POST['register'])){
    header("location: ./register.php");
}

//Login

if (@$_POST['login']) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  $fail = false;
  $kosong = false;
  if ($username === '' || $pass === '') {
    $kosong = true;
  } else {
    $sql=mysqli_query($dtb, "SELECT * FROM tb_pengguna WHERE username = '$username' AND pass = '$pass'");
      $data=mysqli_fetch_assoc($sql);
      $cek=mysqli_num_rows($sql);
      if ($cek >= 1) {
          if ($data['status'] == "admin") {
              $_SESSION['admin'] = $data['id_pengguna'];
              header("location: inde.php");
          } else if ($data['status'] == "tatausaha") {
              $_SESSION['tatausaha'] = $data['id_pengguna'];
              header("location: tatausaha/index.php");
          } else if ($data['status'] == "guru") {
              $_SESSION['guru'] = $data['id_pengguna'];
              header("location: guru/index.php");
          } else if ($data['status'] == "siswa") {
              $_SESSION['siswa'] = $data['id_pengguna'];
              header("location: ./siswa/index.php");
          }
        } else {
          $fail = true;
        }
      }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <!-- Custom Fonts -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link
      href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .body {
        background-color: #f2f2f2;
        font-family: "Lato";
      }

      .container {
        height: 100vh;
      }

      img {
        width: 100px;
      }

      .card,
      .alert {
        width: 30vw;
      }

      @media only screen and (max-width: 600px) {
        .body {
          font-size: 12px;
        }

        .card,
        .alert {
          width: 80vw;
        }

        img {
          width: 50px;
        }

        h2 {
          font-size: 20px;
        }

        .form-floating {
          margin: 3px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container flex-column d-flex align-items-center justify-content-center">
     
    <?php if(isset($_POST['login'])) : ?>

      <?php if($kosong) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Data tidak boleh kosong</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif ; ?>

      <?php if($fail) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Login Gagal</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif ; ?>

    <?php endif ; ?>

      <div class="card p-1 shadow">
        <a href="index.php">
          <i class="bx bx-x fs-2 text-dark"></i>
        </a>
        <div class="d-flex flex-column align-items-center bg-white">
          <img src="img/logo/home-80.png" alt="" class="" />
          <h2 class="fw-bold">Login</h2>

          <form class="my-2 container-fluid" method="POST">
            <div class="form-floating my-3 border border-dark rounded">
              <input name="username" type="number" class="form-control" id="floatingInput" placeholder="name@example.com" />
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating my-3 border border-dark rounded">
              <input
                name="pass"
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
              />
              <label for="floatingPassword">Password</label>
            </div>
            <input name="login" type="submit" class="btn btn-primary form-floating container-fluid" value="Login"></input>
          </form>

          <p class="text-secondary my-0">or</p>
          <p class="text-center">Doesnt have account ? <a href="register.php">Register</a> here</p>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
