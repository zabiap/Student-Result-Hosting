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
        .edit{
            color: rgba(0,0,255,0.5);
        }
        .delete{
            color: rgba(255,0,0,0.5);
        }
        .edit:hover{
            color: rgba(0,0,255,0.8);
        }
        .delete:hover{
            color: rgba(255,0,0,0.8);
        }
    </style>

    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <?php include 'navbar.php' ?>

        <section style="padding-top:150px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6"><h1 style="font-weight:600;">Manage All PCMC Students</h1></div>
                    <div class="col-md-6"></div>
                </div>
            </div>
            <div class="container-fluid" style="padding-left:0px; padding-right:0px; padding-top:50px;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Reg No</th>
                            <th scope="col">Language ID</th>
                            <th scope="col">Language-1</th>
                            <th scope="col">English</th>
                            <th scope="col">Physics Ext</th>
                            <th scope="col">Physics Lab</th>
                            <th scope="col">Chemistry Ext</th>
                            <th scope="col">Chemistry Lab</th>
                            <th scope="col">Maths</th>
                            <th scope="col">CS Ext</th>
                            <th scope="col">CS Lab</th>
                            <th scope="col">Result</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>                        

                        <?php
    $sql = "SELECT * FROM pcmc";        
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["id"];?></td>
                            <td><?php echo $row["name"];?></td>
                            <td><?php echo $row["reg_no"];?></td>
                            <td><?php echo $row["lang_id"];?></td>
                            <td><?php echo $row["language_1"];?></td>
                            <td><?php echo $row["english"];?></td>
                            <td><?php echo $row["physics_e"];?></td>
                            <td><?php echo $row["physics_l"];?></td>
                            <td><?php echo $row["chemistry_e"];?></td>
                            <td><?php echo $row["chemistry_l"];?></td>
                            <td><?php echo $row["maths"];?></td>
                            <td><?php echo $row["cs_e"];?></td>
                            <td><?php echo $row["cs_l"];?></td>
                            <td><?php echo $row["result"];?></td>
                            <td style="text-align:center;"><a class="edit" href="edit_pcmc.php/?id=<?php echo $row["id"];?>"><span class="material-icons">edit</span></a></td>
                            <td style="text-align:center;"><a class="delete" href="delete_pcmc.php/?id=<?php echo $row["id"];?>"><span class="material-icons">delete_forever</span></a></td>
                        </tr>
                        <?php
        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>        
    </body>
</html>