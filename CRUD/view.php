<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost", "root", "", "crud");

$sql = "SELECT * FROM student where id = $id";
$result = mysqli_query($con,$sql);

$std = mysqli_fetch_assoc($result);


?>




<html>
<head>
    <title>CRUD Operation</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-success" href="index.php">Student List</a>
        </div>
        <div class="col-md-8">
            <h2> Student Information</h2>
            <hr/>
            <table class="table">
                <tr>
                    <th> Name :</th>
                    <td> <?php echo $std['name']; ?> </td>
                </tr>
                <tr>
                    <th> Email :</th>
                    <td> <?php echo $std['email']; ?> </td>
                </tr>
                <tr>
                    <th> Age :</th>
                    <td> <?php echo $std['age']; ?> </td>
                </tr>
                <tr>
                    <th> Batch :</th>
                    <td> <?php echo $std['batch']; ?> </td>
                </tr>
                <tr>
                    <th> Phone :</th>
                    <td> <?php echo $std['phone']; ?> </td>
                </tr>
            </table>


        </div>
    </div>
</div>


</body>
</html>