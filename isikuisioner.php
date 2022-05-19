<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Kusiioner</small>
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
            Kuisioner
        </h3>
    </div>
</div>

<div class="row">
    <!-- Sript ambil data -->
    <form method="post">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Masukan Link kuis</label>
                <input class="form-control" name="link" value="">
            </div>
            </div>
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8">
        <input type="submit" name="send" class="btn btn-default" value="Kirim Link"/>
    </div>
    </form>

    <!-- Script Input -->
    <?php 
        if(@$_POST['send']){
            $link=(@$_POST['link']);

            $query=mysqli_query($dtb, "INSERT INTO tb_kuisioner VALUES ('', '$link')");
        }
    ?>


</div>