<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RES: Registration</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles/main.css" />
    </head>

    <body style="color: slategray;height:auto;">
    	<div class="background-image"></div>
    	<div class="content">
    		<div class="container">
        		<div class="row justify-content-center h-100 pt-md-5 mt-md-5">
            		<div class="col-md-3 bg-rgba202030">
            			<h3 class="text-uppercase res-name">Rockford Emergency Services</h3>
            			<p class="side-info">
       	    				<ul>
                				<li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
                			<hr>
                				<li>Emails must have a valid email format</li>
                			<hr>
                				<li>Passwords must be at least 6 characters long</li>
                			<hr>
                				<li>Your password and confirmation must match exactly</li>
							<hr>
           						<li>Passwords must contain:
                					<ul class="side-info-list">
                    					<li>At least 8 characters or numbers.</li>
                    					<li>At least one lowercase letter (a..z)</li>
                    					<li>At least one number (0..9)</li>
                					</ul>
            					</li>
        					</ul>
        				</p>
					</div>

    		<div class="col-md-5 bg-rgba169"> 
        		<form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form">            
            		<div class="form-group mt-4">
            			<span class="text-primary">Username:</span>
                		<input type='text' name='username' id='username' placeholder="enter username here..." />
                		<small id="usrHelp" class="form-text"><span class="text-danger">*</span><span class="text-muted"> This is your unique identifier - duplicate usernames won't be accepted.</span></small>
            		</div>

            		<div class="form-group">
                		<span class="text-primary">Email:</span>
                		<input type="text" name="email" id="email" placeholder="enter email here..." />
            		</div>

           			<div class="form-group">
            			<span class="text-primary">Password:</span>
                		<input type="password" name="password" id="password" placeholder="enter password here..." />
            			<small id="pwdHelp" class="form-text"><span class="text-danger">*</span><span class="text-muted"> This will not be shared with anyone but the account holder.</span></small>
            		</div>

            		<div class="form-group">
                		<span class="text-primary">Confirm password:</span>
                		<input type="password" name="confirmpwd" id="confirmpwd" placeholder="confirm password here..." />
            		</div>

                	<input type="button" id="submitRegistration" value="Register me!" onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirmpwd);" />
        		</form>
        
        		<br /><small class="float-right text-muted mb-3">Return to the <a href="index.php" class="link">login page</a>.</small>
    		</div>
		</div>
		</div>     
	</body>
</html>