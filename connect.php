<?php
$con= new mysqli('localhost', 'root','','form'); //servername,username,password,database
if($con){
    
}
else{
    die(mysqli_error($con));
}

?>