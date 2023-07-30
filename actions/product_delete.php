<?php 
include("../database/db.php");

$kopi = $_GET['kopi'];

$sql = "DELETE FROM kopi WHERE id_kopi=$kopi";

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/viewProductPage.php');
}


?>