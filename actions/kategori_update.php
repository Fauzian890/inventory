<?php include('../database/db.php');

//$idkategori = $_GET['kat'];
$nama = $_POST['nama_kategori'];
$id = $_POST['id_kategori'];;


$sql = "UPDATE kategori SET nama_kategori='$nama' WHERE id_kategori='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: ../php/viewKategoriPage.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>