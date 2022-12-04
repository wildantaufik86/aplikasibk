<?php
    @session_start();
    include "koneksi.php";

    if(@$_SESSION['guru']){
        $id_login=@$_SESSION['guru'];
?>

<div class="row">
    <div class="col-lg-12" style="padding:0;">
        <!-- <h1 class="page-header">
            Halaman
            <small>Lihat Jadwal</small>
        </h1> -->
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="../guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-bell"></i> Lihat Jadwal
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row" style="margin-top:30px;">
    <div class="col-lg-5">
        <h3 class="page-header" style="margin-top:0px;">
            Data Guru
        </h3>
        <?php
            $viow=mysqli_query($dtb, "SELECT tb_pengguna.username, tb_guru.nama_guru
                                    FROM tb_pengguna, tb_guru
                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip");
            $rew=mysqli_fetch_array($viow);
        ?>
        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" value=" <?php echo $rew['nama_guru']; ?>" readonly="readonly">
        </div><br>

        <?php
            $view=mysqli_query($dtb, "SELECT tb_pengguna.username, tb_mengajar.id_mengajar, tb_mengajar.kode_mapel, tb_guru.kode_guru, tb_mapel.mapel
                                    FROM tb_pengguna, tb_mengajar, tb_guru, tb_mapel 
                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                    AND tb_mengajar.kode_mapel=tb_mapel.kode_mapel");
            $hitung=mysqli_num_rows($view);
        ?>
        <label>Jumlah Mata Pelajaran : <?php echo $hitung; ?></label><br>
        <?php
            while($row=mysqli_fetch_array($view)){
        ?>
        <div class="form-group">
            <label>Mata Pelajaran</label>
            <input class="form-control" value=" <?php echo $row['mapel']; ?>" readonly="readonly">
        </div>

        <div class="form-group">
            <label>Kode Mapel</label>
            <input class="form-control" value=" <?php echo $row['kode_mapel']; ?>" readonly="readonly">
        </div><br>
        <?php
            }
        ?>
    </div>


    
    <div class="col-lg-7" style="border-left: 1px solid #ccc;">
        <h3 class="page-header" style="margin-top:0px;">
            Jadwal Mengajar
        </h3>
        <div class="table-responsive">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        SENIN
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view1=mysqli_query($dtb, "SELECT tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    FROM tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Senin'
                                                    ORDER BY jam_mulai ASC");
                                $no=1;
                                while($raw1=mysqli_fetch_array($view1)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw1['kelas']; ?></td>
                                <td><?php echo $raw1['kode_mapel']; ?></td>
                                <td><?php echo $raw1['jam_mulai']; ?> - <?php echo $raw1['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        SELASA
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view2=mysqli_query($dtb, "SELECT tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    FROM tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Selasa'
                                                    ORDER BY jam_mulai ASC");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><?php echo $raw2['kode_mapel']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        RABU
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view3=mysqli_query($dtb, "SELECT tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    FROM tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Rabu'
                                                    ORDER BY jam_mulai ASC");
                                $no=1;
                                while($raw3=mysqli_fetch_array($view3)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw3['kelas']; ?></td>
                                <td><?php echo $raw3['kode_mapel']; ?></td>
                                <td><?php echo $raw3['jam_mulai']; ?> - <?php echo $raw3['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        KAMIS
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view4=mysqli_query($dtb, "SELECT tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    FROM tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Kamis'
                                                    ORDER BY jam_mulai ASC");
                                $no=1;
                                while($raw4=mysqli_fetch_array($view4)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw4['kelas']; ?></td>
                                <td><?php echo $raw4['kode_mapel']; ?></td>
                                <td><?php echo $raw4['jam_mulai']; ?> - <?php echo $raw4['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        JUM'AT
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view5=mysqli_query($dtb, "SELECT tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    FROM tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Jumat'
                                                    ORDER BY jam_mulai ASC");
                                $no=1;
                                while($raw5=mysqli_fetch_array($view5)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw5['kelas']; ?></td>
                                <td><?php echo $raw5['kode_mapel']; ?></td>
                                <td><?php echo $raw5['jam_mulai']; ?> - <?php echo $raw5['jam_berakhir'] ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        SABTU
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>KM</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view6=mysqli_query($dtb, "SELECT tb_pengguna.username, tb_mengajar.id_mengajar, tb_guru.kode_guru, 
                                                    tb_jadwal.id_mengajar, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_berakhir, tb_jadwal.id_kelas, 
                                                    tb_mengajar.kode_mapel, tb_kelas.kelas
                                                    FROM tb_pengguna, tb_mengajar, tb_guru, tb_jadwal, tb_kelas
                                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip AND tb_guru.kode_guru=tb_mengajar.kode_guru 
                                                    AND tb_mengajar.id_mengajar=tb_jadwal.id_mengajar AND tb_jadwal.id_kelas=tb_kelas.id_kelas AND tb_jadwal.hari='Sabtu'
                                                    ORDER BY jam_mulai ASC");
                                $no=1;
                                while($raw6=mysqli_fetch_array($view6)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw6['kelas']; ?></td>
                                <td><?php echo $raw6['kode_mapel']; ?></td>
                                <td><?php echo $raw6['jam_mulai']; ?> - <?php echo $raw6['jam_berakhir'] ?></td>
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
</div>

<?php
    }
?>