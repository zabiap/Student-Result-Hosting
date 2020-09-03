<?php
require '../session.php';
require '../connect.php';

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/main.css">

        <!--GOOGLE FONTS & ICONS-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--TITLE ICON-->
        <title>SDUPUC Result</title>
    </head>

    <style>
        .left li{
            padding-top:5px;
            padding-bottom:5px;
        }
        .butn .btn{
            display: flex;
            align-items: center;
            font-weight: 600;
            border-radius: 0px;
            letter-spacing: 1.2px;            
        }
        .butn .btn span{
            margin-right:15px;
        }
    </style>

    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <?php include 'navbar.php' ?>

        <section style="height: 100vh;"> 
            <div class="container" style="height:100vh">
                <div class="row" style="height:100%">
                    <div class="col-md-6 left" style="display:flex; align-items:center;">
                        <div>
                            <h1 style="font-weight:600;">ADD | EDIT | DELETE</h1>
                            <ul>
                                <li>Add Students by entering their details.</li>
                                <li>Manage the students in the database section-wise.</li>
                                <li>Edit and Delete student already in the database</li>
                            </ul></div>
                    </div>
                    <div class="col-md-6" style="display:flex; align-items:center; justify-content:center;">
                        <div>
                            <div class="row" style="border: 1px solid black;">
                                <div class="col-md-12">
                                    <div class="row" style="height:100px; display:flex; align-items:center;">
                                        <h3 style="font-weight:600; padding-left:20px;"><div style="display:flex; align-items:center;"><span class="material-icons" style="margin-right:10px; font-size:30px;">account_box</span>ADD STUDENT</div></h3>
                                    </div>
                                    <div class="row butn" style="padding-bottom:25px;" >
                                        <div class="col-md-4"><a class="btn btn-outline-success" href="<?php echo $link; ?>backend/pages/add_pcmb.php" ><span class="material-icons">add_box</span>PCMB</a></div>
                                        <div class="col-md-4"><a class="btn btn-outline-success" href="<?php echo $link; ?>backend/pages/add_pcmc.php" ><span class="material-icons">add_box</span>PCMC</a></div>
                                        <div class="col-md-4"><a class="btn btn-outline-success" href="<?php echo $link; ?>backend/pages/add_ebac.php" ><span class="material-icons">add_box</span>EBAC</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border: 1px solid black;margin-top:50px;">
                                <div class="col-md-12">
                                    <div class="row" style="height:100px; display:flex; align-items:center;">
                                        <h3 style="font-weight:600; padding-left:20px;"><div style="display:flex; align-items:center;"><span class="material-icons" style="margin-right:10px; font-size:30px;">account_box</span>MANAGE STUDENTS</div></h3>
                                    </div>
                                    <div class="row butn" style="padding-bottom:25px;" >
                                        <div class="col-md-4"><a class="btn btn-outline-primary" href="<?php echo $link; ?>backend/pages/manage_pcmb.php" ><span class="material-icons">supervised_user_circle</span>PCMB</a></div>
                                        <div class="col-md-4"><a class="btn btn-outline-primary" href="<?php echo $link; ?>backend/pages/manage_pcmc.php" ><span class="material-icons">supervised_user_circle</span>PCMC</a></div>
                                        <div class="col-md-4"><a class="btn btn-outline-primary" href="<?php echo $link; ?>backend/pages/manage_ebac.php" ><span class="material-icons">supervised_user_circle</span>EBAC</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>                
            </div>
        </section>

    </body>
</html>