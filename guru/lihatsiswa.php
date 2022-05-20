<div class="row">
    <div class="col-lg-12" style="padding:0;">
       <!--  <h1 class="page-header">
            Halaman
            <small>Siswa</small>
        </h1> -->
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i> Siswa
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row" style="margin: 10px 0;">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin: 0;">
            Report Data Siswa
        </h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
       <?php
        $kelas1 = mysqli_query($dtb, "SELECT* FROM tb_kelas");
        ?>
        <ul class="nav nav-tabs table-responsive" id="myTab" style=" overflow: hidden;">
            <?php
                while($row1=mysqli_fetch_array($kelas1)){
            ?>
            <li class="test-class"><a class="deco-none misc-class" href="#<?php echo $row1['kelas']; ?>"> Kelas <?php echo $row1['kelas']; ?></a></li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="tab-content table-responsive">
            <?php
                $kelas2 = mysqli_query($dtb, "SELECT * FROM tb_kelas");
                while($row2=mysqli_fetch_array($kelas2)){
                    $kelasid=$row2['id_kelas'];

                    $siswa=mysqli_query($dtb, "SELECT * FROM tb_siswa WHERE id_kelas='$kelasid'");
                    $jumlah=mysqli_num_rows($siswa);
            ?>
            <div class="tab-pane active" id="<?php echo $row2['kelas']; ?>">
                <br>
                <label>Kelas : <?php echo $row2['kelas']; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Jumlah Siswa : <?php echo $jumlah; ?></label>
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
                                <td><i><a href="?page=editsiswa&id=<?php echo $row3['id_siswa'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="siswa_hapus.php?id=<?php echo $row3['id_siswa'];?>">Hapus</a></i></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>