<?php
include('auth.php');
?>

<!DOCTYPE html>

<head>
  <title> CvSU Syllabus | Login </title>
  <!-- responsive layouts -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="img/logo.png" />

  <!-- fonts imported -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700;900&display=swap" rel="stylesheet">

  <!-- stylisng -->
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
  <br></br>
  <div id="corner" class="login-page">
    <div class="form">
      <div class="header" id="header">
        <img src="img/logo.png" alt="logo" />
      </div>
      <h1><b>CvSU Login</b></h1>
      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?= $_GET['error'] ?>
        </div>
      <?php } ?>
      <form action="index.php" method="POST">
        <form class="login-form">
          <input type="text" name="email" placeholder="email" />
          <input type="password" name="pass" placeholder="password" />

          <button type="submit" name="logbtn" value="Login">Login</button>
          <p class="admin">Forgot Password? <br><a href="#">Please contact administrator for password recovery and
              account.</a></p>
        </form>
    </div>
  </div>

</body>

</html>
<?php
include("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['pass']);
  if (empty($email)) {
    header("Location: index.php?error=Email is Required");

  } elseif (empty($password)) {
    header("Location: index.php?error=Password is Required");

  }else {
    header("Location: index.php?error=Login Failed, Please try again!");
  }
  $sql = "SELECT * FROM createuser WHERE email='$email' and password='$password'";
  $result = mysqli_query($con, $sql);

  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    if ($row['role'] == 'Dean') {
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      header('location: CvSU_Dean/DeanPage.php');

    } elseif ($row['role'] == 'Instructor') {
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      header('location: CvSU_Instructor/InstructorPage.php');


    } elseif ($row['role'] == 'Chairperson') {
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['dept'] = $dept;
      header('location: CvSU_Chairperson/ChairpersonPage.php');

    } elseif ($row['role'] == 'Administrator') {
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      header('location: CvSU_Administrator/AdminPage.php');

    }
  }
}
?>