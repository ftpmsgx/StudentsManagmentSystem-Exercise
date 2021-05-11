<?php
session_start();
if (isset($_SESSION['usernameSession']) && isset($_SESSION['passwordSession'])) {
        ;
} else {
        echo "<script>location.href='../index.html'</script>";
}
?>
<!DOCTYPE HTML>
<html>
        <head>
                <meta charset="utf-8">
                <title>New Record</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                <link href="../css/bg.css" rel="stylesheet">"
                <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>
        </head>
        
	<body class="body">
		<div class="container" style="color:#FFFFFF">
                <div class="row clearfix">
                <div class="col-md-12 column">
                        <div class="page-header">
                                <h1>
                                        Students Managment System <small>Add New Record Page</small>
				</h1>
				<a href="../account/logout.php">Log Out</a>
                        </div>
                        <ul class="breadcrumb">
				<li>
					<a href="main.php">Main Page</a>
				</li>
                                <li class="active">
                                        Add
                                </li>
                        </ul>
		</div>
		<form action="newRecord.php" method="post">
                <div class="form-group">
                        <label for="uid">UID</label>
                        <input type="text" class="form-control" id="uid"  name="Uid" required>
                </div>
                <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="Name" required>
		</div>
                <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" name="Age" required>
                </div>
                <div class="form-group">
                        <label for="sex">Sex</label>
                        <input type="text" class="form-control" id="sex" name="Sex" required>
                </div>
                <div class="form-group">
                        <label for="tp">Telephone</label>
                        <input type="text" class="form-control" id="tp" name="Tp" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
        </form>
	</body>
</html>
