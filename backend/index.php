<?php
require 'connect.php';
session_start();
$error="";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "SELECT id FROM users WHERE username = '$_POST[username]' and password = '$_POST[password]'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        $_SESSION['login_user'] = $myusername;
        header("location:http://localhost/result/backend/pages/manage.php");
    }
    else {
        $error= <<<EOT
        <div class="alert alert-danger" role="alert">Username or Password is incorrect!!!</div>
        EOT;
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $link; ?>css/main.css">

        <!--GOOGLE FONTS & ICONS-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--TITLE ICON-->
        <title>SDUPUC Result</title>
    </head>

    <style>
        form{
            border: 2px solid black;
            padding: 55px 40px;
        }
        .form-row{
            padding-bottom: 25px;
        }
        input.form-control{
            border-radius: 0px;
        }
        .btn{
            border-radius: 0px;
            background-color: black;
            font-weight: 600;
            letter-spacing: 2px;
        }
        li{
            padding-top:5px;
            padding-bottom: 5px;
        }
    </style>

    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <section stye="min-height: 100vh">
            <div class="container">
                <div class="row" style="height: 100vh">
                    <div class="col-md-6" style="display:flex; align-items:center">
                        <div>
                            <h1 style="font-weight:600; font-size:60px; padding-bottom:20px;">SDUPUC BACKEND</h1>
                            <ul style="font-size: 18px;">
                                <li>Enter the Username and password</li>
                                <li>Click Submit</li>
                                <li>Enter Student Details</li>
                                <li>Select the subject combination and enter the marks.</li>
                                <li>Submit the form to add a new result.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6" style="display:flex; align-items:center; justify-content: center;">
                        <form action="" method="post" autocomplete="on">
                            <div class="form-row">
                                <label>Username</label>
                                <input name="username" class="form-control" type="text" placeholder="Enter Username" />
                            </div>
                            <div class="form-row">
                                <label>Password</label>
                                <input name="password" class="form-control" type="password" placeholder="Enter Username" />
                            </div>
                            <?php echo($error); ?>
                            <div class="form-row" style="padding-bottom:0px">
                                <button type="submit" class="btn btn-dark" style="margin-top: 10px">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>