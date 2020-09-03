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
        <link rel="stylesheet" href="<?php echo $link; ?>css/main.css">

        <!--GOOGLE FONTS & ICONS-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--TITLE ICON-->
        <title>SDUPUC Result</title>
    </head>

    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <?php include 'navbar.php'; ?>

        <section style="padding-top: 130px;">
            <div class="container">
                <h1 style="font-weight: 600; padding-bottom: 35px;">Add Excel</h1>
                <form action="insert_excel.php" method="post" enctype="multipart/form-data">
                    <div class="form-group" style="padding-bottom:35px;">
                        <h3 style="font-weight:600; padding-bottom:20px;">PCMB</h3>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="pcmb" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                            <div class="input-group-append">                                
                                <button class="btn btn-outline-primary">Upload</button>
                            </div>                            
                        </div>
                    </div>
                </form>
                <form action="insert_excel.php" method="post" enctype="multipart/form-data">
                    <div class="form-group" style="padding-bottom:35px;">
                        <h3 style="font-weight:600; padding-bottom:20px;">PCMC</h3>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="pcmc" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                            <div class="input-group-append">                                
                                <button class="btn btn-outline-primary">Upload</button>
                            </div>                            
                        </div>
                    </div>
                </form>
                <form action="insert_excel.php" method="post" enctype="multipart/form-data">
                    <div class="form-group" style="padding-bottom:35px;">
                        <h3 style="font-weight:600; padding-bottom:20px;">EBAC</h3>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="ebac" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                            <div class="input-group-append">                                
                                <button class="btn btn-outline-primary">Upload</button>
                            </div>                            
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>