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
  <title>CvSU Syllabus | Revision </title>
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
          <span class="dashboard"><b>Hello, Instructor</b></span>
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
            <div class="text-center mb-4">
                  <br></br>
                  <h3><b>Revision Here</b></h3>
                  <h5>Below here is the table consisting the syllabus which you can edit and submit.</h5>
                </div>
              <table class="table table-hover text-center">
                <thead class="table-success mb-3">
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Sender Email</th>
                    <th scope="col">Files</th>
                    <th scope="col">Comment</th>
                    <th scope="col">View Files</th>
                    <th scope="col">Download Files</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include('../config.php');

                  $email = $_SESSION['email'];

                  $sql = "SELECT * FROM files WHERE reciever_email = '$email' ";
                  $result = mysqli_query($con, $sql);
                  while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                      <td>
                        <?php echo $row['id']; ?>
                      </td>
                      <td>
                        <?php echo $row['sender_email']; ?>
                      </td>
                      <td>
                        <?php echo $row['file_name']; ?>
                      </td>
                      <td>
                        <?php echo $row['comment']; ?>
                      </td>
                      <td><a href="upload/<?php echo $row['file_name']; ?>" class="btn btn-primary  "
                          target="_blank">View</a></td>
                      <td><a href="upload/<?php echo $row['file_name']; ?>" class="btn btn-success" download>Download</td>
                      <td><a href="InstructorEditPDF.php?id=<?php echo $row['Sy_id']; ?>"
                          class="btn btn-warning">Access File</a></td>
                    </tr>
                    <?php
                  }
                  ?>

                </tbody>
              </table>



            </div>
          </div>
          <br></br>

        </section>

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
        </script>
        <script>
          function copyToClipboard(val, event) {
            var inp = document.createElement('input');
            document.body.appendChild(inp)
            inp.value = val;
            inp.select();
            document.execCommand('copy', false);
            inp.remove();
            alert('copied');
          }
        </script>

      <?php }
  ?>
</body>

</html