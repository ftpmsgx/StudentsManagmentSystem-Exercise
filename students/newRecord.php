<?php
session_start();
header('Content-type:text/html; charset = utf-8');
require('../database.php');
if ($dbh) {
	if (isset($_SESSION['usernameSession']) && isset($_SESSION['passwordSession'])) {
		$u = trim($_POST['Uid']);
		$n = trim($_POST['Name']);
		$a = trim($_POST['Age']);
                $s = trim($_POST['Sex']);
		$t = trim($_POST['Tp']);
		$sql = "INSERT INTO students VALUES('$u', '$n', $a, '$s', '$t')";
		$res = mysqli_query($dbh, $sql);
		echo "<script>location.href='main.php'</script>";
	} else {
		echo "<script>location.href='../index.html'</script>";
	}
}
?>
