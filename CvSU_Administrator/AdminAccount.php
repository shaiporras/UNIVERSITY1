
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8" />
    <title>CvSU Syllabus | Administrator</title>
    <link rel="stylesheet" href="../styling/InstructorPage.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<?php
      include('../session.php');
        $sql="SELECT * FROM createuser where id=$loggedin_id";
        $result=mysqli_query($con,$sql);

        while($rows=mysqli_fetch_array($result)){
        ?>

<div class="sidebar">
      <div class="logo-details">
            <img class="logo" src="img/logo.png" alt="logo" style="width: 100px;">
            <span class="logo_name">CvSU <br> Syllabus</span>
      </div>
      <br></br>
      <ul class="nav-links">
      <li>
          <a href="AdminPage.php">
            <i class="fa fa-home"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="AdminAccount.php">
            <i class="fa fa-info-circle"></i>
            <span class="links_name">Account</span>
          </a>
        </li>
        <li>
          <a href="AdminDept.php">
            <i  class="fa fa-building"></i>
            <span class="links_name">Departments</span>
          </a>
        </li>

        <li>
          <a href="AdminFiles.php">
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
          <span class="dashboard">Hello, Admin</span>
        </div>
        
        <div class="profile-details">
          <span class="admin_name"><?php echo $rows['name'];?></span>
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
            <h3>Account Information</h3>
            <h5>Below here is the account information, which you can use in order to login within the system.</h5>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 70vw; min-width: 300px;">

              <div class="row">

                  

                  <div class="col">
                      <label class="form-label disabled"> Name </label>
                      <input type ="text" class="form-control" name="name" placeholder="Jewells Hije" disabled value="<?php echo $rows['name']?>">
                  </div>

              </div>
              <br>

              <div class="row">

                  <div class="col">
                      <label class="form-label disabled"> Department </label>
                      <input type ="text" class="form-control" name="dept" placeholder="Department of Computer Science" disabled value="<?php echo $rows['dept']?>">
                  </div>

                  <div class="col">
                      <label class="form-label disabled"> Role </label>
                      <input type ="text" class="form-control" name="role" placeholder="Instructor" disabled value="<?php echo $rows['role']?>">
                  </div>

              </div>
              <br>

              <div class="row">

                  <div class="col">
                      <label class="form-label disabled"> Email </label>
                      <input type ="text" class="form-control" name="email" placeholder="Email" disabled value="<?php echo $rows['email']?>">
                  </div>

                  <div class="col">
                      <label class="form-label disabled"> Password </label>
                      <input type ="text" class="form-control" name="pass" placeholder="Password" disabled value="<?php echo $rows['password']?>">
                  </div>

              </div>

              <br>
              <br>
              <br>

            </form>
        </div>
    </div>
   <?php }?>
</body>
</html>