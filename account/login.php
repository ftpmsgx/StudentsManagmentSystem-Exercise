<?php
header('Content-type:text/html; charset = utf-8');
require('../database.php');
if ($dbh) {
	# start session
	session_start();
	# if unset session, you must to login.
	if (!isset($_SESSION['usernameSession'])) {
		echo "Database connection successfuly!<br>";
		# get input label value
		$usr = trim($_POST["u"]);
		$pwd = trim($_POST["p"]);
		# sql
		$sql = "SELECT * FROM users WHERE UserName = '$usr' AND PassWord = sha('$pwd')";
		# excute sql command
		$result = mysqli_query($dbh, $sql);
		echo "<br>";
		# found some result, jump to main.php, and set session
		if (mysqli_num_rows($result) > 0) {
			echo "<p>Login successfuly!</p>";
			$_SESSION['usernameSession'] = "$usr";
			$_SESSION['passwordSession'] = "true";
			echo "<script>location.href='../students/main.php'</script>";
		} else {
			echo "<p>Login Failed.</p>";
		}
		$dbh = null;
	} else {
		echo "<script>location.href='../students/main.php'</script>";
	}
} else {
        echo "[Error]: Database connection failed!<br>";
}
