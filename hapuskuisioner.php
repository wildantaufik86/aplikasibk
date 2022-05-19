<?php
include "koneksi.php";
$kode = $_GET['id'];

mysqli_query($dtb, "DELETE FROM tb_kuisioner WHERE id_kuisioner = '$kode'");
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=";
</script>