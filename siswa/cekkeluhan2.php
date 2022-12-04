<div class="row">
    <div class="col-lg-12" style="padding:0;">
        <!-- <h1 class="page-header">
            Halaman
            <small>Guru</small>
        </h1> -->
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i> keluhan
            </li>
        </ol>
    </div>
</div>


<!-- ISI -->
<div class="row" >
    <div class="col-lg-12">
        <h3 class="page-header" style="margin:0;">
            Keluhan Siswa
        </h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php       
                    $id = $_GET['id'];
                    
                    $berkas = mysqli_query($dtb, "SELECT * FROM tb_konsultasi WHERE id_konsultasi='$id'");
                    $no=1;
                    $siswa=mysqli_query($dtb, "SELECT tb_pengguna.username,
                                                      tb_konsultasi.tanggal,
                                                      tb_konsultasi.solusi,
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
        
                            <?php
                                while($row3=mysqli_fetch_array($berkas)){
                            ?>

                            <div class="form-group">
                                <label for="">Judul Permasalahan</label>
                                <input class="form-control" value="<?php echo $row3['judul_keluhan'] ?>" readonly="readonly">
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input class="form-control" value="<?php echo $row3['tanggal'] ?>" readonly="readonly">
                            </div>

                            <div class="form-group">
                                <label for="">Permasalahan</label>
                            </div>

                            <div class="form-group">
                                <textarea readonly style="border-radius: 10px; width:100%;" cols="40" rows="5"><?php echo $row3['keluhan']; ?></textarea>
                            </div>

                            <div class="fprm-group">
                                <label for="">Solusi Permasalahan</label>
                            </div>

                            <div class="form-group">
                                <textarea readonly style="border-radius: 10px; width:100%;" cols="40" rows="5"><?php echo $row3['solusi']; ?></textarea>
                            </div>
                            <?php
                                }
                            ?>
            </div>
        </div>
    </div>
</div>