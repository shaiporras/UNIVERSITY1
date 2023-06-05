<?php

require_once "../config.php";

// Define variables and initialize with empty values
$name = $role = $email = $password = $dept = "";
$name_err = $role_err = $email_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dept = $_POST['dept'];
  // Validate name
  $input_name = trim($_POST["name"]);
  if (empty($input_name)) {
    $name_err = "Please enter a name.";
  } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
    $name_err = "Please enter a valid name.";
  } else {
    $name = $input_name;
  }

  // Validate address address
  $input_role = trim($_POST["role"]);
  if (empty($input_role)) {
    $role_err = "Please fill the Role.";
  } else {
    $role = $input_role;
  }
  // Validate email
  $input_email = trim($_POST["email"]);
  if (empty($input_email)) {
    $email_err = "Please fill the email.";
  } else {
    $email = $input_email;
  }
  // Validate address address
  $input_password = trim($_POST["pass"]);
  if (empty($input_password)) {
    $password_err = "Please fill the Password.";
  } else {
    $password = $input_password;
  }

  // Check input errors before inserting in database
  if (empty($name_err) && empty($role_err) && empty($email_err) && empty($password_err)) {
    // Prepare an insert statement
    $sql = "INSERT INTO createuser (name, role, email, password, dept) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($con, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_role, $param_email, $param_password, $param_dept);

      // Set parameters
      $param_name = $name;
      $param_role = $role;
      $param_email = $email;
      $param_password = $password;
      $param_dept = $dept;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Records created successfully. Redirect to landing page

        header("location: AdminPage.php");
        exit();
      } else {
        echo "Something went wrong. Please try again later.";
      }
    }

    // Close statement
    mysqli_stmt_close($stmt);
  }

  // Close connection
  mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/logo.png" />
  <title>CvSU Syllabus | Register Chairperson</title>
  <link rel="stylesheet" href="../styling/summer.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
          <span class="dashboard"><b>Hello, Dean!</b></span>
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
                  <h3><b>Register Chairperson</b></h3>
                  <h5>Below are the information that you need to input to create new user.</h5>
                </div>
                <br></br>

                <div class="container d-flex justify-content-center">
                  <form action="DeanAdd.php" method="post" style="width: 70vw; min-width: 300px;">

                    <div class="row">
                      <!-- <div class="col">
                          <label class="form-label disabled"> Name </label>
                          <input type ="text" class="form-control" name="name" placeholder="Enter name" required>
                      </div> -->
                      <div class="col">
                        <label class="form-label" for="validationServer01">Full name</label>
                        <input type="text" class="form-control" name="name" id="validationServer01"
                          placeholder="Enter your Fullname" required>
                      </div>

                      <div class="col">
                        <label class="form-label" id="Section10"> Contact No.</label>
                        <input type="text" class="form-control" name="ins_no" placeholder="#">
                      </div>
                    </div>
                    <br>

                    <div class="row">

                      <div class="col">
                        <label class="form-label">Select Your Role</label>
                        <select class="form-select" name="cha_role" aria-label="Default select example" required>
                          <option value="Chairperson">Chairperson</option>
                        </select>
                      </div>

                      <div class="col">
                        <label class="form-label"> Select your Department: </label>
                        <select class="form-select" name="dept" aria-label="Default select example" required>
                          <option selected>Department of Computer Studies</option>
                          <option selected>Department of Languages and Mass Communication</option>
                          <option selected>Department of Social Science and Humanities</option>
                          <option selected>Department of Hospitality Management</option>
                          <option selected>Office Administration Management Department</option>
                          <option selected>Department of Biological And Physical Sciences</option>
                          <option selected>Department of Entrepreneurship</option>
                          <option selected>Department of Physical Education</option>
                          <option selected>Department of Teachers Education</option>
                        </select>
                      </div>

                      <div class="col">
                        <label class="form-label" id="Section10"> Email</label>
                        <input type="text" class="form-control" name="ins_email" placeholder="@">
                      </div>

                      <div class="col">
                        <label class="form-label disabled"> Password </label>
                        <input type="text" class="form-control" name="pass" placeholder="Enter Password" pattern=".{8,16}"
                          title="8 or more Character" size=30 pattern="[!@#$%^&*][a-z][A-Z][0-9]" required>

                      </div>
                    </div>
                    <br>
                    <div class="row">

                      <div class="col">


                        <label class="form-label">Consultation Schedule </label>
                        <select class="form-select" name="ins_sched1" aria-label="Default select example">
                          <option value="Mon 6:00 -7:00 pm"> Mon 6:00 -7:00 pm</option>
                          <option value="Tue 6:00 -7:00 pm">Tue 6:00 -7:00 pm</option>
                        </select>
                      </div>
                      <div class="col">
                        <label class="form-label">Consultation Schedule (Alternative)</label>
                        <select class="form-select" name="ins_sched2" aria-label="Default select example">
                          <option value="Mon 6:00 -7:00 pm"> Mon 6:00 -7:00 pm</option>
                          <option value="Tue 6:00 -7:00 pm">Tue 6:00 -7:00 pm</option>
                        </select>

                      </div>
                    </div>
                    <br>
                    <br>

                    <div>
                      <br>
                      <center>
                        <td colspan="2" align-="center"><input type="submit" id="button" name="submit"
                            class="btn btn-success" value="&nbsp;&nbsp;&nbsp;&nbsp; Register  &nbsp;&nbsp;&nbsp;&nbsp;">
                        </td>
                      </center>
                      <br></br>
                      <br></br>
                    </div>
                  </form>
                </div>

              <?php } ?>
</body>

</html>