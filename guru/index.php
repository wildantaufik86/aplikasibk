<?php
    session_start();
    include "koneksi.php";

    if(@$_SESSION['guru']){
        $id_login=@$_SESSION['guru'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Guru</title>

    <link rel="stylesheet" type="text/css"  href="../css/smart-forms.css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

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

        #navbar, #sidebar {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        }

        @media only screen and (max-width: 600px) {
            .navbar-right {
                display: none;
            }
        }

    </style>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" id="navbar" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../guru/index.php">AKUN GURU</a>
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
               
                <!-- <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp; Guru <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?page=lihatprofile2"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li> -->
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" id="sidebar">
                    <li>
                        <a href="../guru/index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="?page=lihatprofile2"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#siswa"><i class="fa fa-fw fa-child"></i> Siswa <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="siswa" class="collapse">
                            <li>
                                <a href="?page=lihatsiswa">Lihat Data Siswa</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#guru"><i class="fa fa-fw fa-thumbs-up"></i> Guru <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="guru" class="collapse">
                            <li>
                                <a href="?page=lihatprofile">Lihat Data Guru</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#konseling"><i class="fa fa-fw fa-bookmark"></i> Konseling <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="konseling" class="collapse">
                            <li>
                                <a href="?page=keluhansiswa"><i class="fa fa-fw fa-spinner"></i> Lihat Keluhan Siswa</a>
                            </li>
                            <!-- <li>
                                <a href="?page=inputjadwalkonseling"><i class="fa fa-fw fa-book"></i> Input Jadwal Konseling</a>
                            </li>
                            <li>
                                <a href="?page=jadwalkonseling"><i class="fa fa-fw fa-calendar"></i> Lihat Jadwal Konseling</a>
                            </li> -->
                            
                        </ul>
                    </li>
                    <li>
                        <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="padding : 0;">

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
                include"rekap.php";     
                } else if (@$_GET['page']=='lihatprofile'){
                include"lihatprofile.php";                
                } else if (@$_GET['page']=='editprofile'){
                include"guruedit.php";
                } else if (@$_GET['page']=='lihatsiswa'){
                include"lihatsiswa.php";
                } else if (@$_GET['page']=='editsiswa'){
                include"editsiswa.php";
                } else if (@$_GET['page']=='lihatprofile2'){
                include"lihatprofile2.php";
                } else if (@$_GET['page']=='informasibk'){
                include"informasibk.php";
                } else if (@$_GET['page']=='keluhansiswa'){
                include"keluhansiswa.php";
                } else if (@$_GET['page']=='jadwalkonseling'){
                include"jadwalkonseling.php";
                } else if(@$_GET['page']=='lihatprofile3'){
                include"lihatprofile3.php";
                } else if(@$_GET['page']=='cekkeluhan'){
                include"cekkeluhan.php";
                } else if(@$_GET['page']=='inputjadwalkonseling'){
                include"inputjadwal.php";
                } else if(@$_GET['page']=='inputjadwalkonseling2'){
                include"inputjadwal2.php";
                } else if(@$_GET['page']=='inputjadwalkonseling2'){
                include"jadwalkonseling2.php";
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->

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