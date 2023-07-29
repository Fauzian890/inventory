<?php include('../database/db.php');

    $namakopi = $_POST['namakopi'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $id_kopi = $_POST['id_kopi'];
    $id_kategori = $_POST['kategori'];


$sql = "UPDATE kopi SET namakopi='$namakopi', deskripsi='$deskripsi', stok='$stok', harga='$harga', id_kategori='$id_kategori' WHERE id_kopi=$id_kopi";

if ($conn->query($sql) === TRUE) {
    header('Location: ../php/viewProductPage.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>