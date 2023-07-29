<?php 
include("../database/db.php");

$id_barangkeluar = $_GET['id_barangkeluar'];

$sql = "DELETE FROM barangkeluar WHERE id_barangkeluar=$id_barangkeluar";

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/orderClientPage.php');
}


?>