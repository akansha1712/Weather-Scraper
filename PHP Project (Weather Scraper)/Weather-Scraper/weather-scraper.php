<?php
$weather="";
$error="";
if(isset($_GET['city'])){
	http://api.openweathermap.org/data/2.5/weather?q=paris&appid=a32ab35442c610b5e86e179795ba67b9	
	$url="http://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=a32ab35442c610b5e86e179795ba67b9";
	$content=file_get_contents($url);
	$weather_array=json_decode($content,true);
	//print_r($weather_array);
	//print_r($weather_array['coord']['lon']);
	//print_r($weather_array['weather'][0]['description']);
	
$weather ="<br/>The weather in ".$_GET['city']." is currently  '".$weather_array['weather'][0]['description']."'.";

	
	$temp=$weather_array['main']['temp']-270;
	$pressure=$weather_array['main']['pressure'];
	$humidity=$weather_array['main']['humidity'];
	$weather.="<br/>The Temperature is   ".$temp."&deg;C";
	//$weather.="<br/>The Pressure is ".$pressure."Pa";
	
	}

?>






<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Weather Scraper</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
	   <style type="text/css">
      
      html { 
          background: url(background.jpeg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          }
        
          body {
              
              background: none;
              
          }
          
          .container {
              
              text-align: center;
              margin-top: 100px;
              width: 450px;
              
          }
          
          input {
              
              margin: 20px 0;
              
          }
          
          #weather {
              
              margin-top:15px;
              
          }
         
      </style>
	  
	  
	  
  </head>
  <body  >
	   <div class="container">
      
          <h1>What's The Weather?</h1>
          
          
          
          <form>
  <fieldset class="form-group">
    <label for="city">Enter the name of a city.</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Tokyo" value = "<?php 
																										   
																										   if (array_key_exists('city', $_GET)) {
																										   
																										   echo $_GET['city']; 
																										   
																										   }
																										   
																										   ?>">
  </fieldset>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      
          <div id="weather"><?php 
              
              if ($weather) {
                  
                  echo '<div class="alert alert-success" role="alert">
  '.$weather.'
</div>';
                  
              } else if ($error) {
                  
                  echo '<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';
                  
              }
              
              ?></div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>