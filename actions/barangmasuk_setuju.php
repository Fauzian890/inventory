<?php 
include("../database/db.php");

$id_barangmasuk = $_GET['id_barangmasuk'];

$sql = "UPDATE barangmasuk bm JOIN kopi k ON (bm.id_kopi = k.id_kopi) SET bm.status='DISETUJUI', k.stok = k.stok + bm.qty WHERE id_barangmasuk=$id_barangmasuk";

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/validasiBarangMasuk.php');
}


?>