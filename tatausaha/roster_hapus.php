<?php
include "koneksi.php";
$kode = $_GET['id'];

mysqli_query($dtb, "DELETE FROM tb_jadwal WHERE id_jadwal = '$kode'");
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="index.php?page=lihatroster";
</script>