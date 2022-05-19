<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>kuisioner</small>
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
            Daftar Link Kuisioner
        </h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="tab-content table-responsive">
            <div class="tab-pane active" id="">
                <br>
                <div class="table-responsive">
                     <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Link Kuisioner</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php 
                            $no = 1;
                            $data=mysqli_query($dtb,"SELECT * FROM tb_kuisioner");
                            while($d=mysqli_fetch_array($data)){
                                ?>
                                <td><?php echo $no++; ?></td>
                                <td><a href="<?php echo $d['kuisioner']; ?>">klik disini untuk membuka kuisioner</a></td>
                            </tr>
                            <?php 
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>