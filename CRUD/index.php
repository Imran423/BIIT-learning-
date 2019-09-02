<?php
$con = mysqli_connect("localhost", "root", "", "crud");

$sql = "SELECT * FROM student";
$result = mysqli_query($con,$sql);

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
            <div class="col-md-3">
                <a class="btn btn-primary" href="insert.php">Insert Student Information</a>
            </div>
            <div class="col-md-9">
                <h2> Student List</h2>
                <hr/>
                <table class="table">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Batch</th>
                    <th>Phone</th>
                    <th>Action</th>
                    </thead>

                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)){?>

                    <tr>
                        <td> <?php echo $row['id']?> </td>
                        <td> <?php echo $row['name']?></td>
                        <td> <?php echo $row['email']?></td>
                        <td> <?php echo $row['age']?></td>
                        <td> <?php echo $row['batch']?></td>
                        <td> <?php echo $row['phone']?></td>
                        <td>
                            <a class="btn btn-info" href="view.php?id=<?php echo $row['id']; ?>">View</a>
                            <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a class="btn btn-success" onclick="return confirm('Are You Sure')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>
</html>