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
        <form action="" method="POST">
        <?php       
                    $id = $_GET['id'];
                    $berkas = mysqli_query($dtb, "SELECT * FROM tb_konsultasi WHERE id_konsultasi='$id' ");
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
                    
                            <?php
                                while($row3=mysqli_fetch_array($berkas)){
                            ?>

                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" value="<?php echo $row3['nama_siswa']; ?>" readonly="readonly">
                            </div>

                            <div class="form-group">
                                <label>Tanggal</label>
                                <input class="form-control" value="<?php echo $row3['tanggal']; ?>" readonly="readonly">
                            </div>

                            <div class="form-group">
                                <label>Input Solusi</label>
                            </div>

                            <div class="form-group">
                                <textarea style="width: 100%; border-radius:10px;" name="solusi" id="" cols="40" rows="5 "></textarea>
                            </div>
                            
                            <div class="form-group">
                                <input class="btn btn-danger" type="submit" name="kirim" value="KIRIM SOLUSI" readonly="readonly">
                            </div>
                            <?php
                                }
                            ?>
            </form>

            <?php 
                if(@$_POST['kirim']){
                    $solusi=strtoupper($_POST['solusi']);

                    $query=mysqli_query($dtb, "UPDATE tb_konsultasi SET solusi='$solusi' WHERE id_konsultasi='$id'");

                    if($query){
                        ?>
                            <script type="text/javascript">
                            alert("Edit Data Sukses !")
                            window.location="?page=keluhansiswa";
                            </script>
                        <?php
                        }else{
                        ?>
                            <script type="text/javascript">
                            alert("Edit Data Gagal !")
                            window.location="?page=keluhansiswa";
                            </script>
                        <?php
                        } 
                }
            ?>
        </div>
    </div>
</div>