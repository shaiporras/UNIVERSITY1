<?php
include('../session.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/logo.png" />
  <title>CvSU Syllabus | Dean</title>
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
        <div class="search-box">
          <input type="text" placeholder="Search Here..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <span class="admin_name">
            <?php echo $rows['name']; ?>
          </span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content">
        <section class="main">
          <div class="users">

            <div class="card">
              <br></br>
              <center>
                <h2 style="color: #25963A;">Vision</h2>
              </center>
              <br>
              <center>
                <h5>The premier university in historic Cavite recognized for excellence in the development of globally
                  competitive and morally upright individuals.</br></h5>
                <br></br>
            </div>

            <div class="card">
              <br></br>
              <center>
                <h2 style="color: #25963A;">Mission</h2>
                <br>
                <center>
                  <h5>Cavite State University shall provide excellent, equitable and relevant educational opportunities in
                    the arts, sciences and technology through quality instruction and responsive research and development
                    activities. It shall produce professional, skilled and morally upright individuals for global
                    competitiveness.</br></h5>
                  <br></br>
            </div>

          </div>

          <div class="users">
            <div class="card">
              <br></br>
              <center><i class="fa fa-clock fa-5x fa-spin" style="color:#25963A" ;></i>
                <center>
                  <br></br>
                  <h1 id="date"><b> </b></h1>
                  <br>
                  <h5>Today's Date</h5>
                  <br></br>
            </div>

            <div class="card">
              <br></br>
              <center><i class="fa fa-calendar fa-5x" style="color:#25963A" ;></i>
                <br></br>
                <h1 id="year"><b> </b></h1>
                <br>
                <br>
                <h5>Academic Year</h5>
                <br></br>
            </div>

          </div>
          <br></br>



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
  <?php } ?>
</body>

</html>