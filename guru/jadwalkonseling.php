<div class="row">
    <div class="col-lg-12" style="padding:0;">
        <!-- <h1 class="page-header">
            Halaman
            <small>Siswa</small>
        </h1> -->
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
        <h3 class="page-header" style="margin:0;">
            Jadwal Konseling Siswa
        </h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="tab-content table-responsive">
        <?php       
                    // $id = $_GET['id'];
                    
                    $berkas = mysqli_query($dtb, "SELECT * FROM tb_jadwal_konseling ");
                    $no=1;
                    $siswa=mysqli_query($dtb, "SELECT tb_pengguna.username,
                                                      tb_konsultasi.tanggal,
                                                      tb_konsultasi.nama_siswa,
                                                      tb_konsultasi.judul_keluhan,
                                                      tb_konsultasi.keluhan,
                                                      tb_konsultasi.id_konsultasi,
                                                      tb_jadwal_konseling.id_jadwal_konseling,
                                                      tb_jadwal_konseling.nama_siswa,
                                                      tb_jadwal_konseling.nis,
                                                      tb_jadwal_konseling.hari,
                                                      tb_jadwal_konseling.tanggal_konseling,
                                                      tb_jadwal_konseling.jam,
                                                      tb_siswa.id_siswa,
                                                      tb_siswa.nama_siswa,
                                                      tb_siswa.nis,
                                                      tb_siswa.id_kelas  

                                    FROM tb_pengguna, tb_siswa, tb_konsultasi, tb_jadwal_konseling
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
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Nama Siswa</th>
                                <th>Aksi</th>
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
                                <td><?php echo $row3['hari']; ?></td>
                                <td><?php echo $row3['tanggal_konseling']; ?></td>
                                <td><?php echo $row3['jam']; ?> - <?php echo $row3['jam2']; ?></td>
                                <td><?php echo $row3['nama_siswa'];?></td>
                                <td><a onclick="return confirm('Yakin akan hapus data ini ?')" href="./hapusjadwal.php?id=<?php echo $row3['id_jadwal_konseling'];?>">Hapus</a></td>
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