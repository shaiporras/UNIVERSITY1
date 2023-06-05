<?php
// Process delete operation after confirmation
if(isset($_POST['delete'])){
    // Include config file
    require_once "config.php";
    
    $id = $_POST['id'];
    // Prepare a delete statement
    $sql = "DELETE  FROM createuser WHERE id ='$id' ";

    $query = mysqli_query($con, $sql);
            // Records deleted successfully. Redirect to landing page
            header('location: AdminPage.php');
            exit();
        } 
    

?>