<?php session_start(); ?>



<?php
$conn = mysqli_connect('localhost','root','','crud_db');

if(isset($_POST['update'])){

    $update_id = mysqli_real_escape_string($conn,$_POST['update_id']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);

    $qry="UPDATE user_tbl SET name='$name', email='$email',phone='$number',gender='$gender',address='$address' WHERE id='$update_id'";
    $qry_run = mysqli_query($conn,$qry);
    if($qry_run){
        $_SESSION['message']="Data update successfully";
        header('Location: .user_list.php');
    }
    else{
        $_SESSION['message']="Data NOT update successfully";
        header('Location: .user_list.php');
    }
}






/****************************DELETE***************************************/


    $delete_id =$_GET['delete_id'];

    $query = "DELETE FROM `user_tbl` WHERE id = $delete_id";

    $del_qry_run= mysqli_query($conn, $query);

    if($del_qry_run){
        $_SESSION['message']="Data Deleted";
        header('Location:../user_list.php');
    }
    else{
        $_SESSION['message']="Data  Not Deleted";
        header('Location:user_list.php');
    }



?>
