<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RUMAH BK</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

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

    <style>
        .logo {
            display : flex;
            align-items : center ;
        }

        #about {
            display : flex !important;
            align-items : center !important;
            justify-content : center !important;
        }

        .portfolio-item {
            flex-direction : column;
            display : flex !important;
            align-items : center !important;
            justify-content : center !important;
        }

        @media only screen and (max-width: 600px) {
        .img-responsive {
            width : 120px ;
        }

        h2 {
            font-size : 24px !important;
        }

        .deskripsi {
            text-align : center;
            margin : 20px 0;
        }

        header{
            display : flex;
            align-items : center;
        }

        .logo {
            padding : 0 10px;
        }

        p {
            font-size : 15px;
        }
      }


    </style>

</head>


<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <img src="img/logo/home-80.png" alt="" style="width : 40px;">
                    <a class="navbar-brand" href="#page-top">RUMAH BK</a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Deskripsi Sistem</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Layanan Sistem</a>
                    </li>
                    <li>
                        <a href="login.php">Log In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo/home-240.png" alt="">
                    <div class="intro-text">
                        <span class="name">RUMAH Bimbingan Konseling</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" style="height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>DESKRIPSI SISTEM</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row" style="margin: 20px 0;">
                <div class="col-lg-6">
                    <p class="deskripsi">Aplikasi ini dibuat untuk memudahkan kinerja dari guru guru BK atau bimbingan koseling untuk mengatur berkas dan kasus yang terjadi di sekolah </p>
                </div>
                <div class="col-lg-6">
                    <p class="deskripsi">Program ini mengandung tiga layanan atau fungsi utama yaitu Akses Profile, Akses absen, dan jadwal kelas. Selain itu, ada 4 pihak yang dapat menjalankan sistem ini yang terdiri dari pihak admin, pihak guru, pihak tata usaha dan siswa / murid</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section class="success" id="portfolio" style="height: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Layanan Sistem</h2>
                    <hr class="star-light"><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <!-- <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal" style="margin-left:60px;">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        
                    </a> -->
                    <img src="img/portfolio/jadwal.png" class="img-responsive" alt="">
                    <h3>Konsultasi</h3>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <!-- <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal" style="margin-left:60px;">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        
                    </a> -->
                    <img src="img/portfolio/absensi.png" class="img-responsive" alt="">
                        <h3>Akses Profile</h3>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <!-- <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal" style="margin-left:60px;">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        
                    </a> -->
                    <img src="img/portfolio/rekap.png" class="img-responsive" alt="">
                    <h3 >Akses Berkas</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Teknologi Informasi USU</p>
                        <p>Jalan Dr. T. Mansur No.9, Padang Bulan, Kec. Medan Baru, Kota Medan </p>
                        <p>Sumatera Utara 20222</p>
                        <p>Telp. (061) 8211633</p>
                        <p>Email: wildantaufik86@gmail.com</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://usu.ac.id/" class="btn-social btn-outline"><i class="fa fa-fw fa-university"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Ekstra</h3>
                        <p>This app is Made By <br> <a href="#">Wildan Taufik Wibowo Nasution <br> & <br> Dzaky Dzakwan</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Sistem Informasi Absensi 2015 | Repost by <a href="https://stokcoding.com/" title="StokCoding.com" target="_blank">StokCoding.com</a>
                    </div>
                </div>
            </div>
        </div> -->
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
</body>

</html>