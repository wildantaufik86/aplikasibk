<div class="row">
    <div class="col-lg-12" style="margin-top:+70px;">
        <h1 class="page-header">
            Halaman
            <small>Prestasi</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i> Siswa
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin-top:-5px;">
            Report Prestasi Siswa
        </h3>
    </div>
</div>

<div class="row">
    <!-- Sript ambil data -->
    <?php
        $id = $_GET['id'];
        $qrykoreksi=mysqli_query($dtb, "SELECT * FROM tb_siswa WHERE id_siswa='$id'");
        $data=mysqli_fetch_object($qrykoreksi);
    ?>
    <form method="post">
        <div class="col-lg-6">
            <div class="form-group">
                <label>NIS</label>
                <input class="form-control" name="nis" value="<?php echo $data->nis;?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input class="form-control" name="nama_siswa" value="<?php echo $data->nama_siswa;?>" readonly="">
            </div>
            <div class="form-group">
                <label>Prestasi Siswa 1</label>
                <input class="form-control" name="prestasi_1" value="<?php echo $data->prestasi_1;?>" readonly="readonly" >
            </div>
            <div class="form-group">
                <label>Prestasi Siswa 2</label>
                <input class="form-control" name="prestasi_2" value="<?php echo $data->prestasi_2;?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Prestasi Siswa 3</label>
                <input class="form-control" name="prestasi_3" value="<?php echo $data->prestasi_3;?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Prestasi Siswa 4</label>
                <input class="form-control" name="prestasi_4" value="<?php echo $data->prestasi_4;?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Prestasi Siswa 5</label>
                <input class="form-control" name="prestasi_5" value="<?php echo $data->prestasi_5;?>" readonly="readonly">
            </div>
        </div>
</div>

<div class="row">
    </form>

    <!-- Script Input -->
    <?php 
    if(@$_POST['edit']){
        $nama_siswa=strtoupper($_POST['nama_siswa']);
        $jenis_kelamin=strtoupper($_POST['jenis_kelamin']);
        $tempat_lahir=strtoupper($_POST['tempat_lahir']);
        $tanggal_lahir=@$_POST['tanggal_lahir'];
        $alamat=strtoupper($_POST['alamat']);
        $agama=strtoupper($_POST['agama']);
        $nama_ortu=strtoupper($_POST['nama_ortu']);
        $no_ortu=strtoupper($_POST['no_ortu']);
        $kelas=strtoupper($_POST['kelas']);
        $prestasi1=strtoupper($_POST['prestasi_1']);
        $prestasi2=strtoupper($_POST['prestasi_2']);
        $prestasi3=strtoupper($_POST['prestasi_3']);
        $prestasi4=strtoupper($_POST['prestasi_4']);
        $prestasi5=strtoupper($_POST['prestasi_5']);
        
        $query=mysqli_query($dtb, "UPDATE tb_siswa SET nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin',
                            tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', agama='$agama',
                            nama_ortu='$nama_ortu', no_ortu='$no_ortu' ,prestasi_1='$prestasi1', prestasi_2='$prestasi2', prestasi_3='$prestasi3',
                            prestasi_4='$prestasi4', prestasi_5='$prestasi5', id_kelas='$kelas' WHERE id_siswa='$id'");
        
        if($query){
        ?>
            <script type="text/javascript">
            alert("Edit Data Sukses !")
            window.location="?page=lihatprofile";
            </script>
        <?php
        }else{
        ?>
            <script type="text/javascript">
            alert("Edit Data Gagal !")
            window.location="?page=lihatsiswa";
            </script>
        <?php
        } 
    }
    ?>
</div>