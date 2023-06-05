<?php
require_once "config.php";
 
// Define variables and initialize with empty values
$id = $name = $role = $email = $dept="";
$name_err = $role_err = $email_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $dept = $_POST['dept'];
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
        } else{
        $name = $input_name;
    }
    
    // Validate address address
    $input_role = trim($_POST["role"]);
    if(empty($input_role)){
        $role_err = "Please fill the Role.";     
    } else{
        $role = $input_role;
    }
     // Validate email
     $input_email = trim($_POST["email"]);
     if(empty($input_email)){
         $email_err = "Please fill the email.";     
     } else{
         $email = $input_email;
     }
    
    // Check input errors before inserting in database
  if (empty($name_err) && empty($role_err) && empty($email_err)) {
    // Prepare an update statement
    $sql = "UPDATE createuser SET name='" . $_POST['name'] . "', role='" . $_POST['role'] . "', email='" . $_POST['email'] . "', dept='" . $_POST['dept'] . "' WHERE id='" . $_POST['id'] . "'";


    if ($con->query($sql) === TRUE) {
      echo "Record updated successfully";
      header('Location: AdminPage.php');
    } else {
      echo "Error updating record: " . $con->error;
    }

    $con->close();
  }
} else
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
                    $dept = $row["dept"];
                } 
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($con);
    }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8" />
    <title>CvSU Syllabus | Administrator</title>
    <link rel="stylesheet" href="styling/InstructorPage.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<?php
      include('session.php');
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
          <a href="AdminFiles.php.php">
            <i class="fa fa-file"></i>
            <span class="links_name">Syllabus Files</S></span>
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
          <span class="dashboard">Hello, Admin</span>
        </div>
        
        <div class="profile-details">
          <span class="admin_name"><?php echo $rows['name'];?></span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <?php }?>
      
      <div class="home-content">
        <section class="main">
            <div class="users">
                <div class="card">
                    <div class="container">
                        <div class="text-center mb-4">
                        <br>
                        <h3>Edit User Information</h3>
                        <h5>Below are the information that you can modify.</h5>
                        </div>

                    <div class="container d-flex justify-content-center">
                    <form action="" method="post" style="width: 70vw; min-width: 300px;">
                        <div class="row">

                            <div class="col">
                            <label class="form-label"> Name: </label>
                            <input type ="text" class="form-control" name="name" placeholder="Input your Name here" value="<?php echo $name; ?>">
                            </div>

                            <div class="col">
                            <label class="form-label"> Department: </label>
                            <input type ="text" class="form-control" name="dept" placeholder="Department"value="<?php echo $dept; ?>">
                            </div>

                        </div>
                        <br>

                        <div class="row">
                        <br>
                            <div class="col">
                            <label class="form-label"> Role: </label>
                            <input type ="text" class="form-control" name="role" placeholder="Input your Role here" value="<?php echo $role; ?>" >
                            </div>

                            <div class="col">
                            <label class="form-label"> Email: </label>
                            <input type ="text" class="form-control" name="email" placeholder="Input your Email here"value="<?php echo $email; ?>">
                            </div>
                        </div>


                
                            <br>
                            <div>
                            <br>
                            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                            <td colspan="2" align-="center"><input type="submit" id="button" name="submit" class="btn btn-success" value="&nbsp;&nbsp;&nbsp; Save &nbsp;&nbsp;&nbsp;"></td>
                            <br></br>
                            
                        </div>

                    </form>
                </div>
            </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </div>
</div>
    
   
</body>
</html>