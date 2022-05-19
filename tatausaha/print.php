<?php
    include "koneksi.php";
    $tanggal1 = @$_GET['tgl1'];
    $tanggal2 = @$_GET['tgl2'];
    $kode = $_GET['kelas'];
    $qry=mysqli_query($dtb, "SELECT nis, nama_siswa FROM tb_siswa WHERE id_kelas=$kode ORDER BY nis ASC");
    $no=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>SI Absensi -- Guru</title>

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

        body{
            margin-top:0px;
        }
    </style>

</head>
<body onLoad="window.print()">
    <div class="container">

        <?php
            date_default_timezone_set('Asia/Jakarta');
            $qry1=mysqli_query($dtb, "SELECT kelas FROM tb_kelas WHERE id_kelas=$kode");
            $row1=mysqli_fetch_array($qry1);
        ?>
        <h3 style='text-align:center;'>
            Rekap Absensi<hr>
        </h3> 
        Kelas &nbsp: <?php echo ($row1['kelas']); ?>
        <br>
        Tanggal <?php echo date("d-m-Y", strtotime($tanggal1)); ?> &nbsps/d&nbsp tanggal &nbsp<?php echo date("d-m-Y", strtotime($tanggal2)); ?>
        <br><br>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Hadir</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alfa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($row=mysqli_fetch_array($qry)){
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nis']; ?></td>
                                <td style="text-align: left;"><?php echo $row['nama_siswa']; ?></td>
                                <td>
                                    <?php echo mysqli_num_rows(mysqli_query($dtb, "SELECT 
                                                                                nis,
                                                                                ket,
                                                                                tanggal
                                                                            FROM 
                                                                                tb_absensih
                                                                            WHERE 
                                                                                nis='$row[nis]' 
                                                                                AND ket='H' 
                                                                                AND tanggal BETWEEN '$tanggal1' AND '$tanggal2'")); ?>
                                </td>  
                                <td>
                                    <?php echo mysqli_num_rows(mysqli_query($dtb, "SELECT 
                                                                                nis,
                                                                                ket,
                                                                                tanggal
                                                                            FROM
                                                                                tb_absensih
                                                                            WHERE 
                                                                                nis='$row[nis]' 
                                                                                AND ket='S' 
                                                                                AND tanggal BETWEEN '$tanggal1' AND '$tanggal2'")); ?>
                                </td>
                                <td>
                                    <?php echo mysqli_num_rows(mysqli_query($dtb, "SELECT 
                                                                                nis,
                                                                                ket,
                                                                                tanggal
                                                                            FROM 
                                                                                tb_absensih
                                                                            WHERE 
                                                                                nis='$row[nis]' 
                                                                                AND ket='I' 
                                                                                AND tanggal BETWEEN '$tanggal1' AND '$tanggal2'")); ?>
                                </td>  
                                <td>
                                   <?php echo mysqli_num_rows(mysqli_query($dtb, "SELECT 
                                                                                nis,
                                                                                ket,
                                                                                tanggal
                                                                            FROM 
                                                                                tb_absensih
                                                                            WHERE 
                                                                                nis='$row[nis]' 
                                                                                AND ket='A' 
                                                                                AND tanggal BETWEEN '$tanggal1' AND '$tanggal2'")); ?>
                                </td>  
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>
    <script src="../js/responsive-tabs.js"></script>
</body>
</html>