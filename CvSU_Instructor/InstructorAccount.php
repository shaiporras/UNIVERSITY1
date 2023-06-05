<?php
require_once "../config.php";

if (isset($_POST['editacct'])) {
  $name = $_POST['name'];
  $role = $_POST['role'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $dept = $_POST['dept'];
  $contact = $_POST['contact'];
  $s1 = $_POST['sched1'];
  $s2 = $_POST['sched2'];


  $sql = "UPDATE createuser SET name='" . $_POST['name'] . "', role='" . $_POST['role'] . "', email='" . $_POST['email'] . "', password='" . $_POST['pass'] . "', dept='" . $_POST['dept'] . "', contact='" . $_POST['contact'] . "', consult_sched1='" . $_POST['sched1'] . "', consult_sched2='" . $_POST['sched2'] . "' WHERE id='" . $_POST['id'] . "'";
  $query = mysqli_query($con, $sql);


  // Check existence of id parameter before processing further
  if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Get URL parameter
    $id = trim($_GET["id"]);

    // Prepare a sele ct statement
    $sql = "SELECT * FROM createuser WHERE id = ?";
    if ($stmt = mysqli_prepare($con, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "i", $param_id);

      // Set parameters
      $param_id = $id;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
          /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          // Retrieve individual field value
          $name = $row["name"];
          $role = $row["role"];
          $email = $row["email"];
          $password = $row["password"];
          $dept = $row["dept"];
          $contact = $row["contact"];
          $s1 = $row["consult_sched1"];
          $s2 = $row["consult_sched2"];
        }
      }

      // Close statement
      mysqli_stmt_close($stmt);

      // Close connection
      mysqli_close($con);
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/logo.png" />
  <title>CvSU Syllabus | Register Instructor</title>
  <link rel="stylesheet" href="../styling/summer.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

        <li class="../log_out">
          <a href="logout.php">
            <i class="fa fa-sign-out"></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard"><b>Hello, Instructor!</b></span>
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
              <div class="container">
                <div class="text-center mb-4">
                  <br></br>
                  <h3><b>Account Information</b></h3>
                  <h5>Below here is the account information, which you can use in order to login within the system.</h5>
                  <hr>
                </div>
                <br></br>

                <div class="container d-flex justify-content-center">
                  <form action="" method="post" style="width: 70vw; min-width: 300px;">

                    <div class="row">
                      <div class="col">
                        <label class="form-label" for="validationServer01">Full name</label>
                        <input type="text" class="form-control" name="name" id="validationServer01"
                          placeholder="Enter your Fullname" value="<?php echo $rows['name']; ?>">
                      </div>

                      <div class="col">
                        <label class="form-label" id="Section10"> Contact No.</label>
                        <input type="text" class="form-control" name="contact" placeholder="#"
                          value="<?php echo $rows['contact']; ?>">
                      </div>
                    </div>
                    <br>

                    <div class="row">

                      <div class="col mb-4">
                        <br>
                        <label class="form-label" id="Section10"> Role</label>
                        <input type="text" class="form-control" name="role" placeholder="#"
                          value="<?php echo $rows['role']; ?>">
                      </div>

                      <div class="col mb-8">
                        <br>
                        <label class="form-label" id="Section10"> Department</label>
                        <input type="text" class="form-control" name="dept" placeholder="#"
                          value="<?php echo $rows['dept']; ?>">
                        </select>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col mb-8">
                        <label class="form-label" id="Section10"> Email</label>
                        <input type="text" class="form-control" name="email" placeholder="@"
                          value="<?php echo $rows['email']; ?>">
                      </div>

                      <div class="col mb-4">
                        <label class="form-label disabled"> Password </label>
                        <input type="text" class="form-control" name="pass" placeholder="Enter Password" pattern=".{8,16}"
                          title="8 or more Character" size=30 pattern="[!@#$%^&*][a-z][A-Z][0-9]"
                          value="<?php echo $rows['password']; ?>">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <br>
                        <label class="form-label">Consultation Schedule </label>
                        <select class="form-select" name="sched1" aria-label="Default select example"
                          value="<?php echo $rows['consult_sched1']; ?>">
                          <option value="Mon 6:00 -7:00 pm"> Mon 6:00 -7:00 pm</option>
                          <option value="Tue 6:00 -7:00 pm">Tue 6:00 -7:00 pm</option>
                        </select>
                      </div>
                      <div class="col">
                        <br>
                        <label class="form-label">Consultation Schedule (Alternative)</label>
                        <select class="form-select" name="sched2" aria-label="Default select example"
                          value="<?php echo $rows['consult_sched2']; ?>">
                          <option value="Mon 6:00 -7:00 pm"> Mon 6:00 -7:00 pm</option>
                          <option value="Tue 6:00 -7:00 pm">Tue 6:00 -7:00 pm</option>
                        </select>
                      </div>
                      <div>
                        <br>

                        <div>
                          <br>
                          <div style="color:green;text-align:right;">
                            <a href="../DeanEdit.php">

                            </a>
                            <form action="InstructorAccount.php" method="post" style="width: 70vw; min-width: 300px;">
                              <input type='hidden' name='id' value="<?php echo $row['id']; ?>">
                              <td colspan="2" align-="center"><input onclick="modal()" type="submit" id="button"
                                  name="editacct" class="btn btn-success" value="Save Information"></td>
                            </form>
                          </div>
                          <br></br>
                        </div>
                  </form>
                </div>
                <script>
                  function modal() {
                    swal("You successfully Edit your Information!", "click the button", "success");
                  }
                </script>
              <?php } ?>
</body>

</html>