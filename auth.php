<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['pass']);
	$err = " ";	
	$result = mysqli_query($con,"SELECT * FROM createuser");
	$c_rows = mysqli_num_rows($result);
	if ($c_rows!=$email) {
	
		$sql="SELECT * FROM createuser WHERE email='$email' and password='$password'";
		$result=mysqli_query($con,$sql);

			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				
				if ($row['role']== 'Dean')  {
							$_SESSION['email']=$email;
							$_SESSION['password']=$password;
							header('location: CvSU_Dean/DeanPage.php');

						} elseif ($row['role'] == 'Instructor' ) {
							$_SESSION['email']=$email;
							$_SESSION['password']=$password;
							header('location: CvSU_Instructor/InstructorPage.php');


						} elseif ($row['role'] == 'Chairperson') {
							$_SESSION['email']=$email;
							$_SESSION['password']=$password;
							$_SESSION['dept'] = $dept;
							header('location: CvSU_Chairperson/ChairpersonPage.php');

						} elseif ($row['role'] == 'Administrator' ) {
							$_SESSION['email']=$email;
							$_SESSION['password']=$password;
							header('location: CvSU_Administrator/AdminPage.php');

						}
			}
	}
}
?>