<?php
@session_start();
include "koneksi.php";

if(isset($_POST['submit'])){
    if(registrasi($_POST)){
        header("location: ./login.php");
        exit;
    }
}

if(isset($_POST['login'])){
    header("location: ./login.php");
    exit;
}

?>
<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Bootstrap Admin Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/freelancer.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-12 text-center">
            </div>
            <div class="col-lg-12 text-center">
                <div class="col-lg-12">
                    <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="page-header">
                                <h1>KONSELING BK</h1>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 text-center">
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="col-lg-12">
                                        <h1 class="page-header">
                                            REGISTRASI AKUN
                                        </h1>
                                    </div>

                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                    <input class="form-control" type="number" name="username" placeholder="username">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-center">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="nis" placeholder="NIS">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                   <select class="form-control" name="kelas">
                                                       <option value="">PILIH KELAS</option>
                                                       <option value="12">VII - SMP</option>
                                                       <option value="13">VIII - SMP</option>
                                                       <option value="14">IX - SMP</option>
                                                       <option value="15">X - SMA</option>
                                                       <option value="16">XI - SMA</option>
                                                       <option value="17">XII - SMA</option>
                                                   </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="namasiswa" placeholder="Nama lengkap">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                <select class="form-control" name="kelamin">
                                                    <option value="">Jenis Kelamin</option>
                                                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                                                    <option value="PEREMPUAN">PEREMPUAN</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="tempatlahir" placeholder="Tempat lahir">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal lahir">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                <select class="form-control" name="agama">
                                                    <option value="">Agama</option>
                                                    <option value="ISLAM">ISLAM</option>
                                                    <option value="KRISTEN">KRISTEN</option>
                                                    <option value="KATOLIK">KATOLIK</option>
                                                    <option value="HINDU">HINDU</option>
                                                    <option value="BUDDHA">BUDDHA</option>
                                                    <option value="KONGHUCU">KONGHUCU</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="namaortu" placeholder="Nama Ortu">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="nohp" placeholder="No HP">
                                                </div>
                                            </div>
                                        </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-8 text-right">
                                        
                                    </div>
                                    <div class="col-lg-8 text-right">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Registrasi">
                                        <input type="submit" name="login" class="btn btn-warning" value="Log in disini">
                                    </div>
                                    </form>

                                    <?php 
                                        if(@$_POST['submit'])
                                    ?>

                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <div class="col-lg-4 text-left">
                                        </div>
                                        <div class="col-lg-4 text-left">
                                            <ul class="nav navbar-nav navbar-left">
                                                <li>
                                                    <a href="index.php">BACK</a>
                                                </li>
                                            </ul>
                                            <br>
                                        </div>
                                    </div>
                                </div>
</body>
                                        
                            