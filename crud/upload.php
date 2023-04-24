<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud_db');

if (isset($_POST['save'])) {
    // echo"upload image";
    // echo "<pre>";
    // var_dump($_FILES['file']['name']);
    // echo "</pre>";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $file = mysqli_real_escape_string($conn, $_FILES['file']['name']);
    
    // upload image in upload folder
    // source file
    // $source =$_FILES['file']['tmp_name'];
    // // destination permanent location
    // $destination ='./upload/'.$file;
    // move_uploaded_file($source,$destination);


    $qry = "INSERT INTO `image_tbl` (`name`,`email`,`phone`,`photo`) VALUES('$name','$email','$number','$file')";

    $qry_run = mysqli_query($conn, $qry);


    // echo " file uploaded";



    if($qry_run){
        move_uploaded_file($_FILES['file']['tmp_name'],'./upload/'.$file);
        $_SESSION['status']= "Image uploaded";
        header('Location:image_upload.php');
    }
    else{
        $_SESSION['status']= "Image Not uploaded";
        header('Location:image_upload.php');
    }



}
mysqli_close($conn);



?>