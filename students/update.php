<?php
session_start();
header('Content-type:text/html; charset = utf-8');
require('../database.php');
if ($dbh) {
	if (isset($_SESSION['usernameSession']) && isset($_SESSION['passwordSession'])) {
		$u = trim($_POST['Uid']);
		$ul = trim($_POST['ul']);
		$n = trim($_POST['Name']);
		$nl = trim($_POST['nl']);
		$a = trim($_POST['Age']);
                $al = trim($_POST['al']);
                $s = trim($_POST['Sex']);
		$sl = trim($_POST['sl']);
		$t = trim($_POST['Tp']);
                $tl = trim($_POST['tl']);
		$sql = "update students set UID='$u', Name='$n', Age=$a, Sex='$s', TelePhone='$t' where UID='$ul'";
		$res = mysqli_query($dbh, $sql);
		echo "<script>location.href='main.php'</script>";
	} else {
		echo "<script>location.href='../index.html'</script>";
	}
}
?>
