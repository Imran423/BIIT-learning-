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
    <h2 class="Jumbotron">Students Table</h2>
    <div>
        <div class="row">
            <div class="col-md-6">
                <form action="store.php" method="post">
                    <div>
                        <label>Name :</label>
                        <input required type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div>
                        <label>Email :</label>
                        <input required type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div>
                        <label>Age :</label>
                        <input required type="text" name="age" class="form-control" placeholder="Age">
                    </div>
                    <div>
                        <label>Batch :</label>
                        <input required type="text" name="batch" class="form-control" placeholder="Batch">
                    </div>
                    <div>
                        <label>Phone :</label>
                        <input required type="phone" name="phone" class="form-control" placeholder="Phone">
                    </div>
                    <br>
                   <input type="submit" name="btn-add" value="Insert" class="btn btn-success btn-block">

                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>