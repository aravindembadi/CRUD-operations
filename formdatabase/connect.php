<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
 $con=new mysqli('localhost','root','','data_forms');
 if($con){
    $sql="INSERT INTO data (name,email,gender,mobile)values('$name','$email','$gender','$mobile')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully";
    }else{
        die(mysqli_error($con));
    }

 }else{
    die(mysqli_error($con));
}
}
?>