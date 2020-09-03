<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">

        <!--GOOGLE FONTS-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

        <!--TITLE ICON-->
        <title>SDUPUC Result</title>
    </head>

    <style>
        form{
            border: 2px solid black;
            padding: 55px 40px;
        }
        input.form-control{
            border-radius: 0px;
        }
        select.form-control{
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

        <section class="index" stye="min-height: 100vh">
            <div class="container">
                <div class="row" style="height: calc(100vh - 80px);">
                    <div class="col-md-6" style="display:flex; align-items:center">
                        <div>
                            <h1 style="font-weight:600; font-size:60px; padding-bottom:20px;">SDUPUC I PUC RESULTS</h1>
                            <ul style="font-size: 18px;">
                                <li>Enter your Registration Number</li>
                                <li>Click Submit</li>
                                <li>You will be redirected to the result page</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6" style="display:flex; align-items:center; justify-content: center;">
                        <form action="result.php" method="post">
                            <div class="form-row" style="padding-bottom: 25px;">
                                <label>Register Number</label>
                                <input id="reg_no" class="form-control" name="reg_no" type="text" placeholder="Enter Register No." required />
                            </div>                            
                            <div class="form-row">
                                <button type="submit" class="btn btn-dark" style="margin-top: 10px">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <!--<section class="result_temp">
            <div class="container" style="min-height:100vh; display:flex; align-items:center; justify-content:center;">
                <div class="row">
                    <div class="col-md-12">
                        <div style="border: 1px solid black;padding:40px;; text-align:center!important;">
                            <h1 style="font-weight:600; padding-bottom:25px;">SDUPUC I PUC RESULT</h1>
                            <h3>The results will be announed at 11 AM on 5th May 2020</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        
        <?php include 'components/footer.php'; ?> 

        <script>
            $(document).ready(function(){                
                if($(window).width() < 767){
                    
                    $( "#reg_no" ).focus(function() {
                        $("#footer").hide();
                    });

                    $( "#reg_no" ).focusout(function() {
                        $("#footer").show();
                    });                    
                }
            })
        </script>
    </body>
</html>