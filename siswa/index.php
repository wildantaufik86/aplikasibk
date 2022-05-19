<?php
    session_start();
    include "koneksi.php";

    if(@$_SESSION['siswa']){
        $id_login=@$_SESSION['siswa'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>siswa</title>

    <link rel="stylesheet" type="text/css"  href="../css/smart-forms.css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
        .table th {
           text-align: center;   
        }

        .table td {
           text-align: center;   
        }
    </style>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../guru/index.php">SB SISWA</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href = "">Hari ini :  
                        <?php
                            function tanggal($format,$nilai="now"){
                                $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
                                "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                                $id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
                                "Jan","Feb","Maret","April","Mei","Juni","Juli","Agustus","September",
                                "Oktober","November","Desember");
                                return str_replace($en,$id,date($format,strtotime($nilai)));
                            }
                            
                            date_default_timezone_set('Asia/Jakarta');
                            $tanggal=date('d-m-Y');
                            echo tanggal("D, j M Y");
     
                        ?>
                    </a>
                </li>
                <li>
                    <a> 
                    Pukul <span id="jam"></span>
                    </a>

                </li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp; SISWA <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?page=lihatprofile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../guru/index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="?page=lihatprofile"><i class="fa fa-fw fa-user"></i>Profile</a>
                    </li>
                    <li>
                        <a href="javasript:;" data-toggle="collapse" data-target="#layananbk" ><i class="fa fa-fw fa-bookmark"></i> Layanan BK <i class="fa fa-fw fa-caret-down"></i> </a>
                        <ul id="layananbk" class="collapse">
                        <li>
                            <a href="?page=informasibk"><i class="fa fa-fw fa-hand-o-left"></i> Lihat Informasi BK</a>
                        </li>
                        <li>
                            <a href="?page=lihatjadwalkonseling"><i class="fa fa-fw fa-hand-o-left"></i> Lihat Jadwal Konseling</a>
                        </li>
                        <li>
                            <a href="?page=lihatprofile2"><i class="fa fa-fw fa-hand-o-left"></i> Konsultasi BK</a>
                        </li>
                        </ul>
                    </li>
                    
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php
                if(@$_GET['page']==''){
                include "home.php";
                } else if(@$_GET['page']=='absensi'){
                include"absensi.php";     
                } else if(@$_GET['page']=='absensi2'){
                include"absensi2.php";     
                } else if(@$_GET['page']=='lihatjadwal'){
                include"./lihatjadwal.php";     
                } else if(@$_GET['page']=='rekap'){
                include"rekzap.php";     
                } else if(@$_GET['page']=='lihatprofile'){
                include"lihatprofile.php";
                } else if(@$_GET['page']=='editprofile'){
                include"editprofile.php";
                } else if(@$_GET['page']=='cekprestasi'){
                include"cekprestasi.php";
                } else if(@$_GET['page']=='kuisioner'){
                include"kuisioner.php";
                } else if(@$_GET['page']=='konsultasi'){
                include"konsultasi.php";
                } else if(@$_GET['page']=='informasibk'){
                include"cekinformasibk.php";
                } else if(@$_GET['page']=='lihatjadwalkonseling'){
                include"lihatjadwalkonseling.php";
                } else if(@$_GET['page']=='lihatprofile2'){
                include"lihatprofile2.php";
                }
                ?>

            </div>

        </div>

    </div>
    <script src="../js/jquery.js"></script>

    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-custom.min.js"></script>

    <script src="../js/jfunc.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>
    <script src="../js/responsive-tabs.js"></script>
    <script type="text/javascript">

      $( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );

    </script>
</body>
</html>

<?php
    } else {
        header("location: ../login.php");
    }
?>