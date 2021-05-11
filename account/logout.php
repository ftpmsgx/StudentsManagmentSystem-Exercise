<?php
session_start();
if (isset($_SESSION['usernameSession']) && isset($_SESSION['passwordSession'])) {
	unset($_SESSION['usernameSession']);
	unset($_SESSION['passwordSession']);
	echo "<script>location.href='../index.html'</script>";
}
?>
