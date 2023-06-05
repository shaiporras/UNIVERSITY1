<?php
// Process delete operation after confirmation
if(isset($_POST['del'])){
    // Include config file
    require_once "config.php";
    
    $id = $_POST['id'];
    // Prepare a delete statement
    $sql = "DELETE FROM assign WHERE id ='$id'";
    
    $query = mysqli_query($con, $sql);
    header('Location: InstructorPage.php');
}
?>