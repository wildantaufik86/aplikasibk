<?php
    @session_start();
    include "koneksi.php";

    if(@$_SESSION['siswa']){
        $id_login=@$_SESSION['siswa'];
?>

<div class="row">
    <div class="col-lg-12" style="margin-top:+70px;">
        <h1 class="page-header">
            Halaman
            <small>Absensi</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-send"></i> Absensi
            </li>
        </ol>
    </div>
</div>



<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Data Absensi
        </h3> 

        <form action="?page=absensi2" method="post">
            <div class="form-group">
                <label>Tanggal</label>
                <input class="form-control" value=" <?php echo $tanggal; ?>" readonly="readonly">
            </div>
            
            <div class="form-group">
                <label>Hari</label>
                <input class="form-control" value="<?php echo tanggal("D"); ?>" readonly="readonly">
            </div>
            <?php
                $view=mysqli_query($dtb, "SELECT 
                                        tb_pengguna.username, 
                                        tb_guru.nama_guru
                                    FROM 
                                        tb_pengguna, 
                                        tb_guru
                                    WHERE 
                                        tb_pengguna.id_pengguna='$id_login' 
                                        AND tb_pengguna.username=tb_guru.nip");
                $row=mysqli_fetch_array($view);
            ?>
            <div class="form-group">
                <label>Nama Guru</label>
                <input class="form-control" value="<?php echo $row['nama_guru']; ?>" readonly="readonly">
            </div>

    </div>

    <div class="col-lg-7">
        <h3 class="page-header">
            Pilih Jadwal Absensi
        </h3>
        <div class="table-respopnsive">
            <?php
                $jam=date("H:i");
                $hari=tanggal("D");
                $tanggal0=date('Y-m-d');
                $view1=mysqli_query($dtb, "SELECT 
                                        tb_pengguna.username, 
                                        tb_mengajar.id_mengajar, 
                                        tb_guru.kode_guru, 
                                        tb_jadwal.id_jadwal,
                                        tb_jadwal.id_kelas,  
                                        tb_jadwal.hari, 
                                        tb_jadwal.jam_mulai, 
                                        tb_jadwal.jam_berakhir, 
                                        tb_mapel.mapel,
                                        tb_kelas.kelas
                                    FROM 
                                        tb_pengguna, 
                                        tb_mengajar, 
                                        tb_guru, 
                                        tb_jadwal, 
                                        tb_mapel,
                                        tb_kelas 
                                    WHERE 
                                        tb_pengguna.id_pengguna='$id_login' 
                                        AND tb_pengguna.username=tb_guru.nip 
                                        AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                        AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar 
                                        AND tb_jadwal.hari='$hari' 
                                        AND tb_mengajar.kode_mapel=tb_mapel.kode_mapel
                                        AND tb_jadwal.id_kelas=tb_kelas.id_kelas
                                        
                                    ORDER BY 
                                        tb_jadwal.jam_mulai ASC");
                
            if(mysqli_num_rows($view1)>0){  
            ?>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Pilih</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row1=mysqli_fetch_array($view1)){
                    ?>
                    <tr>
                        <td>
                            <?php
                                $ada=mysqli_query($dtb, "SELECT id_jadwal, tanggal FROM tb_absensi WHERE tanggal='$tanggal0' AND id_jadwal='$row1[id_jadwal]'");
                                if(mysqli_num_rows($ada)>0){
                                    ?><i class="fa fa-check"></i><?php
                                } else {
                                    ?><input name="id_jadwal" type="radio" value="<?php echo $row1['id_jadwal']; ?>"><?php
                                }
                            ?>
                            
                        </td>
                        <td><?php echo $row1['kelas']; ?></td>
                        <td><?php echo $row1['mapel'] ?></td>
                        <td><?php echo $row1['jam_mulai']; ?> - <?php echo $row1['jam_berakhir']; ?></td>
                    </tr>
                    <?php
                        }
                	?>
                </tbody>
            </table>
        </div>
        <input type="submit" name="lanjut" class="btn btn-default" value="Ke Proses Absensi"/> 
        </form>
        <?php
    	} else {
    		echo "Tidak ada jadwal hari ini<br><br>Silahkan lihat <a href='http://localhost/KonselingBK/som/guru/index.php?page=lihatjadwal'>jadwal</a>";
    	}
        ?>
    </div>
</div>

<?php
    }
?>