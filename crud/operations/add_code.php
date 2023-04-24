<?php

$conn = mysqli_connect('localhost','root','','crud_db');



if(isset($_POST['submit'])){
    
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$number = mysqli_real_escape_string($conn,$_POST['number']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$address = mysqli_real_escape_string($conn,$_POST['address']);

$qry = "INSERT INTO `user_tbl`( `name`, `email`, `phone`, `gender`, `address`) VALUES ('$name','$email','$number','$gender','$address')";
$qry_run = mysqli_query($conn,$qry);

if($qry_run){
    $_SESSION['message'] ="Data inserted successfully";
    header("Location:../user_list.php");
}

// echo "alert(data inserted)";

}



?>