<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/logo.png" />
  <title>CvSU Syllabus | Department</title>
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
          <a href="ChairpersonPage.php">
            <i class="fa fa-home"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="ChairpersonAccount.php">
            <i class="fa fa-info-circle"></i>
            <span class="links_name">Account</span>
          </a>
        </li>

        <li>
          <a href="ChairpersonPDF.php">
            <i class="fa fa-pencil"></i>
            <span class="links_name">Generate Syllabus</S></span>
          </a>
        </li>

        <li>
          <a href="ChairpersonReceived.php">
            <i class="fa fa-file"></i>
            <span class="links_name">Received Files</span>
          </a>
        </li>

        <li>
          <a href="ChairpersonDept.php">
            <i class="fa fa-building"></i>
            <span class="links_name">Departments</span>
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
          <span class="dashboard"><b>Hello, Chairperson</b></span>
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
            <a href="ChairpersonAdd.php">
              <h2>Register new User?</h2>
            </a>
          </div>
        </div>


        <br>
        <div class="users">
          <div class="card">
            <br></br>
            <br>
            <a href="ChairpersonDept-Com.php">
              <i class="fa fa-building fa-5x" style="color:#25963A" ;></i>
              <br></br>
              <?php
              include('../config.php');
              $email = $_SESSION['email'];
              $sql = "SELECT * FROM createuser WHERE dept='Department of Computer Studies'";
              $result = mysqli_query($con, $sql);
              $row = mysqli_num_rows($result);
              echo '<h2>' . $row . '<h2>'
                ?>
              <br>
              <br>
              <h3>Department of Computer Studies</h3>
              <br></br>
          </div>

          <div class="card">
            <br></br>
            <br>
            <a href="ChairpersonReceived.php">
              <i class="fa fa-file fa-5x" style="color:#25963A" ;></i>
              <br></br>
              <?php
              include('../config.php');
              $email = $_SESSION['email'];
              $sql = "SELECT * FROM files WHERE reciever_role='Chairperson'";
              $result = mysqli_query($con, $sql);
              $row = mysqli_num_rows($result);
              echo '<h2>' . $row . '<h2>'
                ?>
              <br>
              <br>
              <h3>Syllabus Files</h3>
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