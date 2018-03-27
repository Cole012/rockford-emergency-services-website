<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RES: Log-in</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="background-image" style="background-image: url('https://www.cityofcalera.org/images/pages/N393/lobby.jpg');"></div>
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 t-55 bg-rgba169">
                        <h2 class="res-name text-center mt-4">Rockford Emergency Services</h2>
                        <form action="includes/process_login.php" method="post" name="login_form" autocomplete="off">
                            <div class="form-group mt-3">
                                <span class="text-primary">Email:</span> 
                                <input type="text" name="email" />
                            </div>

                            <div class="form-group">                        
                                <span class="text-primary">Password:</span> 
                                <input type="password" name="password" id="password"/>
                            </div>

                            <input type="button" id="submitRegistration" value="Login" onclick="formhash(this.form, this.form.password);" />
                        </form>
                        <br />
                        <span class="text-muted">
                        <?php
                                                
                            if (isset($_GET['error'])) {
                                echo '<small class="text-left text-warning pb-0"><span class="text-danger">* </span>The credentials you entered were incorrect.</small><br />';
                            }
                        
                            if (login_check($mysqli) == true) {
                                echo '<small class="float-left text-left ovrEllip pb-3">Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</small>';
                                echo '<small class="float-right text-right ovrEllip">Do you want to change user? <a href="includes/logout.php">Log out</a>.</small>';
                            } else {
                                echo '<small class="float-left text-left ovrEllip pb-3">Currently logged ' . $logged . '.</small>';
                                echo "<small class='float-right text-right ovrEllip'>If you don't have a login, please <a href='register.php'>register</a>.</small>";
                            }
                        ?>   
                        </span>   
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>