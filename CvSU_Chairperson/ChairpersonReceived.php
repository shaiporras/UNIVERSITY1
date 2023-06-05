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
  <title>CvSU Syllabus | Manage Received Files </title>
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
                  <h3><b>Received Files from Instructors</b></h3>
                  <br></br>
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Sender Email</th>
                    <th scope="col">Files</th>
                    <th scope="col">View Files</th>
                    <th scope="col">Download Files</th>
                    <th scope="col"></th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include('../config.php');

                  $email = $_SESSION['email'];

                  $sql = "SELECT * FROM files WHERE reciever_email = '$email' and reciever_role = 'Chairperson'";
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
                      <td><a href="upload/<?php echo $row['file_name']; ?>" target="_blank">View</a></td>
                      <td><a href="upload/<?php echo $row['file_name']; ?>" download>Download</td>
                      <td>
                        <a href="ChairpersonPDF.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Edit & Save </a>
                      </td>
                      <form action="../pdf.php" method="POST" style="width: 70vw; min-width: 300px;">
                        <td colspan="2" align-="right"><input type="submit" id="button" name="submit"
                            class="btn btn-success" value="Generate Syllabus"></td>
                      </form>
                      <td><a href="ChairpersonReturn.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><b> Return
                            File </b></a>
                      </td>
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

</html>