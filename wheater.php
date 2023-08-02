<?php



$city_name = 'Guntur';
$api_key = 'http://api.weatherapi.com/v1/current.json?key=068118968c2142a89df140345232001&q='.$city_name.'&aqi=no';
$wheather = json_decode(file_get_contents($api_key),true);
$a = $wheather['current']['temp_c'];



//print_r($wheather);
/*



Array ( 
[location] => Array ( 
[name] => Guntur 
[region] => Andhra Pradesh 
[country] => India 
[lat] => 16.3 
[lon] => 80.45 
[tz_id] => Asia/Kolkata 
[localtime_epoch] => 1674224140 
[localtime] => 2023-01-20 19:45 ) 

[current] => Array (
 [last_updated_epoch] => 1674224100 
 [last_updated] => 2023-01-20 19:45 
 [temp_c] => 24.4 
 [temp_f] => 75.9 
 [is_day] => 0 
 [condition] => Array (
 [text] => Clear [icon] => 
 //cdn.weatherapi.com/weather/64x64/night/113.png [code] => 1000 
 ) [wind_mph] => 7.2 [wind_kph] => 11.5 [wind_degree] => 143 [wind_dir] => SE [pressure_mb] => 1015 [pressure_in] => 29.97 [precip_mm] => 0 [precip_in] => 0 [humidity] => 84 [cloud] => 2 [feelslike_c] => 26.5 [feelslike_f] => 79.7 [vis_km] => 10 [vis_miles] => 6 [uv] => 1 [gust_mph] => 9.4 [gust_kph] => 15.1 ) )

*/


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Simple Search</title>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style type="text/css">
			  *
		{
		  margin: 0;
		  padding: 0;
		  outline: none;
		}

		body
		{
		  font-family: 'Roboto', sans-serif;
		  overflow: hidden;
		  background: #009688;;
		}

		div.widget
		{
		  position: relative;
		  width: 355px;
		  height: 125px;
		  margin: 200px auto;
		  background-color: #fcfdfd;
		  border-radius: 9px;
		  padding: 25px;
		  padding-right: 30px;
		  box-shadow: 0px 20px 20px -23px #080c21;
		  display:flex;
		}

		div.left-panel
		{
		  
		}

		div.date
		{
		  font-size: 14px;
		  font-weight: bold;
		  color: rgba(0,0,0,0.5);
		}

		div.city
		{
		  font-size: 21px;
		  font-weight: bold;
		  text-transform: uppercase;
		  padding-top: 5px;
		  color: rgba(0,0,0,0.7);
		}

		div.temp
		{
		  font-size: 81px;
		  color: rgba(0,0,0,0.9);
		  font-weight: 100;
		}

		div.panel
		{
		  display: inline-block;
		}

		div.right-panel
		{
		  position: absolute;
		  float: right;
		  top: 0;
		  margin-top: 35px;
		  padding-left: 10px;
		}


		#btnDownload
		{
		  position: absolute;
		  top: 10px;
		  right: 10px;
		  z-index-: 9999;
		}

		#btnDownload img
		{
		  width: 135px;
		  
		}
    </style>
  </head>
  <body>
    <div class="widget">
            
            <div class="left-panel panel">
                <div class="date">
                    Saturday, 21 JAN 2023
                </div>
                <div class="city">
                    
                </div>
                <div class="temp">
                   <?php echo "TEMP" .$a;?>&deg;
                </div>
            </div>

        </div>
  </body>
</html>
