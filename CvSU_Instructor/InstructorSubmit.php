<?php
 include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../img/logo.png" />
    <title>CvSU Syllabus | Submit </title>
    <link rel="stylesheet" href="../styling/InstructorPage.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
  <?php
$sql="SELECT * FROM createuser where id=$loggedin_id";
$result=mysqli_query($con,$sql);
$GLOBALS['InstrId'] = $loggedin_id;
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
          <span class="dashboard">Hello, Instructor!</span>
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
            <div class="container">
        <div class="text-center mb-4">
            <br>
            <h3><b>Submit Syllabus</b></h3>
            <h5>In this form, you may submit your file document. Once the file has been signed, there will be automatically email sent to you.</h5>
            <hr>
          </div>

        <div class="container d-flex justify-content-center">
            <form action="InstructorSubmit.php" method="post" style="width: 70vw; min-width: 300px;" enctype="multipart/form-data">
                <div class="row">

                    <div class="col">
                        <label class="form-label"> Instructor Mail </label>
                        <input type ="text" class="form-control" name="semail" placeholder="Enter email" require value="<?php echo $rows['email'];?>" >
                    </div>
                    <?php
                  
                    }
                    ?>

                    <?php
                    $sql="SELECT * FROM createuser WHERE dept='Department of Computer Science' AND role ='Chairperson' ";
                    $result=mysqli_query($con,$sql);
                    while($rows=mysqli_fetch_array($result)){
                    ?> 
                    <div class="col">
                        <label class="form-label"> Chairperson Mail </label>
                        <input type ="text" class="form-control" name="remail" value="<?php echo $rows['email'];?>"> 
                    </div>
                  

                </div>

                <br>
                <div class="row">
                <div class="col">
                        <label class="form-label">Subject Code</label>
                        <select class="form-select" name="syll_id" aria-label="Default select example">
                          <?php
                          include('../config.php');
                          $sql1 = "SELECT DISTINCT `id`, `course_title` FROM `syllabus` WHERE `Instr_ID` = $InstrId";
                          $all_code = mysqli_query($con,$sql1);

                          while ($code = mysqli_fetch_array($all_code,MYSQLI_ASSOC)){;
                          ?>
                             <option value="<?php echo $code["id"];?>">
                              <?php echo $code["course_title"];?>
                              </option>
                            <?php } ?>
                        </select>
                      </div>
                  <div class="col">
                      <label for="formFileSm" class="form-label">Select Date</label>
                      <br>
                      <input class="form-control" id="formFileLg" type="date" name="cdate" placeholder="dd-mm-yyyy">
                  </div>

                  <div class="col">
                      <label for="formFileSm" class="form-label">Choose Your PDF File</label><br>
                      <input class="form-control" id="pdf" type="file" name="pdf" value="" ><br><br>
                      
                  </div> 
               
              
                <br>
                
                  <td colspan="2" align-="center">
                  <form action="InstructorSubmit.php" method="post"> 
                  <input type="submit" id="button" name="sublink" class="btn btn-success" value="Submit Syllabus">
                  </form> 
                </td>
                  </div> 
                </div>
                <br></br>

                
                    <?php

                    include('../config.php');
                    

                    if(isset($_POST['sublink'])){
                      $semail = $_POST['semail'];
                      $remail = $_POST['remail'];
                      $role = 'Chairperson';
                      $date = $_POST['cdate'];
                      $Sy_id = $_POST['syll_id'];
                    
                      $pdf=$_FILES['pdf']['name'];
                      $pdf_type=$_FILES['pdf']['type'];
                      $pdf_size=$_FILES['pdf']['size'];
                      $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                      $pdf_store="../upload/".$pdf;

                      move_uploaded_file($pdf_tem_loc,$pdf_store);

                            $sql ="INSERT INTO files(sender_email, reciever_email, reciever_role, file_name, comment, date, Sy_id) VALUES ('$semail','$remail','$role','$pdf','$date', '' ,'$Sy_id')";

                      $query = mysqli_query($con, $sql);
                      ?>
                         <script>swal("You successfully send the syllabus", "click the button", "success");</script>
                      <?php
                     
                    }
                    ?> 
                      <?php } ?>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    

       

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

            swal("A wild Pikachu appeared! What do you want to do?", {
  buttons: {
    cancel: "Run away!",
    catch: {
      text: "Throw Pokéball!",
      value: "catch",
    },
    defeat: true,
  },
})
.then((value) => {
  switch (value) {
 
    case "defeat":
      swal("Pikachu fainted! You gained 500 XP!");
      break;
 
    case "catch":
      swal("Gotcha!", "Pikachu was caught!", "success");
      break;
 
    default:
      swal("Got away safely!");
  }
});

date = new Date().toLocaleDateString();
document.write(date);
    </script>
    
  </body>
</html>


