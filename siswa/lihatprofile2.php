<div class="row">
    <div class="col-lg-12" style="padding: 0;">
        <!-- <h1 class="page-header">
            Halaman
            <small>Siswa</small>
        </h1> -->
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-user"></i> konsultasi
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin: 0;">
            Report Profile Siswa
        </h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
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
                        <tbody>
                            <?php
                                while($row3=mysqli_fetch_array($siswa)){
                            ?>

                            <div class="form-group">
                                <label>NIS</label>
                                <input class="form-control" value="<?php echo $row3['nis']; ?>" readonly="readonly">
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" value="<?php echo $row3['nis']; ?>" readonly="readonly">
                            </div>

                            <form action="?page=konsultasi&id=<?php echo $row3['id_siswa'];?>" method="Post">
                                <div class="form-group">
                                <input style="margin-bottom: 50px; margin-top:20px; width:100%;" class="btn btn-primary" type="submit" value="INPUT KELUHAN" name="Edit Profile">
                            </form> 
                            <?php
                                }
                            ?>
        </div>
    </div>
</div>