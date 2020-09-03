<style>
    .navbar{
        height: 80px;
    }
    .navbar-brand{
        font-weight: 700;        
    }
    .nav-item:not(.last){
        margin-right:20px;
    }
    .navbar .btn{
        display: flex;
        align-items: center;
        font-weight: 600;
        border-radius: 0px;
        letter-spacing: 1.2px;
    }
    .navbar .btn span{
        margin-right:15px;
    }
    @media only screen and (max-width: 768px) {
        .navbar{
            height: auto!important;        
        }
        .nav-item{
            max-width: 200px;
            padding-bottom: 20px;
        }
        .navbar-collapse{
            padding-top: 20px;
        }

    }
</style>

<?php
    require '../connect.php';
?>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $link; ?>backend/pages/manage.php">SDUPUC RESULT BACKEND</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-success dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons">add_box</span>ADD</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo $link; ?>backend/pages/add_pcmb.php">PCMB</a>
                        <a class="dropdown-item" href="<?php echo $link; ?>backend/pages/add_pcmc.php">PCMC</a>
                        <a class="dropdown-item" href="<?php echo $link; ?>backend/pages/add_ebac.php">EBAC</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo $link; ?>backend/pages/add_excel.php">Add Excel</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons">supervised_user_circle</span>MANAGE</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo $link; ?>backend/pages/manage_pcmb.php">PCMB</a>
                        <a class="dropdown-item" href="<?php echo $link; ?>backend/pages/manage_pcmc.php">PCMC</a>
                        <a class="dropdown-item" href="<?php echo $link; ?>backend/pages/manage_ebac.php">EBAC</a>
                    </div>
                </li>                
                <li class="nav-item last">
                    <a class="btn btn-outline-danger" href="<?php echo $link; ?>backend/logout.php"><span class="material-icons">exit_to_app</span>LOGOUT</a>
                </li>
            </ul>        
        </div>
    </div>
</nav>