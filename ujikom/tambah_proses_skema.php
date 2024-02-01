<?php
include "koneksi.php";
mysqli_query($coon, "INSERT INTO tb_skema SET
kd_skema = '$_POST[kd_skema]',
nm_skema = '$_POST[nm_skema]',
jenis = '$_POST[jenis]',
unit = '$_POST[unit]'
") or die(mysqli_error($coon));
echo "Data Berhasil Ditambahkan";
echo "<meta http-equiv='refresh' content='1; url=index_skema.php'>";
?>