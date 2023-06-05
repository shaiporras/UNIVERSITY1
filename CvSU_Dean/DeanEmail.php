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
  <title>CvSU Syllabus | Email </title>
  <link rel="stylesheet" href="../styling/summer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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
                  <h3><b>Email</b></h3>
                  <h5>You can send email to your chairperson and instructor here, <br> just click the button bellow.</h5>
                  <hr>
                </div>

                <div class="container d-flex justify-content-center">
                  <form action="#" method="post" style="width: 70vw; min-width: 300px;">

                    <div class="row">
                      <div class="col">
                        <label class="form-label success">From</label>
                        <input type="email" name="from" class="form-control" id="inputEmail4"
                          placeholder="myemailaccount.com" value="<?php echo $rows['email']; ?>">
                      </div>

                      <div class="col">
                        <label class="form-label success">To</label>
                        <input type="email" name="to" class="form-control" id="inputEmail4" placeholder="@gmail.com">
                      </div>
                    </div>
                    <br>

                    <div class="row">
                      <div class="col">
                        <label class="form-label success">Message</label>
                        <textarea id="summernote" name="msg" class="form-control" aria-label="With textarea"
                          placeholder="Type your message here"></textarea>
                      </div>
                    </div>

                    <br>
                    <br>
                    <div style="color:green;text-align:right;">
                      <td colspan="2" align-="center"><input type="submit" id="button" name="submit1"
                          class="btn btn-success" value="Send Message"></td>
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
            <?php } ?>
</body>

</html>