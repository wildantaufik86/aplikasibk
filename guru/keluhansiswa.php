<div class="row">
    <div class="col-lg-12" style="margin-top:+70px;">
        <h1 class="page-header">
            Halaman
            <small>Siswa</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-user"></i> Siswa
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin-top:-5px;">
            Report Keluhan Siswa
        </h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="tab-content table-responsive">
        <?php       
                    // $id = $_GET['id'];
                    
                    $berkas = mysqli_query($dtb, "SELECT * FROM tb_konsultasi ");
                    $no=1;
                    $siswa=mysqli_query($dtb, "SELECT tb_pengguna.username,
                                                      tb_konsultasi.tanggal,
                                                      tb_konsultasi.nama_siswa,
                                                      tb_konsultasi.judul_keluhan,
                                                      tb_konsultasi.keluhan,
                                                      tb_konsultasi.id_konsultasi,
                                                      tb_siswa.id_siswa,
                                                      tb_siswa.nama_siswa,
                                                      tb_siswa.nis  

                                    FROM tb_pengguna, tb_siswa, tb_konsultasi
                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_siswa.nis");
                    $jumlah=mysqli_num_rows($siswa);
            ?>
            <div class="tab-pane active" id="">
                <br>
                <div class="table-responsive">
                     <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Tanggal Keluhan</th>
                                <th>Nama Siswa</th>
                                <th>NIS</th>
                                <th>Menu</th>
                                <!-- <th>Judul Keluhan</th>
                                <th>Keluhan</th> -->
                                <!-- <th>NIS</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row3=mysqli_fetch_array($berkas)){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row3['tanggal']; ?></td>
                                <td><?php echo $row3['nama_siswa']; ?></td>
                                <td><?php echo $row3['nis']; ?></td>
                                <td><b><a style="color: red;" href="?page=cekkeluhan&id=<?php echo $row3['id_konsultasi'];?>">Cek Keluhan</a></b></td>
                                <!-- <td>/td> -->
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>