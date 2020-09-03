<?php
require 'connect.php';

if(isset($_POST['reg_no']))
{    
    $sql = "SELECT * from pcmb WHERE reg_no='$_POST[reg_no]'";
    $result = $conn->query($sql);    
    $count = mysqli_num_rows($result);
    if($count == 1)
    {     
        header("location:result_pcmb.php?reg_no=".$_POST['reg_no']);
    }
    else
    {
        $sql = "SELECT * from pcmc WHERE reg_no='$_POST[reg_no]'";
        $result = $conn->query($sql);    
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            header("location:result_pcmc.php?reg_no=".$_POST['reg_no']);
        }
        else
        {
            $sql = "SELECT * from ebac WHERE reg_no='$_POST[reg_no]'";
            $result = $conn->query($sql);    
            $count = mysqli_num_rows($result);
            if($count == 1)
            {
                header("location:result_ebac.php?reg_no=".$_POST['reg_no']);
            }
        }
    }
}
?>

<style>
    .btn div{
        display: flex;
        align-items: center;            
        font-weight: 600;
        letter-spacing: 1.2px;
    }
    a.btn.btn-outline-danger{
        border-radius: 0px;
        padding: 8px 15px;
    }
    .btn span{
        margin-right: 7px;
    }
</style>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">

        <!--GOOGLE FONTS-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--TITLE ICON-->
        <title>SDUPUC Result</title>
    </head>

    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <section style="height:100vh">
            <div class="container" style="display:flex;align-items:center; justify-content:center; height:100vh">
                <div class="row" style="border: 1px solid black; padding:50px;">
                    <div class="col">
                        <h2 style="text-align:center; font-weight:600">Registration Number not found.<br>Please try again.</h2>
                        <div class="row" style="display:flex;align-items:center; justify-content:center; padding-top:20px;" >
                            <a href="index.php" class="btn btn-outline-danger"><div><span class="material-icons">arrow_back</span>GO BACK</div></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>