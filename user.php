<?php
include 'connect.php';
if(isset($_POST['insert'])){
    $name=$_POST['name']; 
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $email=$_POST['email'];
    
    $sql="INSERT INTO form(name,password,cpassword,email)
     values('$name','$password','$cpassword','$email')";
     
     $result=mysqli_query($con, $sql);
     if($result){
        header('location:display.php');
       // echo "Data inserted successfully";
     }else{
        die(mysqli_error($con));
     }
}
