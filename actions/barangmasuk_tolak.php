<?php 
include("../database/db.php");

$id_barangmasuk = $_GET['id_barangmasuk'];

$sql = "UPDATE barangmasuk SET status='DITOLAK' WHERE id_barangmasuk=$id_barangmasuk";

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/validasiBarangMasuk.php');
}


?>