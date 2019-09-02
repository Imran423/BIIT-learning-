<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost", "root", "", "crud");

$sql = "DELETE FROM student where id = $id";
if(mysqli_query($con,$sql)){
    header('location:index.php');

}else{
    echo "No Deleted";
}