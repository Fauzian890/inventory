<?php 
include("../database/db.php");

$id_barangmasuk = $_GET['id_barangmasuk'];
$qty = $_GET['qty'];
    $id_kopi = $_GET['kopi'];

$sql = "DELETE FROM barangmasuk WHERE id_barangmasuk=$id_barangmasuk;UPDATE kopi SET stok=stok-$qty WHERE id_kopi=$id_kopi;";

$result = mysqli_multi_query($conn,$sql);

if ($result) {
  header('Location: ../php/orderPurchasePage.php');
}

?>