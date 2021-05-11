<?php
session_start();
if (isset($_SESSION['usernameSession']) && isset($_SESSION['passwordSession'])) {
        require('../database.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM students WHERE UID='$id'";
        $list = mysqli_query($dbh, $sql);
        foreach($list as $item):
                $name = $item['Name'];
                $age = $item['Age'];
                $sex = $item['Sex'];
                $tp = $item['TelePhone'];
        endforeach;
} else {
        echo "<script>location.href='../index.html'</script>";
}
?>
<!DOCTYPE HTML>
<html>
        <head>
                <meta charset="utf-8">
                <title>Edit</title>
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
                                	        	Students Managment System <small>Edit Record Page</small>
						</h1>
						<a href="../account/logout.php">Log Out</a>
                        		</div>
                        		<ul class="breadcrumb">
					<li>
						<a href="main.php">Main Page</a>
					</li>
                                	<li class="active">
                                	        Edit
                                	</li>
                        		</ul>
				</div>
                	<form action="update.php" method="post">
                	<div class="form-group">
                        	<label for="uid">UID</label>
                        	<input value="<?=$_GET['id']?>" type="text" class="form-control" id="uid"  name="Uid" required>
                        	<input value="<?=$_GET['id']?>" type="hidden" class="form-control" id="unl"  name="ul">
                	</div>
                	<div class="form-group">
                        	<label for="name">Name</label>
                        	<input value="<?php echo $name?>" type="text" class="form-control" id="name" name="Name" required>
                        	<input value="<?php echo $name?>" type="hidden" class="form-control" id="name" name="nl">
			</div>
                	<div class="form-group">
                        	<label for="age">Age</label>
                        	<input value="<?php echo $age?>" type="text" class="form-control" id="age" name="Age" required>
                        	<input value="<?php echo $age?>" type="hidden" class="form-control" id="age" name="al">
                	</div>
                	<div class="form-group">
                        	<label for="sex">Sex</label>
                        	<input value="<?php echo $sex?>" type="text" class="form-control" id="sex" name="Sex" required>
                        	<input value="<?php echo $sex?>" type="hidden" class="form-control" id="sex" name="sl">
                	</div>
                	<div class="form-group">
                        	<label for="tp">Telephone</label>
                        	<input value="<?php echo $tp?>" type="text" class="form-control" id="tp" name="Tp" required>
                        	<input value="<?php echo $tp?>" type="hidden" class="form-control" id="tp" name="tl">
                	</div>
                	<button type="submit" class="btn btn-primary">Save</button>
        		</form>
	</div>
	</div>
	</body>
</html>
