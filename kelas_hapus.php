<?php
include "koneksi.php";
$kode = $_GET['id'];

mysqli_query($dtb, "DELETE FROM tb_kelas WHERE id_kelas = '$kode'");
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=kelas";
</script>