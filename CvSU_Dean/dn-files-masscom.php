<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/logo.png" />
    <title>CvSU Syllabus | Dean</title>
    <link rel="stylesheet" href="../styling/InstructorPage.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            <i  class="fa fa-building"></i>
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
          <<span class="dashboard"><b> Hello, Dean! </b></span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search Here..." />
          <i class="bx bx-search"></i>
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
      <table class="table table-hover text-center">
            <thead class="table-success mb-3">
            <br></br>
                <h3><b>Office Administration Management Department</b></h3>
                <br></br>
                <tr>
                    <th>ID</th>
                    <th>Sender Email</th>
                    <th>Reciever Email</th>
                    <th>Reciever Role</th>
                    <th>Reciever Department</th>
                    <th>File Name</th>
                    <th>Date</th>
                    <th>View</th>
                    <th>Download</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
                include('../config.php');
           
                $email = $_SESSION['email'];
                
                $sql = "SELECT * FROM files WHERE reciever_dept = 'Department of Languages and Mass Communication' and reciever_role = 'Chairperson'";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)){
                  
                   ?>

               
               
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['sender_email']; ?></td>
                    <td><?php echo $row['reciver_email']; ?></td>
                    <td><?php echo $row['reciever_role']; ?></td>
                    <td><?php echo $row['reciever_dept']; ?></td>
                    <td><?php echo $row['file_name']; ?></td>
                   
                    <td><?php echo $row['date']; ?></td>
                    <td><a href="upload/<?php echo $row['file_name']; ?>" target="_blank">View</a></td>
                    <td><a href="upload/<?php echo $row['file_name']; ?>" download>Download</td>
                </tr>
                <?php
                }
              ?>
                
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
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
    </script>
    <?php
            
          }
             
          ?>
  </body>
</html>