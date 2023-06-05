<?php
require_once "../config.php";
 
if(isset($_POST['return'])){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['cdate'];
    $com = $_POST['comment'];
  $role = 'Instructor';
    
    $pdf=$_FILES['pdf']['name'];
    $pdf_type=$_FILES['pdf']['type'];
    $pdf_size=$_FILES['pdf']['size'];
    $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
    $pdf_store="../upload/".$pdf;
    move_uploaded_file($pdf_tem_loc,$pdf_store);

    
    $sql = "UPDATE files SET `sender_email`='$from',`reciever_email`='$to', `reciever_role`='$role' ,`file_name`='$pdf', `comment`='$com',`date`='$date' ";
    $query = mysqli_query($con, $sql);

   
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a sele ct statement
       $sql = "SELECT * FROM createuser WHERE id = ?";
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
                    $role = $row["role"];
                    $email = $row["email"];
                    $password = $row["password"];
                    $dept = $row["dept"];
                    $contact = $row["contact"];
                    $s1 = $row["consult_sched1"];
                    $s2 = $row["consult_sched2"];
                } 
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($con);
    }  
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../img/logo.png" />
    <title>CvSU Syllabus | Email</title>
    <link rel="stylesheet" href="../styling/summer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
  <?php
   include('../session.php');
  $sql="SELECT * FROM createuser where id='$loggedin_id' ";
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
            <i  class="fa fa-file"></i>
            <span class="links_name">Received Files</span>
          </a>
        </li>

        <li>
          <a href="ChairpersonDept.php">
            <i  class="fa fa-building"></i>
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
          <span class="dashboard"><b> Hello, Chairperson!</b></span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search Here..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <span class="admin_name"><?php echo $rows['name']?></span>
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
                            <h3><b>Return Files</b></h3>
                            <h5>You can return files here just click the button below.</h5>
                            <hr>
                        </div>

                        <div class="container d-flex justify-content-center">
                            <form action="ChairpersonReturn.php" method="post" style="width: 70vw; min-width: 300px;" enctype="multipart/form-data">

                            <div class="row">
                                    <div class="col">
                                        <label class="form-label success">From</label>
                                        <input  class="form-control" id="inputEmail4" name="from" value="<?php echo $rows['email']?>" >
                                    </div>
                                    <?php }?>
                                    <?php 
                                      if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                        $sql = "SELECT * FROM files WHERE id='$id'";
                                        $query = mysqli_query($con, $sql);
                                        while($rows=mysqli_fetch_array($query)){
                                     ?>
                                    <div class="col">
                                        <label class="form-label success">To</label>
                                        <input class="form-control" id="inputEmail4" name="to" value="<?php echo $rows['sender_email']; ?>">
                                    </div>
                                    <?php 
                                  } 
                                  }
                                  ?>
                                </div>
                                
                                <br>
                                <div class="row">
                                    <div class="col">
                                          <label for="formFileSm" class="form-label">Select Date</label>
                                          <br>
                                          <input class="form-control" id="formFileLg" type="date" name="cdate" placeholder="dd-mm-yyyy">
                                      </div>

                                      <div class="col">
                                          <label class="form-label" for="form-label">Choose Your PDF File</label><br>
                                          <input class="form-control" id="pdf" type="file" name="pdf" value="" ><br><br>   
                                      </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label class="form-label success">Comment</label>
                                        <textarea id="summernote" name="comment" class="form-control" aria-label="With textarea" placeholder="Comment Here" required></textarea>
                                    </div>
                                </div>

                            <br>
                            <div style="color:green;text-align:right;">
                                    <td colspan="2" align-="center"><input type="submit" id="button" name="return" class="btn btn-success" value="&nbsp;&nbsp;&nbsp; Return &nbsp;&nbsp;&nbsp;"></td>
                            <br>
                                  </div>
                            <br>
                            
                            </form>
                        </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
