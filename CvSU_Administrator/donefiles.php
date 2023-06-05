<?php
// Process delete operation after confirmation
if(isset($_GET['id'])){
    // Include config file
    require_once "config.php";
    
   

    $sql = "INSERT INTO done_files SELECT id, instructor_email, subject_code, subject_tittle, date_deadline FROM assign";
 
    if ($con->query($sql) === true) 
{ 
    echo "Data Copied Successfully."; 
    header('location: InstructorPending.php');
} 
}
?>