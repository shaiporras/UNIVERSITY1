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
  <title>CvSU Syllabus | Account</title>
  <link rel="stylesheet" href="../styling/summer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
          <a href="logout.php">
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
            <?php echo $rows['name'] ?>
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
                  <h3><b>Assign Syllabus</b></h3>
                  <h5>In this module, you can assign instructor to do Syllabus.</h5>
                  <hr>
                </div>

                <div class="container d-flex justify-content-center">
                  <form action="" method="post" style="width: 70vw; min-width: 300px;">


                    <div class="row">
                      <div class="col">
                        <label class="form-label disabled">My mail</label>
                        <input type="text" class="form-control" name="my_email" placeholder="Jewells Hije"
                          value="<?php echo $rows['email'] ?>">
                      </div>
                      <?php } ?>
                      <br>
                      <?php
                    if (isset($_GET['id'])) {
                      $id = $_GET['id'];
                      $sql = "SELECT * FROM createuser WHERE id='$id'";
                      $query = mysqli_query($con, $sql);
                      while ($rows = mysqli_fetch_array($query)) {
                        ?>
                      <div class="col">
                        <label class="form-label disabled"> Instructor Email </label>
                        <input type="text" class="form-control" name="ins_email" placeholder="Enter email of instructor"
                          value="<?php echo $rows['email'] ?>">
                      </div>
                    
                    
                      </div>

                    <?php
                      }
                    }
                    ?>
                  <div class="row">
                    <div class="col">
                      <br>
                      <label class="form-label">Subject Code and Title</label>
                      <select class="form-select" name="sub_code" aria-label="Default select example" required>
                        <option value="N/A">Select Subject Code</option>
                        <option value="ITEC100 / N/A">ITEC100 / N/A</option>
                        <option value="ITEC111 / N/A">ITEC111 / N/A</option>
                        <option value="DCIT70 / N/A">DCIT70 / N/A</option>
                      </select>
                    </div>


                    <div class="col">
                      <br>
                      <label for="formFileSm" class="form-label">Date Today</label>
                      <br>
                      <input class="form-control form-control-Sm" id="formFileLg" type="date" name="date_today"
                        placeholder="dd-mm-yyyy">
                    </div>

                    <div class="col">
                      <br>
                      <label for="formFileSm" class="form-label">Date Deadline</label>
                      <br>
                      <input class="form-control form-control-Sm" id="formFileLg" type="date" name="date_deadline"
                        placeholder="dd-mm-yyyy">
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col">
                      <br>
                      <label class="form-label">Descriptions</label>
                      <textarea id="summernote" name="des" class="form-control" aria-label="With textarea"
                        placeholder="Type your message here"></textarea>
                    </div>
                  </div>
                  <div style="color:green;text-align:right;">
                    <br></br>
                    <td colspan="2" align-="center"><input type="submit" id="button" name="assign"
                        class="btn btn-success" value="Assign Instructor"></td>
                    <br></br>
                  </div>

                  <br>

                </form>
              </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
              crossorigin="anonymous"></script>
            <script>
              $('#summernote').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 120,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });
            </script>

</body>

</html>
<?php
include('../config.php');

if (isset($_POST['assign'])) {
  $my_email = $_POST['my_email'];
  $ins_email = $_POST['ins_email'];
  $code = $_POST['sub_code'];
  $des = $_POST['des'];
  $date = $_POST['date_today'];
  $deadline = $_POST['date_deadline'];

  $sql = "INSERT INTO assign (sender_email, instructor_email, subject_code, descript, date_today, date_deadline) VALUES ('$my_email','$ins_email','$code','$des','$date','$deadline')";
  $result = mysqli_query($con, $sql);
  ?>
  <script>swal("You successfully Assign the Syllabus", "click the button", "success");</script>
  <?php


}


?>