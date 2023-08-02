<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .h41 
        {
            color:rgb(211, 204, 6);
            padding: 7px;
        } 
        .container-fluid 
        {
            padding:15px;
        }
        .h11 
        {
            text-align: center;
            color:crimson;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        .p11
        {
            <!--text-align:left;-->
			width: 40%; 
			display: block; 
            padding:0 20px;
            font-size: 15px;
            font-family: italic;
			display:flex;
			text-align:justify;
        } 
        .img1 
        {
            display:flex;
			justify-content:center;
           
        }    
        .p12 
        {
            font-size: 15px;
            padding:10px;
            color:darkcyan;
			font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
			display:flex;
			justify-content:center;
        }
        .h12
        {
            text-align: center;
            color:green;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            padding:10px;
        }
        .p13 
        {
            font-size: 15px;
            padding:10px;
			display:flex;
			align-items:center;
			text-align:justify;
            justify-content:center;
        } 
        .p14 
        {
            font-size: 15px;
            padding:10px;
			display:flex;
			align-items:center;
			text-align:justify;
            justify-content:center;
        }
        .test-bg {
    background-color: #0967d219;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;

} 
.test-bg1 {
    background-color: #f81ed419;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;

} 
.test-bg2 {
    background-color: #17e75219;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;

} 
.test2 
{
    
    color:rgb(238, 222, 6);
	font-size:15px; 
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    padding:6px;
	display:flex;
	justify-content:center;
} 
.test-bg3 {
    background-color: #e0af0c19;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;

} 
.test3
{
    
    font-size:15px; 
    color:rgb(9, 232, 72);
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    padding:6px;
	display:flex;
	justify-content:center;
} 
.test-bg4 {
    background-color: #f8f4076c;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;	
} 
.test4
{
    
    font-size:15px; 
    color:rgb(3, 202, 242);
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    padding:6px;
	display:flex;
	justify-content:center;
} 

ul.nav {
  padding-left: 0px;
  background-color: red;
  text-align: center;
  display:flex;
  justify-content:center;
}
ul.nav > li {
  display: inline-block;
  display:flex;
  justify-content:center;   
  padding: 0px 0px;
}
ul.nav > li:hover {
  background-color: red;
}
ul.nav > li > a {
  color: black;
  text-decoration: none;
}

    </style>
  <title>Bootstrap Example</title>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid ">
    <div class="navbar-header ">
      <h4 class="h41 active">Farming Services</h4>
    </div>
    <ul class="nav">
      <li class=""><a href="season.php">Guide</a></li>
      <li><a href="#gupta">Harvesting</a></li>
      <li><a href="choosefarmer.php">Market Price</a></li>
      <li><a href="toolselect.php">Tools</a></li>    
      <li><a href="wheater.php">Wheater</a></li>    
    </ul>
  </div>
</nav>

    <h1 class="h11"><marquee width="60%" direction="right" height="100px">GOVERENMENT SCHEMES</marquee></h1>
    <div class="test-bg">
    <h3 class="p12" id="sanjay">RYTHU BHAROSA SCHEME</h3>
    <p class="p11">YSR Rythu Bharosa is a program launched by the Government of Andhra Pradesh to financially assist farmers by depositing an amount of ₹13,500 per annum in three installments, in association with Pradhan Mantri Kisan Samman Nidhi with the state government contributing ₹7500 and the center ₹6000.Under YSR Rythu Bharosa-PM Kisan scheme, farmers get a financial assistance of ₹13,500 per annum where the state government contributes ₹7,500 and ₹6.000 is contributed by the Government of India.
         Tenant farmers were also considered eligible to the scheme.</p>
    <img src="Farm6.jpg" width="320px" height="1rem" class="img1">
</div> 
<div class="test-bg1">
    <h3 class="p12" >PM KISAN SAMMAN NIDHI YOJANA</h3>
    <p class="p11">Pradhan Mantri Kisan Samman Nidhi is a central sector scheme under the government of India which provides income support to the farmers and their families. PM-KISAN scheme was first implemented as the Rythu Bandhu scheme by the Government of Telangana where a certain amount was handed directly to the eligible farmers. Later, on 1 February 2019, during the 2019 Interim Union Budget of India, Piyush Goyal announced the implementation of this scheme as a nationwide project.</p>
   <img src="Farm7.jpg" width="320px" height="1rem" class="img1">
</div>
   <h1 class="h12" id="gupta"><marquee width="60%" direction="right" height="100px">INFORMATION OF HARVESTING</marquee></h1>
   <p class="p13">Harvesting is the process of gathering a ripe crop from the fields. Reaping is the cutting of grain or pulse for harvest, typically using a scythe, sickle, or reaper.On smaller farms with minimal mechanization, harvesting is the most labor-intensive activity of the growing season. On large mechanized farms, harvesting uses the most expensive and sophisticated farm machinery, such as the combine harvester.</p>
   
  <div class="test-bg2 d-flex flex-row"> 
    <h1 class="test2"> RABI CROPPING SEASON</h1>
    <p class="p14">Rabi crops are sown in winter from October to December and harvested in summer from April to June. Some of the important rabi crops are wheat, barley, peas, gram, and mustard. Though these crops are grown in large parts of India, states from the north and north-western parts such as Punjab, Haryana, Himachal Pradesh, Jammu, and Kashmir, Uttarakhand, and Uttar Pradesh are important for the production of wheat and other rabi crops.

        Availability of precipitation during winter months due to the western temperate cyclones helps in the success of these crops. However, the success of the green revolution in Punjab, Haryana, western Uttar Pradesh, and parts of Rajasthan has also been an important factor in the growth of the above-mentioned rabi crops.
    </p>
  
    </div> 
    <div class="test-bg3"> 
        <h1 class="test3"> KHARIF CROPPING SEASON</h1>
        <p class="p14">Kharif crops are grown with the onset of monsoon in different parts of the country and these are harvested in September-October. Important crops grown during this season are paddy, maize, jowar, bajra, tur (arhar), moong, urad, cotton, jute, groundnut, and soya bean.

            Some of the most important rice-growing regions are Assam, West Bengal, coastal regions of Orissa, Andhra Pradesh, Tamil Nadu, Kerala, and Maharashtra, particularly the (Konkan coast) along with Uttar Pradesh and Bihar. Recently, paddy has also become an important crop of Punjab and Haryana. In states like Assam, West Bengal, and Orissa, three crops of paddy are grown in a year.
        </p>
      
        </div> 
        <div class="test-bg4"> 
            <h1 class="test4"> ZAID CROPPING SEASON</h1>
            <p class="p14">Let us learn about the last of the three cropping seasons in India. These are Aus, Aman, and Boro in between the rabi and the Kharif seasons, there is a short season during the summer months known as the Zaid season. Some of the crops produced during ‘Zaid are watermelon, muskmelon, cucumber vegetables, and fodder crops. Sugarcane takes almost a year to grow.</p>
          
            </div>
</div>
</body>
</html>