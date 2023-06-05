<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/logo.png" />
  <title>CvSU Syllabus | Instructor List</title>
  <link rel="stylesheet" href="../styling/InstructorPage.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


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
          <span style="color: #25963A;" class="dashboard"><b>Hello, Chairperson!</b></span>
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
              <table class="table table-hover text-center">
                <thead class="table-success mb-3">
                  <br></br>
                  <h3><b>
                      <?php echo $rows['dept']; ?>
                    </b></h3>
                <?php } ?>
                <br></br>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Email</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                <?php
                include('../config.php');
                $email = $_SESSION['email'];

                $sql = "SELECT * FROM createuser WHERE dept='Department of Computer Studies'";
                $result = mysqli_query($con, $sql);
                while ($row = $result->fetch_assoc()) {

                  ?>

                  <tr>
                    <td>
                      <?php echo $row['id']; ?>
                    </td>
                    <td>
                      <?php echo $row['name']; ?>
                    </td>
                    <td>
                      <?php echo $row['role']; ?>
                    </td>
                    <td>
                      <?php echo $row['email']; ?>
                    </td>
                    <td>

                      <a href="ChairpersonAssign.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><b> Assign
                        </b></a>
                      </a>
                      <a href="ChairpersonDept-Com.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><b> Remove
                        </b></a>
                    </td>

                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>


        </div>
      </section>
    </div>
    <br></br>


  </section>
  </section>
  </div>

  </section>

</body>

</html>

<?php
require_once "../config.php";
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM createuser WHERE id ='$id'";
  $query = mysqli_query($con, $sql);
}
?>