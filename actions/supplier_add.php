<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    $suppliername = $_POST['supname'];
    $supplieraddress = $_POST['supaddress'];
    $nohp = $_POST['nohp'];

    $sql = "INSERT INTO `supplier` (SupName, SupAddress, nohp) 
    VALUES ('$suppliername', '$supplieraddress', '$nohp')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/viewSupplierPage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
