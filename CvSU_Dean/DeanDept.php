<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/logo.png" />
  <title>CvSU Syllabus | Administrator</title>
  <link rel="stylesheet" href="../styling/InstructorPage.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
  <?php
  require_once '../session.php';
  $sql = "SELECT * FROM createuser where id=$loggedin_id";
  $result = mysqli_query($con, $sql);

  while ($rows = mysqli_fetch_array($result)) {
    ?>

    <div class="sidebar">
      <div class="logo-details">
        <img class="logo" src="../img/logo.png" alt="logo" style="width: 100px;">
        <span class="logo_name">CvSU <br> Syllabus</span>
      </div>
      <br></br>
      <ul class="nav-links">
        <li>
          <a href="DeanPage.php">
            <i class="fa fa-home"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="DeanAccount.php">
            <i class="fa fa-info-circle"></i>
            <span class="links_name">Account</span>
          </a>
        </li>

        <li>
          <a href="DeanEmail.php">
            <i class="fa fa-inbox"></i>
            <span class="links_name">Email</S></span>
          </a>
        </li>

        <li>
          <a href="DeanDept.php">
            <i class="fa fa-building"></i>
            <span class="links_name">Departments</span>
          </a>
        </li>

        <li>
          <a href="DeanFiles.php">
            <i class="fa fa-file"></i>
            <span class="links_name">Syllabus Files</S></span>
          </a>
        </li>



        <li class="log_out">
          <a href="../logout.php">
            <i class="fa fa-sign-out"></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard"><b> Hello, Dean!</b></span>
        </div>

        <div class="profile-details">
          <span class="admin_name">
            <?php echo $rows['name']; ?>
          </span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>
    <?php } ?>

    <div class="home-content">
      <section class="main">
        <div class="users">
          <div class="card">
            <h2> Departments</h2>
          </div>

          <div class="card bg-success text-white">
            <a href="DeanAdd.php">
              <h2>Register Chairperson?</h2>
            </a>
          </div>
          <form action="../reports.php" method="POST" style="width: 70vw; min-width: 300px;">
            <div class="card bg-success text-white">
              <input type="submit" id="button" name="submit" class="btn btn-success" value="Generate Report">
            </div>
          </form>


        </div>


        <br>
        <div class="users">
          <div class="card">
            <br></br>
            <br>
            <a href="dn-dept-com.php">
              <center><i class="fa fa-building fa-5x" style="color:#25963A" ;></i>
                <br></br>
                <?php
                include('../config.php');
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM createuser WHERE dept='Department of Computer Studies'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_num_rows($result);
                echo '<h2 action="reports.php" method="post" name="res">' . $row . '<h2>'
                  ?>
                <br>
                <br>
                <center>
                  <h3>Department of Computer Studies</h3>
                  <br></br>
          </div>

          <div class="card">
            <br></br>
            <br>
            <a href="dn-dept-edu.php">
              <center><i class="fa fa-building fa-5x" style="color:#25963A" ;></i>
                <br></br>
                <?php
                include('../config.php');
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM createuser WHERE dept='Department Of Teachers Education'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_num_rows($result);
                echo '<h2>' . $row . '<h2>'
                  ?>
                <br>
                <br>
                <center>
                  <h3>Department Of Teachers Education</h3>
                </center>
                <br></br>
          </div>

          <div class="card">
            <br></br>
            <br>
            <a href="dn-dept-bsoa.php">
              <center><i class="fa fa-building fa-5x" style="color:#25963A" ;></i>
                <br></br>
                <?php
                include('../config.php');
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM createuser WHERE dept='Office Administration Management Department'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_num_rows($result);
                echo '<h2>' . $row . '<h2>'
                  ?>
                <br>
                <br>
                <h3>Office Administration Management Department</h3>
                <br></br>
          </div>



        </div>

        <div class="users">
          <div class="card">
            <br></br>
            <br>
            <a href="dn-dept-masscom.php">
              <center><i class="fa fa-building fa-5x" style="color:#25963A" ;></i>
                <br></br>
                <?php
                include('../config.php');
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM createuser WHERE dept='Department of Languages and Mass Communication'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_num_rows($result);
                echo '<h2>' . $row . '<h2>'
                  ?>
                <br>
                <br>
                <center>
                  <h3>Department of Languages and Mass Communication</h3>
                  <br></br>
          </div>

          <div class="card">
            <br></br>
            <br>
            <a href="dn-dept-ssh.php">
              <center><i class="fa fa-building fa-5x" style="color:#25963A" ;></i>
                <br></br>
                <?php
                include('../config.php');
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM createuser WHERE dept='Department of Social Science and Humanities'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_num_rows($result);
                echo '<h2>' . $row . '<h2>'
                  ?>
                <br>
                <br>
                <h3>Department of Social Science and Humanities</h3>
                <br></br>
          </div>

          <div class="card">
            <br></br>
            <br>
            <a href="dn-dept-hrm.php">
              <center><i class="fa fa-building fa-5x" style="color:#25963A" ;></i>
                <br></br>
                <?php
                include('../config.php');
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM createuser WHERE dept='Department of Hospitality Management'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_num_rows($result);
                echo '<h2>' . $row . '<h2>'
                  ?>
                <br>
                <br>
                <h3>Department of Hospitality Management</h3>
                <br></br>
          </div>



        </div>


      </section>
  </section>

  <script>
    const d = new Date();
    document.getElementById("year").innerHTML = d.getFullYear();
  </script>

  <script>
    const c = new Date();
    document.getElementById("date").innerHTML = d;
  </script>

</body>

</html>