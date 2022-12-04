<div class="row">
    <div class="col-lg-12" style="padding:0;">
        <!-- <h1 class="page-header">
            Halaman
            <small>Siswa</small>
        </h1> -->
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="../guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i> <a href="?page=inputjadwalkonseling">jadwal</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i> input
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin-top:-5px;">
            Edit Data Siswa
        </h3>
    </div>
</div>

<div class="row">
    <!-- Sript ambil data -->
    <?php
        $id = $_GET['id'];
        $cek=mysqli_query($dtb, "SELECT * FROM tb_siswa WHERE id_siswa='$id'");
        $qrykoreksi=mysqli_query($dtb, "SELECT tb_pengguna.username, 
                                               tb_siswa.nis, 
                                               tb_siswa.nama_siswa,
                                               tb_siswa.id_siswa 
                                        FROM tb_pengguna, tb_siswa 
                                        WHERE tb_pengguna.id_pengguna='$id_login' AND tb_pengguna.username=tb_siswa.nis");
        $data=mysqli_fetch_object($cek);
        
    ?>
    <form method="post">
        <div class="col-lg-6">
        <div class="form-group">
                <label>NIS</label>
                <input class="form-control" name="nis" value="<?php echo $data->nis;?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input class="form-control" name="nama_siswa" value="<?php echo $data->nama_siswa;?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Hari</label>
                <select name="hari" class="form-control" required>
                    <option value="">Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jum'at</option>
                    <option value="Sabtu">Sabtu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="" required>
            </div>
            <div class="form-group">
                <label>Jam Mulai</label>
                <input type="time" class="form-control" name="jam" value="" required>
            </div>
            <div class="form-group">
                <label>Jam Selesai</label>
                <input type="time" class="form-control" name="jam2" value="" required>
            </div>
        </div>
        <!-- <div class="col-lg-6">
            <div class="form-group">
                <label>Judul Keluhan</label>
                <input class="form-control" name="judul" value="" placeholder="Masukan Judul Keluhan" required>
            </div>
            <div class="form-group">
                <label>Input Keluhan</label>
                <textarea name="keluhan" id="" cols="40" rows="5" required>
                </textarea>
                <label>Input Keluhan</label>
                <input class="form-control" name="agama" value="" placeholder="Masukan Keluhan Anda" required>
            </div>
        </div> -->
</div>

<div class="row">
    <div class="col-lg-6">
        <p style="color: red;"><i><b>*pastikan data yang ada masukan benar</b></i></p>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <input style="margin-bottom: 30px;" type="submit" name="send" class="btn btn-default" value="Tetapkan Jadwal Konseling"/>
    </div>
    </form>

    <!-- Script Input -->
    <?php 
    if(@$_POST['send']){;
        $nis=strtoupper($_POST['nis']);
        $nama=strtoupper($_POST['nama_siswa']);
        $hari=strtoupper($_POST['hari']);
        $tanggal=strtoupper($_POST['tanggal']);
        $jam=strtoupper($_POST['jam']);
        $jam2=strtoupper($_POST['jam2']);
        $id = $_GET['id'];
        $query=mysqli_query($dtb, "INSERT INTO tb_jadwal_konseling VALUES ('', '$nis', '$nama', '$hari', '$tanggal', '$jam', '$jam2', '$id')");
        
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