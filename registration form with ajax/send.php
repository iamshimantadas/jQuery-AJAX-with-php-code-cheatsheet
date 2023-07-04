<?php
require 'conn.php';

 $name =  $_POST['name'];
$email  =  $_POST['email'];
 $phone =  $_POST['phone'];

$sql = "INSERT INTO student(name,email,phone) VALUES('$name','$email','$phone')";
$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

if($num==1){
    echo "RECORD SAVED SUCCESSFULLY!";
}else{
    echo "RECORD NOT SAVED SUCCESSFULLY!";
}
?>