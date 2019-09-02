<?php

  $name=$_POST['name'];
  $email=$_POST['email'];
  $age=$_POST['age'];
  $batch=$_POST['batch'];
  $phone=$_POST['phone'];

$con = mysqli_connect("localhost", "root", "", "crud");

$query="INSERT INTO student  VALUES (null,'$name','$email','$age','$batch','$phone')";

    if(mysqli_query($con, $query)){
        header("Location: index.php");
}else{
        echo "Not Inserted";
    }
