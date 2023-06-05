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



      <div class="home-content">
        <section class="main">
          <div class="users">
            <div class="card">
              <div class="container">
                <div class="text-center mb-4">
                  <br></br>
                  <h3>Register Instructor</h3>
                  <h5>Below are the information that you need to input to create new user.</h5>
                </div>
                <br></br>

                <div class="container d-flex justify-content-center">
                  <form action="ChairpersonAdd.php" method="post" style="width: 70vw; min-width: 300px;">

                    <div class="row">
                      <div class="col">
                        <label class="form-label" for="validationServer01">Full name</label>
                        <input type="text" class="form-control" name="name" id="validationServer01"
                          placeholder="Enter your Fullname" required>
                      </div>

                      <div class="col">
                        <label class="form-label" id="Section10"> Contact No.</label>
                        <input type="text" class="form-control" name="no" placeholder="#">
                      </div>
                    </div>
                    <br>

                    <div class="row">

                      <div class="col">
                        <label class="form-label" id="Section10"> Role</label>
                        <input type="text" class="form-control" name="role" value="Instructor" required>
                      </div>

                      <div class="col">
                        <label class="form-label" id="Section10"> Department</label>
                        <input type="text" class="form-control" name="dept" value="<?php echo $rows['dept']; ?>" required>
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
                        <select class="form-select" name="s1" aria-label="Default select example">
                          <option value="Mon 6:00 -7:00 pm"> Mon 6:00 -7:00 pm</option>
                          <option value="Tue 6:00 -7:00 pm">Tue 6:00 -7:00 pm</option>
                        </select>
                      </div>
                      <div class="col">
                        <label class="form-label">Consultation Schedule (Alternative)</label>
                        <select class="form-select" name="s2" aria-label="Default select example">
                          <option value="Mon 6:00 -7:00 pm"> Mon 6:00 -7:00 pm</option>
                          <option value="Tue 6:00 -7:00 pm">Tue 6:00 -7:00 pm</option>
                        </select>
                      </div>
                      <div>
                        <br></br>
                        <center>
                          <td colspan="2" align-="center"><input type="submit" id="button" name="reg"
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
<?php
include('../config.php');
if (isset($_POST['reg'])) {

  $name = $_POST['name'];
  $role = $_POST['role'];
  $email = $_POST['ins_email'];
  $password = $_POST['pass'];
  $dept = $_POST['dept'];
  $contact = $_POST['no'];
  $s1 = $_POST['s1'];
  $s2 = $_POST['s2'];

  $sql = "INSERT INTO createuser(name, role, email, password, dept, contact, consult_sched1, consult_sched2) 
  VALUES('$name','$role','$email','$password','$dept','$contact','$s1','$s2')";

  $query = mysqli_query($con, $sql);
  ?>
  <script>swal("You successfully Register User", "click the button", "success");</script>
  <?php
}
?>