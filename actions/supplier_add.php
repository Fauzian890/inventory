<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    $nama_supplier = $_POST['nama_supplier'];
    $alamat_supplier = $_POST['alamat_supplier'];
    $no_hp = $_POST['no_hp'];

    $sql = "INSERT INTO `supplier` (nama_supplier, alamat_supplier, no_hp) 
    VALUES ('$nama_supplier', '$alamat_supplier', '$no_hp')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/viewSupplierPage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
