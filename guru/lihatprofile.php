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
                <i class="fa fa-child"></i> Guru
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row" >
    <div class="col-lg-12" id="header" style="display : flex; align-items : center; justify-content: space-between;">
        <h3 class="page-header" style="margin:0;">
            Report Data Guru
        </h3>
        <i style="font-size : 16px ; margin: 0 10px;"><a href="inde.php?page=inputguru">Data Baru Guru</a></i>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <?php   
            $result = mysqli_query($dtb, "SELECT * FROM tb_guru ORDER BY nip ASC");  
        ?>
        
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
                        while($raw=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $raw['nip']; ?></td>
                        <td><?php echo $raw['nama_guru']; ?></td>
                        <td><?php echo $raw['kode_guru']; ?></td>                       
                        <td><?php echo $raw['tanggal_lahir']; ?></td>
                        <td><?php echo $raw['alamat']; ?></td>
                        <td><?php echo $raw['agama']; ?></td>
                        <td><i><a href="?page=editprofile&id=<?php echo $raw['id_guru'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="../guru_hapus.php?id=<?php echo $raw['id_guru'];?>">Hapus</a></i></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>