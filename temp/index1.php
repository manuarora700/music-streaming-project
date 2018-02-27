<?php
$weather="";
if (array_key_exists('city',$_GET))
	
{
	$city=str_replace(' ','',$_GET['city']); 
$file_headers=@get_headers("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
if ($file_headers[0]=='HTTP/1.1 404 Not Found')

{
	$error="CITY NOT FOUND";
}
else
{
		
	$forecastPage= file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
echo $forecastPage;
	
	$pageArray=explode('weather forecast of rain, sun, wind, humidity and temperature. <span class="read-more-small"><span class="read-more-content">'
	,$forecastPage);
	if(sizeof ($pageArray>1))
	{
	
	
	$secondPageArray=explode('p class="large-loc"><b>Mumbai</b> is  <span class="height">',
	$pageArray[1]); 
if(sizeof($secondPageArray)>1)
{
	$weather= $secondPageArray[0];
}
else{
	$error="Page not found";
}
	}
	
	else{
	$error="Page not found";
}
}

	?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <style type="text/css">
  html { 
  background: url(background/background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  
  
  body
  {
	  background:none;
	  
	  
  }
  .container
  {
	  margin-top:200px;
	  text align:center;
	  width:450px;
  }
  input {
              
              margin: 20px 0;
              
          }
          
  
  </style>
  
  
  
  
  </head>
  <body>
      <div class="container">
      
          <h1>What's The Weather?</h1>
          
		  <form>
  <fieldset class="form-group">
    <label for="city">Enter the name of a city.</label>
    <input type="text" value="<?php echo $_GET['city']; ?>"class="form-control" name="city" id="city" placeholder="Eg. London, Tokyo" value = "city">
  </fieldset>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      

		  
     <div id="weather">
	 <?php
	 
	 if($weather)
		 
		 {
			 echo '<div class="alert alert-success" role="alert">
			 '.'$weather'.'
			</div>';
			 
			
	 
	 
		 }
		 else
		 {
			 
		 echo '<div class="alert alert-danger" role="alert">
			 '.$error.'
			</div>';
			 
		 }
	 
	 ?></div>     
    </div>
<img src="background.jpeg">

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>