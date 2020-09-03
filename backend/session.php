<?php
    require "connect.php";

    /*$sql = "SELECT link FROM links WHERE id=1";
            $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    $link=$row["link"];
                }*/

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:http://localhost/result/backend/index.php");
   }
?>