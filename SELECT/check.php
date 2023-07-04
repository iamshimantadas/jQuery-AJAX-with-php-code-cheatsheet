<?php
require 'conn.php';

$em = $_GET['email'];

$sql = "SELECT * FROM student WHERE email='$em'";
$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

if($num==1){
    echo "EMAIL EXISTS";
}else{
    echo "EMAIL NOT EXIST!";
}

?>