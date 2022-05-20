<div class="row">
    <div class="col-lg-12" style="margin-top:0px;">
        <!-- <h1 class="page-header">
            Halaman
            <small>Guru</small>
        </h1> -->
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
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
            Profile Saya
        </h3>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <?php   
            $guru=mysqli_query($dtb, "SELECT tb_pengguna.username, 
                                             tb_guru.id_guru,
                                             tb_guru.nip,
                                             tb_guru.nama_guru,
                                             tb_guru.kode_guru,
                                             tb_guru.jenis_kelamin,
                                             tb_guru.tempat_lahir,
                                             tb_guru.tanggal_lahir,
                                             tb_guru.alamat,
                                             tb_guru.agama

                                        FROM tb_pengguna, tb_guru
                                        WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_guru.nip");  
        ?>
         <?php
                        while($raw=mysqli_fetch_array($guru)){
                    ?>
                <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control" value=" <?php echo $raw['nip']; ?>" readonly="readonly">
                </div>
            
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" value="<?php echo $raw['nama_guru']; ?>" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Kode Guru</label>
                    <input class="form-control" value="<?php echo $raw['kode_guru']; ?>" readonly="readonly">
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
                <form action="?page=editprofile&id=<?php echo $raw['id_guru'];?>" method="post">
                <div class="form-group">
                    <input class="form-control" type="submit" value="Edit Profile" name="Edit Profile">
                </form>
                    <?php
                        }
                    ?>
        <div class="table-responsive">
             <table class="table table-hover table-bordered table-striped">
                <thead>
                    <!-- <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Kode Guru</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Action</th>
                    </tr> -->
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>