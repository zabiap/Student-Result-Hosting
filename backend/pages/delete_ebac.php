<?php
require '../session.php';
require '../connect.php';

if(isset($_GET['delete_id'])){
    $sql = "DELETE FROM ebac WHERE id='$_GET[delete_id]'";
    if ($conn->query($sql) === TRUE)
    {
        header("Location:{$link}pages/manage_ebac.php");
    } 
    else
    {
        echo "Error deleting record: " . $conn->error;
        header("Location: {$link}pages/manage_ebac.php");
    }
}    
?>