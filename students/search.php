<?php
session_start();
if (isset($_SESSION['usernameSession']) && isset($_SESSION['passwordSession'])) {
        header('Content-type:text/html; charset = utf-8');
        require('../database.php');
        if ($dbh) {
                $s = trim($_POST['SE']);
                $i = trim($_POST['IV']);
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        if ($s == "Age") {
                                $sql = "select * from students where $s=$i";
                        } else {
                                $sql = "select * from students where $s='$i'";
                        }
                        $list = mysqli_query($dbh, $sql);
                }
                $dbh = null;
        } else {
                echo "[Error]: Database connection failed!<br>";
        }
} else {
        echo "<script>location.href='../index.html'</script>";
}
?>
<html>
        <head>
                <meta charset="utf-8">
                <title>Search Result</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                <link href="../css/bg.css" rel="stylesheet">"
                <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
                <script src="../bootstrap/js/bootstrap.min.js"></script>
        </head>

	<body class="body" style="color:#FFFFFF">
		<div class="container">
		<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="page-header">
				<h1>
					Students Managment System <small>Search Result Page</small>
				</h1>
				<a href="../account/logout.php">Log Out</a>
			</div>
			<ul class="breadcrumb">
				<li>
					<a href="main.php">Main Page</a>
				<li class="active">
					Search Result
				</li>
			</ul>
			<div style="display: flex; justify-content: space-between;">
				<a href="add.php" type="button" class="btn btn-primary" style="margin: 10px; width: 100px; letter-spacing: 5px">添加</a>
			</div>
			<form role="form" class="form-inline" action="search.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Field Name</label><!--<input type="text" class="form-control" id="exampleInputEmail1" />-->
					<select class="form-control" name="SE" Style="color:#000000">
                                		<option value="UID">UID</option>
                                		<option value="Name">Name</option>
                                		<option value="Age">Age</option>
                                		<option value="Sex">Sex</option>
                                		<option value="TelePhone">TelePhone</option>
                        		</select>
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Vaule</label><input type="text" name="IV" class="form-control" id="exampleInputPassword1" />
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">
							UID
						</th>
						<th scope="col">
							Name
						</th>
						<th scope="col">
							Age
						</th>
						<th scope="col">
							Sex
						</th>
						<th scope="col">
							Tele Phone
						</th>
						<th scope="col">
							Operation
						</th>
					</tr>
				</thead>
				<?php foreach($list as $item):?>
				<tbody>
					<tr>
						<th scope="row"><?=$item['UID']?></th>
						<th scope="row"><?=$item['Name']?></th>
						<th scope="row"><?=$item['Age']?></th>
						<th scope="row"><?=$item['Sex']?></th>
						<th scope="row"><?=$item['TelePhone']?></th>
						<td>
							<a href="edit.php?id=<?=$item['UID']?>" type="button" class="btn btn-warning"> Edit</a>
							<a href="delete.php?id=<?=$item['UID']?>" type="button" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
		</div>
		</div>
	</body>
</html>
