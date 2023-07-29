<?php 
include("../database/db.php");

$id_kopi = $_GET['id_kopi'];

$sql = "DELETE FROM kopi WHERE id_kopi=$id_kopi";

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/viewProductPage.php');
}


?>