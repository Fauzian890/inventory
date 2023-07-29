<?php include('../database/db.php');

    $namakopi = $_POST['namakopi'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];


$sql = "UPDATE products SET namakopi='$namakopi', deskripsi='$deskripsi', stok='$stok', harga='$harga' WHERE ProdId=$prodid";

if ($conn->query($sql) === TRUE) {
    header('Location: ../php/viewProductPage.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>