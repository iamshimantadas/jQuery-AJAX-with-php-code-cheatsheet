<?php
include 'conn.php';

$fname = $_POST['name'];
$Phone = $_POST['phone'];


if(!empty($fname) && !empty($Phone)){
    $sql = "INSERT INTO customers(fullname,phone) VALUES('$fname','$Phone')";
   
    if(mysqli_query($conn,$sql)){
    echo "record saved!";
    }else{
    echo "record insert failed!";
    }
}else{
   
}

?>