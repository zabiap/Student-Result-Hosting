<?php
require 'connect.php';
$combi="PCMC";

if(isset($_GET['reg_no']))
{    
    $sql = "SELECT * from pcmc WHERE reg_no='$_GET[reg_no]'";
    $result = $conn->query($sql);    
    $count = mysqli_num_rows($result);
    if($count == 1)
    {
        while($row = $result->fetch_assoc()) {
            $name = "$row[name]";
            $reg_no = "$row[reg_no]";
            $lang_id = "$row[lang_id]";
            $language_1 = "$row[language_1]";
            $english = "$row[english]";
            $physics_e = "$row[physics_e]";
            $physics_l = "$row[physics_l]";
            $chemistry_e = "$row[chemistry_e]";
            $chemistry_l = "$row[chemistry_l]";
            $maths = "$row[maths]";			
            $cs_e = "$row[cs_e]";			
            $cs_l = "$row[cs_l]";
            $res = "$row[result]";        
        }
        $total = $language_1+$english+$physics_e+$physics_l+$chemistry_e+$chemistry_l+$maths+$cs_e+$cs_l;        
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
        <link rel="stylesheet" href="css/main.css">

        <!--GOOGLE FONTS & ICONS-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--TITLE ICON-->
        <title>SDUPUC Result</title>
    </head>

    <style>
        .btn div{
            display: flex;
            align-items: center;            
            font-weight: 600;
            letter-spacing: 1.2px;
        }
        .btn{
            border-radius: 0px;
            padding: 8px 15px;
        }
        .btn span{
            margin-right: 7px;
        }
    </style>

    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <section>
            <div class="container" style="padding-bottom:50px;">
                <div class="row student_wrap" style="padding-top:75px;">
                    <div class="col-md-6 button_left" style="padding-left:0px; padding-right:0px;"><a href="index.php" class="btn btn-outline-dark"><div><span class="material-icons">arrow_back</span>GO BACK</div></a></div>
                    <div class="col-md-6 heading_right" style="padding-left:0px; padding-right:0px;"><h2 style="font-weight:600; text-align:right">SDUPUC I PUC RESULT</h2></div>
                </div>
                <div class="row" style="padding-top:25px">
                    <div class="col-md-12 res_top" style="padding:25px; border:1px solid black">
                        <div class="row">
                            <div class="col-md-6 student_name" style="border-right:1px solid black; display:flex; align-items:center;">
                                <h3 style="font-weight:600">Student's Name: <?php echo $name; ?></h3>
                            </div>
                            <div class="col-md-6 student_details">
                                <h4 style="font-weight:600; color:rgba(0,0,0,0.6);">Register Number: <?php echo $reg_no; ?></h4>
                                <h4 style="font-weight:600; color:rgba(0,0,0,0.6);">Combination: <?php echo $combi; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top:50px;">
                    <div class="col-md-12" style=" padding-left:0px; padding-right:0px;">
                        <table class="table table-bordered">
                            <thead >
                                <tr>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Marks Scored</th>
                                    <th scope="col">Maximum Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Kan / Hin</th>
                                    <td><?php echo $language_1; ?></td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th scope="row">English</th>
                                    <td><?php echo $english; ?></td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th scope="row">Physics Theory</th>
                                    <td><?php echo $physics_e; ?></td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <th scope="row">Physics Lab</th>
                                    <td><?php echo $physics_l; ?></td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <th scope="row">Chemistry Theory</th>
                                    <td><?php echo $chemistry_e; ?></td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <th scope="row">Chemistry Lab</th>
                                    <td><?php echo $chemistry_l; ?></td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <th scope="row">Maths</th>
                                    <td><?php echo $maths; ?></td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th scope="row">CS Theory</th>
                                    <td><?php echo $cs_e; ?></td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <th scope="row">CS Lab</th>
                                    <td><?php echo $cs_l; ?></td>
                                    <td>30</td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">Total Marks</th>
                                    <td><?php echo $total; ?></td>
                                    <td>600</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" style="padding-top:20px;">
                    <div class="col-md-12">
                        <h3 style="font-weight:600; text-align:right">RESULT : <?php echo $res; ?></h3>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'components/footer.php'; ?>
    </body>
</html>