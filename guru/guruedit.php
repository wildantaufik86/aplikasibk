<div class="row">
    <div class="col-lg-12" style="margin-top:0px;">
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
            Edit Data Guru
        </h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <p style="color: red;"><i>*Mengubah NIP akan mengubah username guru</i></p>
    </div>
</div>

<div class="row">
    <!-- Sript ambil data -->
    <?php
        $id = @$_GET['id'];
        $qrykoreksi=mysqli_query($dtb, "SELECT * FROM tb_guru WHERE id_guru='$id'");
        $data=mysqli_fetch_object($qrykoreksi);
    ?>
    <form method="post">
        <div class="col-lg-6">
            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" name="nip" value="<?php echo $data->nip;?>">
            </div>
            <?php
               $a=mysqli_query($dtb, "SELECT * FROM tb_pengguna WHERE username='$data->nip'"); 
               $b=mysqli_fetch_object($a);
            ?>
            <div class="form-group">
                <label>Nama Guru</label>
                <input class="form-control" name="nama_guru" value="<?php echo $data->nama_guru;?>" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="" selected="selected">Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control" name="tempat_lahir" value="<?php echo $data->tempat_lahir;?>" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Kode Guru</label>
                <input class="form-control" name="kode_guru" value="<?php echo $data->kode_guru;?>" required>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?php echo $data->alamat;?>" required>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input class="form-control" name="agama" value="<?php echo $data->agama;?>" required>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <p style="color: red;"><i>*Pastikan data yang ada ubah sudah sesuai</i></p>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <input style="margin-bottom: 50px;" type="submit" name="edit" class="btn btn-danger" value="SIMPAN EDIT PROFILE"/>
    </div>
    </form>

    <!-- Script Input -->
    <?php 
    if(@$_POST['edit']){
        $nip=$_POST['nip'];
        $nama_guru=strtoupper($_POST['nama_guru']);
        $kode_guru=strtoupper($_POST['kode_guru']);
        $jenis_kelamin=strtoupper($_POST['jenis_kelamin']);
        $tempat_lahir=strtoupper($_POST['tempat_lahir']);
        $tanggal_lahir=@$_POST['tanggal_lahir'];
        $alamat=strtoupper($_POST['alamat']);
        $agama=strtoupper($_POST['agama']);
        
        $query=mysqli_query($dtb, "UPDATE tb_guru SET nip='$nip', nama_guru='$nama_guru', kode_guru='$kode_guru', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir',
                            tanggal_lahir='$tanggal_lahir', alamat='$alamat', agama='$agama' WHERE id_guru='$id'");
        $query1=mysqli_query($dtb, "UPDATE tb_pengguna SET username='$nip' WHERE id_pengguna='$b->id_pengguna'");
        if($query){
        ?>
            <script type="text/javascript">
            alert("Input Data Sukses !")
            window.location="?page=lihatprofile";
            </script>
        <?php
        }else{
        ?>
            <script type="text/javascript">
            alert("Input Data Gagal !")
            window.location="?page=lihatguru";
            </script>
        <?php
        } 
    }
    ?>
</div>