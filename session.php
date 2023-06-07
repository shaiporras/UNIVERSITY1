<?php
include('config.php');
session_start();
$email_check = $_SESSION['email'];
$ses_sql = mysqli_query($con, "select email,id from createuser where email='$email_check'");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$loggedin_session = $row['email'];
$loggedin_id = $row['id'];
if (!isset($loggedin_session) || $loggedin_session == NULL) {
	echo "Go back";
	header("Location: login.php");
}
?>