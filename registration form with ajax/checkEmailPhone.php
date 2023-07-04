<?php
require 'conn.php';

$em = $_GET['email'];
$ph = $_GET['phone'];

if(!empty($em)){
// check email existence
$sql = "SELECT * FROM student WHERE email='$em'";
$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

if($num==1){
    echo "EMAIL EXISTS<br>";
}else{
   // echo "EMAIL NOT EXIST!";
}
// phone number existence
if(!empty($ph)){
    $sql = "SELECT * FROM student WHERE phone='$ph'";
    $query = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($query);
    
    if($num==1){
        echo "PHONE NUMBER EXISTS";
    }else{
       // echo "PHONE NUMBER NOT EXIST!";
    }
}

}


?>