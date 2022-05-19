<div class="row">
    <div class="col-lg-12" style="margin-top:+70px;">
        <h1 class="page-header">
            Halaman
            <small>Absensi</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="../guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-send"></i> Absensi
            </li>
        </ol>
    </div>
</div>

<!-- Script ambil data dari halaman sebelumnya -->
<?php
    if(@$_POST['lanjut']){
        $tanggal1=date('Y-m-d');
        $id_jadwal=$_POST['id_jadwal'];

    $view2=mysqli_query($dtb, "SELECT tb_jadwal.id_kelas, tb_kelas.kelas FROM tb_jadwal, tb_kelas 
                        where id_jadwal='$id_jadwal' AND tb_jadwal.id_kelas=tb_kelas.id_kelas");
    $row2=mysqli_fetch_array($view2);

    $kelas=$row2['kelas'];
    $kelasid=$row2['id_kelas'];

    $view4=mysqli_query($dtb, "SELECT 
                            tb_absensih.tanggal, 
                            tb_absensih.nis,
                            tb_siswa.id_kelas
                        FROM 
                            tb_absensih,
                            tb_siswa
                        WHERE
                            tb_absensih.nis=tb_siswa.nis
                            AND tb_absensih.tanggal='$tanggal1'
                            AND tb_siswa.id_kelas='$kelasid'");
    $cek=mysqli_num_rows($view4);
?>

<!-- ISI -->
<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header">
            Absen Kelas <?php echo $kelas; ?>
        </h3> 

        <form method="post">
            <div class="table-responsive">
                <?php
                    $view3=mysqli_query($dtb, "SELECT * FROM tb_siswa WHERE id_kelas='$kelasid'");
                    $no=0;
                ?>
                <input type="hidden" value="<?php echo $tanggal1; ?>" name="tanggal">
                <input type="hidden" value="<?php echo $id_jadwal; ?>" name="id_jadwal">
                <input type="hidden" value="<?php echo $cek; ?>" name="cek">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-2">NIS</th>
                            <th class="col-md-6">Nama</th>
                            <th class="col-md-1">Hadir</th>
                            <th class="col-md-1">Sakit</th>
                            <th class="col-md-1">Ijin</th>
                            <th class="col-md-1">Alfa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row3=mysqli_fetch_array($view3)){
                        ?>
                        <tr>
                            <td style="text-align: left;"><?php echo $row3['nis']; ?></td>
                            <td style="text-align: left;"><?php echo $row3['nama_siswa']; ?></td>
                            <td><input name="ket<?php echo $no; ?>" type="radio" value="H"></td>
                            <td><input name="ket<?php echo $no; ?>" type="radio" value="S"></td>
                            <td><input name="ket<?php echo $no; ?>" type="radio" value="I"></td>
                            <td><input name="ket<?php echo $no; ?>" type="radio" value="A"></td>
                        </tr>
                        
                        <input type="hidden" name="nis<?php echo $no; ?>" value="<?php echo $row3['nis']; ?>">

                        <?php
                            $no++;
                            }
                        ?>
                        <input type="hidden" value="<?php echo $no; ?>" name="no">
                    </tbody>
                    </table>
            </div>
            <input type="submit" name="input" class="btn btn-default" value="Selesai"/>
        </form>        
    </div>

<?php
}
?>
    
    <!-- Script Input Data -->
    <?php
        if (@$_POST['input']){
            $no=$_POST['no'];
            $tanggal=$_POST['tanggal'];
            $id_jadwal=$_POST['id_jadwal'];
            $cek=$_POST['cek'];

            for($i=0;$i<$no;$i++){
                $ket = $_POST['ket'.$i];
                $nis = $_POST['nis'.$i];

                $query=mysqli_query($dtb, "INSERT INTO tb_absensi(id_jadwal, tanggal, nis, ket) VALUES('$id_jadwal','$tanggal','$nis','$ket')");
            
            }

           

            if($cek==0){
                for($a=0;$a<$no;$a++){
                    $ket = $_POST['ket'.$a];
                    $nis = $_POST['nis'.$a];

                    $query1=mysqli_query($dtb, "INSERT INTO tb_absensih(tanggal, nis, ket) VALUES('$tanggal','$nis','$ket')");
                }
            }


            if($query){
            ?>
                <script type="text/javascript">
                alert("Input Data Sukses !")
                window.location="?page=absensi";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Input Data Gagal !")
                window.location="?page=absensi";
                </script>
            <?php
            } 
        }
    ?>

    <div class="col-lg-4">
    
    Keterangan
    </div>
</div>