<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Protected Page</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/home.css">
    </head>
    <body id="page-top" style="margin:0;padding-top:88px;">

    <?php if (login_check($mysqli) == true) : ?>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
        	<img class="img-fluid" src="img/res_logo.png" alt="RES_LOGO">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, <?php echo htmlentities($_SESSION['username']); ?></a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>User CP</a>
          				<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Profile</a>
          				<a class="dropdown-item" href="includes/logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Log out</a>
        			</div>
      			</li>
          </ul>
        </div>
      </div>
    </nav>

	<div class="container-fluid" style="padding:0;">
		<div class="row" style="float:none!important;margin:0;">
			<div class="col-lg-6 col-sm-12 order-lg-first order-sm-3">
			<figure class="figure">
					<img class="figure-img img-fluid" src="img/police.jpg" alt="err: image @ 'img/police.jpg' not found">
					<div class="centered text-center text-white"><h2 class="img-head"><i class="fas fa-shield-alt mr-2"></i>Police Department</h2></div>
				</figure>
			</div>
			<div class="col-lg-3 col-sm-6 order-lg-1 order-sm-2">
				<figure class="figure">
					<img class="figure-img img-fluid" src="img/ambulance.jpg" alt="err: image @ 'img/ambulance.jpg' not found">
					<div class="centered text-center text-white"><h2 class="img-head"><i class="fas fa-ambulance mr-2"></i>EMS</h2></div>
				</figure>
			</div>
			<div class="col-lg-3 col-sm-6 order-lg-last order-sm-1">
				<figure class="figure">
					<img class="figure-img img-fluid" src="img/fire.jpg" alt="err: image @ 'img/fire.jpg' not found">
					<div class="centered text-center text-white"><h2 class="img-head"><i class="fab fa-gripfire mr-2"></i>Fire</h2></div>
				</figure>
			</div>
		</div>
	</div>

	<div class="container cont-features">
		<div class="row justify-content-center">
			<div class="col-lg-3 col-sm-6" style="padding-left: 20px;">
				<figure class="figure fig-cstm">
					<img class="figure-img img-fluid" src="https://livedemo00.template-help.com/joomla_53859/images/pages/icon1.png" alt>
					<div class="text-center text-white pt-3"><h5>PS4</h5></div>
				</figure>
				<p class="text-muted" style="font-size:0.86rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ratione totam est libero, architecto cupiditate ad repudiandae dicta repellendus commodi sunt nihil.</p>
			</div>
			<div class="col-lg-3 col-sm-6" style="padding-left: 20px;">
				<figure class="figure fig-cstm">
					<img src="https://livedemo00.template-help.com/joomla_53859/images/pages/icon2.png" class="figure-img imd-fluid" alt>
					<div class="text-center text-white pt-3"><h5>XBOX</h5></div>
				</figure>
				<p class="text-muted" style="font-size:0.86rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ratione totam est libero, architecto cupiditate ad repudiandae dicta repellendus commodi sunt nihil.</p>				
			</div>
			<div class="col-lg-3 col-sm-6" style="padding-left: 20px;">
				<figure class="figure fig-cstm">
					<img src="https://livedemo00.template-help.com/joomla_53859/images/pages/icon3.png" class="figure-img imd-fluid" alt>
					<div class="text-center text-white pt-3"><h5>PC</h5></div>
				</figure>				
				<p class="text-muted" style="font-size:0.86rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ratione totam est libero, architecto cupiditate ad repudiandae dicta repellendus commodi sunt nihil.</p>
			</div>
			<div class="col-lg-3 col-sm-6" style="padding-left: 20px;">
				<figure class="figure fig-cstm">
					<img src=" https://livedemo00.template-help.com/joomla_53859/images/pages/icon4.png" class="figure-img imd-fluid" alt>
					<div class="text-center text-white pt-3"><h5>WII</h5></div>
				</figure>				
				<p class="text-muted" style="font-size:0.86rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ratione totam est libero, architecto cupiditate ad repudiandae dicta repellendus commodi sunt nihil.</p>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-white" style="padding-bottom:120px;">
		<div class="row">
			<div class="col-lg-12 text-center" style="padding-top:60px;margin-bottom:37px;">
				<h3>Latest news</h3>
			</div>
		</div>
		<div class="row text-center px-md-3 px-lg-5 mx-lg-2">
			<div class="col-md-3 px-md-2 px-lg-1">
				<img class="img-fluid" src="https://livedemo00.template-help.com/joomla_53859/images/pages/page1-img1.jpg" alt>
				<p class="date">02 May, 2018</p>
			</div>
			<div class="col-md-3 px-md-2">
				<img class="img-fluid" src="https://livedemo00.template-help.com/joomla_53859/images/pages/page1-img2.jpg" alt>
			</div>
			<div class="col-md-3 px-md-2">
				<img class="img-fluid" src="https://livedemo00.template-help.com/joomla_53859/images/pages/page1-img3.jpg" alt>
			</div>
			<div class="col-md-3 px-md-2">
				<img class="img-fluid" src="https://livedemo00.template-help.com/joomla_53859/images/pages/page1-img4.jpg" alt>
			</div>
		</div>
	</div>

    <footer class="py-5">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Cole 2017 - <?php echo date("Y"); ?></p>
      </div>
    </footer>

      <!--      <p>Welcome <?php //echo htmlentities($_SESSION['username']); ?>!</p>
            <p>Return to <a href="index.php">login page</a></p>-->
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>


		<script>
			$('.dropdown').on('show.bs.dropdown', function(e){
  				$(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
			});

			$('.dropdown').on('hide.bs.dropdown', function(e){
  				$(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
			});
		</script>
        <script src="vendor/jquery/jquery.min.js"></script>
    	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    	<script src="js/navbar.js"></script>
    	<script src="js/scrolling-nav.js"></script>
    </body>
</html>