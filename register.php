<?php

include_once "koneksi.php";

$kelas = show("SELECT * FROM tb_kelas");

if(isset($_POST['register'])) {
  $kosong = false;
  foreach($_POST as $test) {
    if($test === "") {
      $kosong = true;
    }
  }

  if(!$kosong) {
    var_dump('GGBRO');
    registrasi($_POST);
    header("location: ./login.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
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
      
      <?php if(isset($_POST['register'])) : ?>
        <?php if($kosong) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data tidak boleh Kosong</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif ; ?>
      <?php endif ; ?>

      <div class="card p-3 shadow">
        <a href="index.php">
          <i class="bx bx-x fs-2 text-dark"></i>
        </a>
        <div class="d-flex flex-column align-items-center bg-white">
        <img src="img/logo/home-80.png" alt="" class="" />
          <h2 class="fw-bold">Register</h2>

          <form method="POST" class="my-2 container-fluid">
            <!-- <div class="form-floating my-3 border border-dark rounded">
              <input
                name="username"
                type="name"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">username</label>
            </div> -->

            <div class="form-floating my-3 border border-dark rounded">
              <input name="nis" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" />
              <label for="floatingInput">NIS</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <select name="kelas" class="form-select" aria-label="Default select example">
                <?php foreach ($kelas as $kls) : ?>
                  <?php var_dump($kls) ?>
                  <option value="<?=$kls["id_kelas"]?>"><?=$kls['kelas']?></option>
                <?php endforeach ; ?>

              </select>
              <label for="floatingInput">kelas</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <input
                name="namasiswa"
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Nama Lengkap</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <select name="kelamin" class="form-select" aria-label="Default select example">
                <option value="LAKI-LAKI">LAKI-LAKI</option>
                <option value="PEREMPUAN">PEREMPUAN</option>
              </select>
              <label for="floatingInput">Jenis Kelamin</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <input
                name="tempatlahir"
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Tempat Lahir</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <input name="tanggallahir" type="date" class="form-control" id="floatingInput" />
              <label for="floatingInput">Tanggal Lahir</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <select name="agama" class="form-select" aria-label="Default select example">
                <option value="ISLAM">ISLAM</option>
                <option value="KRISTEN">KRISTEN</option>
                <option value="KATOLIK">KATOLIK</option>
                <option value="HINDU">HINDU</option>
                <option value="BUDDHA">BUDDHA</option>
                <option value="KONGHUCU">KONGHUCU</option>
              </select>
              <label for="floatingInput">Agama</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <input
                name="alamat"
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Alamat</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <input
                name="namaortu"
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Nama Ortu</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <input
                name="nohp"
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Nomor Hp e.g 082...</label>
            </div>

            <div class="form-floating my-3 border border-dark rounded">
              <input
                name="password"
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
              />
              <label for="floatingPassword">Password</label>
            </div>
            <input name="register" type="submit" value="Register" class="btn btn-primary form-floating container-fluid"></input>
          </form>

          <p class="text-secondary">or</p>
          <p class="text-center">Have an acoount <a href="login.php">Log in</a> here</p>
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
