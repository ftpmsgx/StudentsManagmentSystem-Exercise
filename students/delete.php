<?php
session_start();
if (isset($_SESSION['usernameSession']) && isset($_SESSION['passwordSession'])) {
	header('Content-type:text/html; charset = utf-8');
	require('../database.php');
	if ($dbh) {
		$id = trim($_GET['id']);
		$sql = "delete from students where UID = '$id'";
		$res = mysqli_query($dbh, $sql);
		echo "<script>location.href='../students/main.php'</script>";
	} else {
		echo "[Error]: Database connection failed!<br>";
	}
} else {
	echo "<script>location.href='../index.html'</script>";
}
?>
