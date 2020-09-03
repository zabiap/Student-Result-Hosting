<?php
require "connect.php";

session_start();
if(isset($_SESSION['login_user'])){
    session_destroy();
    header("location:{$link}backend/index.php");
}
else{
    header("location:{$link}backend/index.php");
}

?>