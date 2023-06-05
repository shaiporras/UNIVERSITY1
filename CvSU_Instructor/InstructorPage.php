<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/logo.png" />
  <title>CvSU Syllabus | Instructor</title>
  <link rel="stylesheet" href="../styling/summer.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php
  include('../session.php');
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
          <a href="InstructorPage.php">
            <i class="fa fa-home"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="InstructorAccount.php">
            <i class="fa fa-info-circle"></i>
            <span class="links_name">Account</span>
          </a>
        </li>
        <li>
          <a href="InstructorRevision.php">
            <i class="fa fa-undo"></i>
            <span class="links_name">Returned Files</span>
          </a>
        </li>

        <li>
          <a href="InstructorPDF.php">
            <i class="fa fa-pencil"></i>
            <span class="links_name">Generate Syllabus</span>
          </a>
        </li>
        <li>
          <a href="InstructorPending.php">
            <i class="fa fa-tasks"></i>
            <span class="links_name">Pending</span>
          </a>
        </li>
        <li>
          <a href="InstructorSubmit.php">
            <i class="fa fa-paper-plane"></i>
            <span class="links_name">Submit Syllabus</span>
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
          <span class="dashboard"><b> Hello, Instructor!</b></span>
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
    <?php
  } ?>

    <div class="home-content">
      <section class="main">

        <div class="users">

          <div class="card">
            <br></br>
            <center>
              <h2 style="color: #25963A;">Vision</h2>
              <br></br>
              <center>
                <h5>The premier university in historic Cavite recognized for excellence in the development <br> of
                  globally competitive and morally upright individuals.</br></h5>
                <br></br>
          </div>

          <div class="card">
            <br></br>
            <center>
              <h2 style="color: #25963A;">Mission</h2>
              <br></br>
              <center>
                <h5>Cavite State University shall provide excellent, equitable and relevant educational opportunities
                  <br> in the arts, sciences and technology through quality instruction and responsive research and
                  development activities. <br> It shall produce professional, skilled and morally upright individuals
                  for global competitiveness.</br></h5>
                <br></br>
          </div>

        </div>

        <div class="users">
          <div class="card">
            <br></br>
            <center><i class="fa fa-clock fa-5x fa-spin" style="color:#25963A" ;></i>
              <br></br>
              <h1 id="date"><b> </b></h1>
              <br>
              <center>
                <h5>Today's Date</h5>
                <br></br>
          </div>

          <div class="card">
            <br></br>
            <center><i class="fa fa-calendar fa-5x" style="color:#25963A" ;></i>
              <br></br>
              <center>
                <h1 id="year"><b> </b></h1>
                <br>
                <br>
                <center>
                  <h5>Academic Year</h5>
                  <br></br>
          </div>

          <div class="card">
            <br></br>
            <a href="InstructorPending.php">
              <center><i class="fa fa-list fa-5x" style="color:#25963A" ;></i>
                <br></br>
                <?php
                include('../config.php');
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM assign WHERE instructor_email = '$email'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_num_rows($result);
                echo '<h2>' . $row . '<h2>'
                  ?>
                <br>
                <center>
                  <h5>Pending...</h5>
                  <br></br>
          </div>
        </div>

    </div>
  </section>
  </section>
  </div>



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