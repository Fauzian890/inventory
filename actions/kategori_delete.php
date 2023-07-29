<?php 
include("../database/db.php");

$kat = $_GET['kat'];

$sql = "DELETE FROM kategori WHERE id_kategori=$kat";

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/viewKategoriPage.php');
}


?>