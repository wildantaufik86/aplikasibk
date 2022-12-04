<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i> Guru
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin-top:-5px;">
            Profile Siswa
        </h3>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <?php   
            $guru=mysqli_query($dtb, "SELECT tb_pengguna.username, 
                                             tb_siswa.id_siswa,
                                             tb_siswa.nis,
                                             tb_siswa.nama_siswa,
                                             tb_siswa.jenis_kelamin,
                                             tb_siswa.tempat_lahir,
                                             tb_siswa.tanggal_lahir,
                                             tb_siswa.alamat,
                                             tb_siswa.agama,
                                             tb_siswa.nama_ortu,
                                             tb_siswa.no_ortu

                                        FROM tb_pengguna, tb_siswa
                                        WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_siswa.nis");  
        ?>
                <tbody>
                    <?php
                        while($raw=mysqli_fetch_array($guru)){
                    ?>
                <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control" value=" <?php echo $raw['nis']; ?>" readonly="readonly">
                </div>
            
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" value="<?php echo $raw['nama_siswa']; ?>" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Kode Guru</label>
                    <input class="form-control" value="<?php echo $raw['jenis_kelamin']; ?>" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" value="<?php echo $raw['tempat_lahir']; ?>" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" value="<?php echo $raw['tanggal_lahir']; ?>" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" value="<?php echo $raw['alamat']; ?>" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Agama</label>
                    <input class="form-control" value="<?php echo $raw['agama']; ?>" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Nama Orang Tua</label>
                    <input class="form-control" value="<?php echo $raw['nama_ortu']; ?>" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Nomor Hp / Orang Tua</label>
                    <input class="form-control" value="<?php echo $raw['no_ortu']; ?>" readonly="readonly">
                </div>

                <form action="?page=editprofile&id=<?php echo $raw['id_siswa'];?>" method="post">
                <div class="form-group">
                    <input style="margin-bottom: 50px; margin-top: 5px; width:100%;" class="btn btn-primary" type="submit" value="EDIT PROFILE" name="Edit Profile">
                </form>
                    <?php
                        }
                    ?>
        </div>
    </div>
</div>