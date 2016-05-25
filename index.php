<?php 
	include('strings_lang/lang_gr.php');
?>

<!DOCTYPE html>
<html lang="el">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $tab_title; ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom CSS -->
    <link href="css/taxi.css" rel="stylesheet">

  

    <script src="js/snap.svg-min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>


 	<div class="jumbotron">
    	<div class="container">
        	<h1 class="title"> <?php echo $title; ?></h1>
       	 	<p class="subTitle"><?php echo $subTitle; ?></p>
   		 </div>
	</div>

	<div class="container">
		<nav id="menu" class="menu">
			<button class="menu__handle"><span>Menu</span></button>
				<div class="menu__inner text-center">
					<ul>
						<li><a href="#"><?php echo  $menuText1;?></a></li>
						<li><a href="#"><?php echo  $menuText2;?></a></li>
						<li><a href="#"><?php echo  $menuText3;?></a></li>
						<li><a href="#"><?php echo  $menuText4;?></a></li>
					</ul>
				</div>
				<div class="morph-shape" data-morph-open="M-10,100c0,0,44-95,290-95c232,0,290,95,290,95" data-morph-close="M-10,100c0,0,44,95,290,95c232,0,290-95,290-95">
					<svg width="100%" height="100%" viewBox="0 0 560 200" preserveAspectRatio="none">
						<path fill="none" d="M-10,100c0,0,44,0,290,0c232,0,290,0,290,0"/>
					</svg>
				</div>
		</nav>
	</div><!-- /container -->


	<div class="container">
		<div class="row ">
			<div class="col-lg-6 col-md-6 floatright ">	
		  		<div class="project-list">
					<div class="project">
						<div class="project__card">
							<a href="passenger.php" class="project__image"><img src="images/taxi_call3.png" alt=""></a>
								<div class="project__detail">
										<h2 class="project__title"><a href="#"> <?php echo $passButton;?></a></h2>
										<small class="project__category"><a href="#"> <?php echo $passButtonSub; ?></a></small>
								</div>
						</div>
					</div>
				</div>
  			</div>
  			
  			<div class="col-lg-6 col-md-6">
  				<div class="project-list">
					<div class="project">
						<div class="project__card">
							<a href="" class="project__image"><img src="images/call_taxi.png" alt=""></a>
							<div class="project__detail">
								<h2 class="project__title"><a href="#"> <?php echo $driverButton;?> </a></h2>
								<small class="project__category"><a href="#"><?php echo $driverButtonSub;?></a></small>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
	



	<!-- jQuery (necessary for Menu navbar) -->
		<script src="js/classie.js"></script>
		<script>
			(function() {

				function SVGMenu( el, options ) {
					this.el = el;
					this.init();
				}

				SVGMenu.prototype.init = function() {
					this.trigger = this.el.querySelector( 'button.menu__handle' );
					this.shapeEl = this.el.querySelector( 'div.morph-shape' );

					var s = Snap( this.shapeEl.querySelector( 'svg' ) );
					this.pathEl = s.select( 'path' );
					this.paths = {
						reset : this.pathEl.attr( 'd' ),
						open : this.shapeEl.getAttribute( 'data-morph-open' ),
						close : this.shapeEl.getAttribute( 'data-morph-close' )
					};

					this.isOpen = false;

					this.initEvents();
				};

				SVGMenu.prototype.initEvents = function() {
					this.trigger.addEventListener( 'click', this.toggle.bind(this) );
				};

				SVGMenu.prototype.toggle = function() {
					var self = this;

					if( this.isOpen ) {
						classie.remove( self.el, 'menu--anim' );
						setTimeout( function() { classie.remove( self.el, 'menu--open' );	}, 250 );
						
						this.pathEl.stop().animate( { 'path' : this.paths.close }, 350, mina.easeout, function() {
							self.pathEl.stop().animate( { 'path' : self.paths.reset }, 700, mina.elastic );
						} );
					}
					else {
						classie.add( self.el, 'menu--anim' );
						setTimeout( function() { classie.add( self.el, 'menu--open' );	}, 250 );
						
						this.pathEl.stop().animate( { 'path' : this.paths.open }, 350, mina.backin, function() {
							self.pathEl.stop().animate( { 'path' : self.paths.reset }, 700, mina.elastic );
						} );
					}
					this.isOpen = !this.isOpen;
				};

				new SVGMenu( document.getElementById( 'menu' ) );

			})();
		</script>
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jQuery (necessary for icons Hover!!) -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.12.1.min.js"><\\/script>')</script>
	<!-- Place this tag right after the last button or just before your close body tag. -->
	<script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>

	<script src="js/jquery.hover3d.js" ></script>

	<script>
		$(document).ready(function(){
			$(".project").hover3d({
				selector: ".project__card",
				shine: false,
			});

			$(".movie").hover3d({
				selector: ".movie__card",
				shine: true,
				sensitivity: 20,
			});
		});

	</script>
  
  </body>
</html>