<?php 
include("../database/db.php");

$id_konsumen = $_GET['id_konsumen'];

$sql = "DELETE FROM konsumen WHERE id_konsumen=$id_konsumen" ;

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/viewKonsumenPage.php');
}


?>