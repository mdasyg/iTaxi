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
    <title><?php echo $tab_title_pass; ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom CSS -->
    <link href="css/taxi.css" rel="stylesheet">
    <link href="css/maps.css" rel="stylesheet">

    <!-- script for toggle nav bar-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- JAVASCRIPT FOR GOOGLE MAPS API -->
     <!-- YOUR_API_KEY = AIzaSyBxd9fjlP6dDhX28RP8su4_pvAindV0NJU -->
     <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxd9fjlP6dDhX28RP8su4_pvAindV0NJU&callback=initMap">
    </script>
       
    <script>
      var map;
      function initMap() {
        var location = new google.maps.LatLng(37.59, 23.44);
        
        map = new google.maps.Map(document.getElementById('map'), {
        center: location,
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.  FIND
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
            var marker = new google.maps.Marker({
            position: initialLocation, 
            map: map
          });
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }
      

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>

    <script src="js/snap.svg-min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>

	<div id="menu">
		<?php require_once("navbar.php"); ?>
	</div>

    </br></br></br>
    <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-lg-5 col-md-5" >
            <div class="passenger_box"> 
                <!--Sidebar content-->
                <img src="images/taxi_mov.gif">
                <p><?php echo $text_pass_box;?></p>

                <div class ="passenger_form">
	                <form role="form">
        					  <div class="form-group has-feedback">
        					    <label for="curent_loc"> <?php echo $pass_curent_loc; ?></label>
        					    <input type="text" class="form-control" id="curent_loc">
        					  </div>
        					  <div class="form-group">
        					    <label for="destination"><?php echo $pass_destin; ?></label>
        					    <input type="text" class="form-control" id="destination">
        					  </div>
                    <div class="row">
                      <div class="col-xs-6">
              					  <div class="form-group ">
              					    <label for="num_of_passeng"><?php echo $num_of_passengers; ?></label>
              					    <select class="form-control" id="num_of_passeng">
              					      <option>1</option>
              					      <option>2</option>
              					      <option>3</option>
              					      <option>4</option>
              					    </select>
              					  </div>
                      </div>
                      <div class="col-xs-6">
                          <div class="form-group">
                            <label for="num_of_packages"><?php echo $num_of_packages; ?></label>
                            <select class="form-control" id="num_of_packages">
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                      </div>
                    </div>
                     <div class="form-group">
                      <label><input type="checkbox" data-group-cls="btn-group-vertical"> <?php echo $share_route; ?></label>
                    </div>
        					  <div class="form-group">
        					    <label><input type="checkbox" id="input-2" > <?php echo $scheduled_call_taxi; ?></label>
        					  </div>
        					  <button type="submit" class="btn btn-default">Submit</button>
        					</form>
				        </div>
            </div>
          </div>
          <div class="google_map" id="map"></div>
        </div>
    </div>

 
</body>
</html>