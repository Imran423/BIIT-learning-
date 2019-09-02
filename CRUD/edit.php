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


<div class="container">
    <h2 class="Jumbotron">Edit Students Info</h2>
    <div>
        <div class="row">
            <div class="col-md-6">
                <form action="update.php?id=<?php echo $id ?>" method="post">
                    <div>
                        <label>Name :</label>
                        <input required type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $std['name']?>">
                    </div>
                    <div>
                        <label>Email :</label>
                        <input required type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $std['email']?>">
                    </div>
                    <div>
                        <label>Age :</label>
                        <input required type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $std['age']?>">
                    </div>
                    <div>
                        <label>Batch :</label>
                        <input required type="text" name="batch" class="form-control" placeholder="Batch" value="<?php echo $std['batch']?>">
                    </div>
                    <div>
                        <label>Phone :</label>
                        <input required type="phone" name="phone" class="form-control" placeholder="Phone" value="<?php echo $std['phone']?>">
                    </div>
                    <br>
                    <input type="submit" name="btn-add" value="Update" class="btn btn-danger btn-block">

                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>