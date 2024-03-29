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
            Report Profile Siswa
        </h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="tab-content table-responsive">
            <?php
                    $siswa=mysqli_query($dtb, "SELECT tb_pengguna.username, 
                                                      tb_siswa.nama_siswa,
                                                      tb_siswa.id_siswa,
                                                      tb_siswa.nis,
                                                      tb_siswa.jenis_kelamin,
                                                      tb_siswa.tempat_lahir,
                                                      tb_siswa.tanggal_lahir,
                                                      tb_siswa.alamat,
                                                      tb_siswa.agama,
                                                      tb_siswa.nama_ortu,
                                                      tb_siswa.no_ortu

                                    FROM tb_pengguna, tb_siswa
                                    WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_siswa.nis");
                    $jumlah=mysqli_num_rows($siswa);
            ?>
            <div class="tab-pane active" id="">
                <br>
                <div class="table-responsive">
                     <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>J Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Nama Orang Tua</th>
                                <th>No Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row3=mysqli_fetch_array($siswa)){
                            ?>
                            <tr>
                                <td><?php echo $row3['nis']; ?></td>
                                <td><?php echo $row3['nama_siswa']; ?></td>
                                <td><?php echo $row3['jenis_kelamin']; ?></td>
                                <td><?php echo $row3['tanggal_lahir']; ?></td>
                                <td><?php echo $row3['alamat']; ?></td>
                                <td><?php echo $row3['agama']; ?></td>
                                <td><?php echo $row3['nama_ortu']; ?></td>
                                <td><?php echo $row3['no_ortu']; ?></td>
                                <td><i><a href="?page=editprofile&id=<?php echo $row3['id_siswa'];?>">Edit</a></i></td>
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