<?php
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/logo.png" />
  <title>CvSU Syllabus | Submit </title>
  <link rel="stylesheet" href="../styling/InstructorPage.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


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
              <div class="container">
                <div class="text-center mb-4">
                  <br>
                  <h3><b>Submit Syllabus</b></h3>
                  <h5>In this form, you may submit your file document. Once the file has been signed, there will be
                    automatically email sent to you.</h5>
                  <hr>
                </div>
                <br>

                <div class="container d-flex justify-content-center">
                  <form action="" method="post" style="width: 70vw; min-width: 300px;">
                    <div class="row">

                      <div class="col">
                        <label class="form-label"> Sender`s Email </label>
                        <input type="text" class="form-control" name="semail" placeholder="Enter email" require
                          value="<?php echo $rows['email']; ?>">
                      </div>

                      <div class="col">
                        <label class="form-label"> Reciever`s Email </label>
                        <input type="text" class="form-control" name="remail" placeholder="Enter email of reciever"
                          require>
                      </div>

                    </div>

                    <br>
                    <div class="row">

                      <div class="col">
                        <label for="formFileSm" class="form-label">Select Date</label>
                        <br>
                        <input class="form-control form-control-Sm" id="formFileLg" type="date" name="cdate"
                          placeholder="dd-mm-yyyy">
                      </div>

                      <div class="col">
                        <label class="form-label">Reciever`s Role</label>
                        <select class="form-select" name="role" aria-label="Default select example">
                          <option value="Administrator">Select Role...</option>
                          <option value="Chairperson">Chairperson</option>
                          <option value="Instructor">Instructor</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <br></br>
                        <label for="formFileSm" class="form-label">Enter the link</label><br>
                        <input class="form-control form-control-Sm" id="formFileLg" type="text" name="link"
                          placeholder="Enter Link here" require>
                      </div>
                    </div>



                    <br>
                    <br>
                    <br>

                    <td colspan="2" align-="center"><input type="submit" id="button" name="sublink"
                        class="btn btn-success" value="Submit"></td>
                </div>
                <br></br>
                </form>
              </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
              crossorigin="anonymous"></script>




            <script>
              let sidebar = document.querySelector(".sidebar");
              let sidebarBtn = document.querySelector(".sidebarBtn");
              sidebarBtn.onclick = function () {
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                  sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
              };

              let slideIndex = 1;
              showSlides(slideIndex);

              function plusSlides(n) {
                showSlides(slideIndex += n);
              }

              function currentSlide(n) {
                showSlides(slideIndex = n);
              }

              function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
              }
            </script>
            <?php

  }

  ?>
</body>

</html>



<?php

include('../config.php');


if (isset($_POST['sublink'])) {
  $semail = $_POST['semail'];
  $remail = $_POST['remail'];
  $role = $_POST['role'];
  $link = $_POST['link'];
  $date = $_POST['cdate'];

  $sql = "INSERT INTO files (sender_email, reciever_email, reciever_role, file_link, date) VALUES (?,?,?,?,?)";

  if ($stmt = mysqli_prepare($con, $sql)) {
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssss", $param_semail, $param_remail, $param_role, $param_link, $param_date);

    // Set parameters
    $param_semail = $semail;
    $param_remail = $remail;
    $param_role = $role;
    $param_link = $link;
    $param_date = $date;
    // Attempt to execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {


    }


  }

  // Close connection
  mysqli_close($con);
}
?>