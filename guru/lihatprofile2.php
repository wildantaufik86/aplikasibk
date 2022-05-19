<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Guru</small>
        </h1>
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
            Report Data Guru
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
        <i><a href="inde.php?page=inputguru">Data Baru Guru</a></i><br><br>
        <div class="table-responsive">
             <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Kode Guru</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($raw=mysqli_fetch_array($guru)){
                    ?>
                    <tr>
                        <td><?php echo $raw['nip']; ?></td>
                        <td><?php echo $raw['nama_guru']; ?></td>
                        <td><?php echo $raw['kode_guru']; ?></td>                       
                        <td><?php echo $raw['tanggal_lahir']; ?></td>
                        <td><?php echo $raw['alamat']; ?></td>
                        <td><?php echo $raw['agama']; ?></td>
                        <td><i><a href="?page=editprofile&id=<?php echo $raw['id_guru'];?>">Edit</a></i></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>