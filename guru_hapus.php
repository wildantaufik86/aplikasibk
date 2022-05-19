<?php
include "koneksi.php";
$kode = $_GET['id'];
$a=mysqli_query($dtb, "SELECT nip from tb_guru where id_guru = '$kode'");
$b=mysqli_fetch_array($a);

mysqli_query($dtb, "DELETE FROM tb_pengguna WHERE username=$b[nip]");

mysqli_query($dtb, "DELETE FROM tb_guru WHERE id_guru = '$kode'");
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=lihatguru";
</script>