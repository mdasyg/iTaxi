<nav class="navbar navbar-inverse navbar-fixed-top">
		  
	<div class="container-fluid">
	    <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    			<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
			      	
		   	<a class="navbar-brand" href="#"> <img alt="Brand" src="images/brand_itaxi.png"> </a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	   		<ul class="nav navbar-nav navbar-left">
			    <li class="active"><a href="index.php"> <?php echo $home; ?></a></li>
				    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $help; ?><span class="caret"></a>
				  		<ul class="dropdown-menu">
						    <li><a href="#">Τι είναι?</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#">Πως λειτουργεί?</a></li>
					    </ul>
					</li>
				    <li><a href="#"><?php echo $aboutUs; ?></a></li> 
				    <li><a href="#"><?php echo $contact; ?></a></li> 
	   	    </ul>
	   		<ul class="nav navbar-nav navbar-right">
			    <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $signUp; ?></a></li>
			    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> <?php echo $signIn; ?></a></li>
			    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/flag_gr.png" alt="FLAG" > <?php echo $changeLangGR; ?></a>
					<ul class="dropdown-menu">
					   <li><a href="#"><img src="images/flag_uk.png" alt="FLAG" > <?php echo $changeLangUK; ?></a></li> 
					</ul>
				</li>
		    </ul>
		</div>
    </div>
</nav>