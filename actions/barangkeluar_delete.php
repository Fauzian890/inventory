<?php 
include("../database/db.php");

$id_barangkeluar = $_GET['id_barangkeluar'];
$qty = $_GET['qty'];
$id_kopi = $_GET['id_kopi'];

$sql = "DELETE FROM barangkeluar WHERE id_barangkeluar=$id_barangkeluar;UPDATE kopi SET stok=stok+$qty WHERE id_kopi=$id_kopi;";

$result = mysqli_multi_query($conn,$sql);

if ($result) {
  header('Location: ../php/orderClientPage.php');
}


?>