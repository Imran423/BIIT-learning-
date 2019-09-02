<?php
$id = $_GET['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $batch = $_POST['batch'];
    $phone = $_POST['phone'];

    $con = mysqli_connect("localhost", "root", "", "crud");

    $query = "UPDATE student SET name='$name', email='$email', age='$age', batch='$batch', phone='$phone' WHERE id='$id'";

    if(mysqli_query($con,$query)){
        header("Location: view.php?id=" .$id);
    }else{
        echo "Not Updated";
     }



