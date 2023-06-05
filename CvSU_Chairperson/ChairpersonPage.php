<?php
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/logo.png" />
  <title>CvSU Syllabus | Chairperson</title>
  <link rel="stylesheet" href="../styling/InstructorPage.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php
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
          <span class="dashboard"><b>Hello, Chairperson!</b></span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search Here..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <span class="admin_name">
            <?php echo $rows['name'] ?>
          </span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>
    <?php }
  ?>

    <div class="home-content">
      <section class="main">
        <div class="users">

          <div class="card">
            <br></br>
            <h2 style="color: #25963A;">Vision</h2>
            <br></br>
            <h5>The premier university in historic Cavite recognized for excellence in the development <br> of globally
              competitive and morally upright individuals.</br></h5>
            <br></br>
          </div>

          <div class="card">
            <br></br>
            <h2 style="color: #25963A;">Mission</h2>
            <br></br>
            <h5>Cavite State University shall provide excellent, equitable and relevant educational opportunities <br>
              in the arts, sciences and technology through quality instruction and responsive research and development
              activities. <br> It shall produce professional, skilled and morally upright individuals for global
              competitiveness.</br></h5>
            <br></br>
          </div>

        </div>

        <div class="users">
          <div class="card">
            <br></br>
            <i class="fa fa-clock fa-5x fa-spin" style="color:#25963A" ;></i>
            <br></br>
            <h1 id="date"><b> </b></h1>
            <br>
            <h5>Today's Date</h5>
            <br></br>
          </div>

          <div class="card">
            <br></br>
            <i class="fa fa-calendar fa-5x" style="color:#25963A" ;></i>
            <br></br>
            <h1 id="year"><b> </b></h1>
            <br>
            <br>
            <h5>Academic Year</h5>
            <br></br>
          </div>

          <div class="card">
            <br></br>
            <a href="ChairpersonReceived.php">
              <i class="fa fa-list fa-5x" style="color:#25963A" ;></i>
              <br></br>
              <?php
              include('../config.php');
              $email = $_SESSION['email'];
              $dept = $_SESSION['dept'];
              $sql = "SELECT * FROM files WHERE reciever_email='$email' and reciever_role='Chairperson' ";
              $result = mysqli_query($con, $sql);
              $row = mysqli_num_rows($result);
              echo '<h2>' . $row . '<h2>'
                ?>
              <br>
              <h5>Submitted Syllabus</h5>
              <br></br>
          </div>

        </div>
      </section>
  </section>
  </div>

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