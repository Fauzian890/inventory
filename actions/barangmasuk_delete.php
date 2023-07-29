<?php 
include("../database/db.php");

$id_barangmasuk = $_GET['id_barangmasuk'];

$sql = "DELETE FROM barangmasuk WHERE id_barangmasuk=$id_barangmasuk";

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/orderPurchasePage.php');
}


?>