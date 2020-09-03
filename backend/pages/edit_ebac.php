<?php
require '../session.php';
require '../connect.php';
$message="";

$name = "";
$reg_no = "";
$lang_id = "";
$lang_1 = "";
$english = "";
$economics = "";
$business_studies = "";
$accountancy = "";
$cs_e = "";
$cs_l = "";
$res = "";
$kan = "";
$hin = "";

if(isset($_GET['id'])) {
    $sql = "SELECT * from ebac WHERE id='$_GET[id]'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $name = "$row[name]";
        $reg_no = "$row[reg_no]";
        $lang_id = "$row[lang_id]";
        $lang_1 = "$row[lang_1]";
        $english = "$row[english]";
        $economics = "$row[economics]";
        $business_studies = "$row[buisness_studies]";
        $accountancy = "$row[accountancy]";	
        $cs_e = "$row[cs_e]";			
        $cs_l = "$row[cs_l]";
        $res = "$row[result]";
    }
    if($lang_id == 1){
        $kan = "selected";
        $hin = "";
    }
    else{
        $kan = "";
        $hin = "selected";
    }
    if($res=="PROMOTED"){
        $promoted="selected";
        $detained="";
        $absent="";
    }
    else if($res=="DETAINED"){
        $promoted="";
        $detained="selected";
        $absent="";
    }
    else if($res=="ABSENT"){
        $promoted="";
        $detained="";
        $absent="selected";
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $sql = "UPDATE ebac SET name='$_POST[name]', reg_no='$_POST[reg_no]', lang_id= '$_POST[lang_id]', lang_1= '$_POST[lang_1]' , english='$_POST[english]', economics='$_POST[economics]', buisness_studies='$_POST[business_studies]', accountancy='$_POST[accountancy]', cs_e='$_POST[cs_e]', cs_l= '$_POST[cs_l]', result= '$_POST[result]' WHERE id='$_GET[id]'";
    if ($conn->query($sql) === TRUE) 
    {
        $message= <<<EOT
        <div class="alert alert-success" role="alert">Record updated successfully!!!</div>
        EOT;  
    }
    else
    {
        $message= <<<EOT
        <div class="alert alert-danger" role="alert">Error!!! Couldn't create record</div>
        EOT;
        echo($conn -> error);
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
        .form-row
        {
            padding-bottom: 25px;
        }        
        label{
            font-weight: 600;
        }
        input{
            border-radius: 0px!important;
            font-size: 20px;
        }
        select{
            border-radius: 0px !important;
        }
        .btn{
            border-radius: 0px;
            font-weight: 600;
            letter-spacing: 1.2px;
        }
    </style>

    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>        

        <?php include 'navbar.php' ?>

        <section style="padding-top:125px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8"><h1 style="font-weight:600">Edit Student</h1></div>
                            <div class="col-md-4"><?php echo $message; ?></div>
                        </div>
                        <form action="" method="post" autocomplete="off" style="padding-top:50px;">
                            <div class="form-row">
                                <div class="col">
                                    <label>Student Name</label>
                                    <input name="name" value="<?php echo $name; ?>" type="text" class="form-control" placeholder="Student Name" required/>
                                </div>
                                <div class="col">
                                    <label>Registration Number</label>
                                    <input name="reg_no" value="<?php echo $reg_no; ?>" type="text" class="form-control" placeholder="Reg No" required/>
                                </div>
                            </div>
                            <h3 style="font-weight:600; padding-top:25px; padding-bottom:25px">Marks</h3>
                            <div class="form-row">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Subject</th>
                                            <th scope="col">External</th>
                                            <th scope="col">Lab</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <select class="form-control" name="lang_id" required> 
                                                    <option value="1" <?php echo $kan; ?> >Kannada</option>
                                                    <option value="2" <?php echo $hin; ?> >Hindi</option>
                                                </select>
                                            </th>
                                            <td colspan="2"><input name="lang_1" value="<?php echo $lang_1; ?>" type="number" class="form-control" placeholder="Marks" /></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">English</th>
                                            <td colspan="2"><input name="english" value="<?php echo $english; ?>" type="number" class="form-control" placeholder="Marks" /></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Economics</th>
                                            <td colspan="2"><input name="economics" value="<?php echo $economics; ?>" type="number" class="form-control" placeholder="Marks" required/></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Business Studies</th>
                                            <td colspan="2"><input name="business_studies" value="<?php echo $business_studies; ?>" type="number" class="form-control" placeholder="Marks" required/></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Accountancy</th>
                                            <td colspan="2"><input name="accountancy" value="<?php echo $accountancy; ?>" type="number" class="form-control" placeholder="Marks" required/></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Computer Science</th>
                                            <td><input name="cs_e" value="<?php echo $cs_e; ?>"  type="number" class="form-control" name="" placeholder="Marks" required/></td>
                                            <td><input name="cs_l" value="<?php echo $cs_l; ?>" type="number" class="form-control" name="" placeholder="Marks" required/></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Result</th>
                                            <td colspan="2">
                                                <select class="form-control" name="result" required> 
                                                    <option value="PROMOTED" <?php echo $promoted; ?> >PROMOTED</option>
                                                    <option value="DETAINED" <?php echo $detained; ?> >DETAINED</option>
                                                    <option value="ABSENT" <?php echo $absent; ?> >ABSENT</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-row">
                                <button class="btn btn-primary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>