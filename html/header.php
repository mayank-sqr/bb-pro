<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<!--link rel="stylesheet" type="text/css" href="css/selectBox-styles.css" /-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>


	
	<!-- Mega Menu Script -->
	<!--script>
	$(document).ready(function(){
		 $('.Menu-button-parent').click(function(){
			$(this).toggleClass('opened');
			$('.menu').toggleClass('opened');
			$('.overlay').toggleClass('visible');

/* 			if($(this).is('.opened')){
			$(this).find('i').removeClass('fa-navicon').addClass('fa-remove');
			}else{
			$(this).find('i').removeClass('fa-remove').addClass('fa-navicon');
			} */
		}); 
	 $('body').click(function(e){
		/* alert($(e.target).attr('class')); */
		
	});	
	
	});
	</script-->

	<!--script>
	$(document).ready(function(){
		$('body').click(function(event){
			if($(event.target).hasClass('Menu-button-parent')){
				//$('.menu').removeClass('opened');
				return;
			}
			else if($(event.target).hasClass('mCSB_container')){
				//$('.menu').removeClass('opened');
				return;
			}
			else{
				$('.menu').removeClass('opened');
				$('.menu-button').removeClass('opened');
				$('.Menu-button-parent').removeClass('opened');
			}
		});
	});
	</script-->
  </head>
  <body>
    
	<header>
	<div class="container">
	<div class="row">
	
		<div class="header-inner-content">
			<div class="logo-parent">
			<a href="javascript:void(0);"><img src="images/logo.png"></a>
			</div>

			<div class="Menu-button-parent">
				MENU
				<div class="menu-button">
				<!--i class="fa fa-navicon"></i-->
				<!--img src="images/toggle-icon.png"-->
				</div>
			</div>

		</div>
	</div>
	</div>
	</header>
	
	<!--div class="menu content mCustomScrollbar">
		<nav>
			<ul class="submenu">
				<h3>Engage</h3>
				<li><a href="#">Conference</a></li>
				<li><a href="#">Workshops</a></li>
				<li><a href="#">Meetups</a></li>
				<li><a href="#">Webinars</a></li>
				<li><a href="#">Online Communities</a></li>
				<li><a href="#">Communities</a></li>
			</ul>
			
			<ul class="submenu">
				<h3>JOBS</h3>
				<li><a href="#">Find a Job</a></li>
				<li><a href="#">Post a Job</a></li>
			</ul>
			
			<ul class="submenu">
			<h3>TRAINING</h3>
				<li><a href="#">Consulting</a></li>
				<li><a href="#">Online Training</a></li>
			</ul>
			
			<ul class="submenu">
			<h3>LEARN</h3>
				<li><a href="#">Library</a></li>
				<li><a href="#">About </a></li>
			</ul>
		</nav>
	</div-->
	
	<div class="clear"></div>