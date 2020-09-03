<?php
require '../session.php';
require '../connect.php';

if(isset($_GET['delete_id'])){
    $sql = "DELETE FROM pcmc WHERE id='$_GET[delete_id]'";
    if ($conn->query($sql) === TRUE)
    {
        header("Location:{$link}pages/manage_pcmc.php");
    } 
    else
    {
        echo "Error deleting record: " . $conn->error;
        header("Location: {$link}pages/manage_pcmc.php");
    }
}    
?>