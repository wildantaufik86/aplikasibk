<?php
include "koneksi.php";
$kode = $_GET['id'];

mysqli_query($dtb, "DELETE FROM tb_jadwal_konseling WHERE id_jadwal_konseling = '$kode'");
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="index.php";
</script>