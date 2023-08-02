<?php
    require 'config.php';
    session_start();
    $unq=$_SESSION['unq'];
    $State_Name=$_SESSION['State_Name'];
    $District_Name=$_SESSION['District_Name'];
    $season_choosen=$_SESSION['season'];
    $options = array();
    $r=mysqli_query($con,"SELECT $season_choosen FROM season");
    while($row=mysqli_fetch_array($r)){
        $options[] = $row[$season_choosen];
    }
    
?>
<!DOCTYPE html>
<html>
  <head>
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "a08634da-9429-4784-b023-7c77b796a54a",
    });
  });
</script>
  <script>
  
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <title>Responsive Ecommerce Product Cards In HTML/CSS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      body{
      margin: 0;
      font-family:Nunito Sans;
      }
      h3
      {
      text-align: center;
      font-size: 30px;
      margin: 0;
      padding-top: 10px;
      }     
      a{
      text-decoration: none;
      }
      .gallery{
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      justify-content: center;
      align-items: center;
      margin: 50px 0;
      }
      .content{
      width: 24%;
      margin: 15px;
      box-sizing: border-box;
      float: left;
      text-align: center;
      border-radius:10px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      padding-top: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: .4s;
      background:#f1dac4;
      }
      .content:hover{
      box-shadow: 0 0 11px rgba(33,33,33,.2);
      transform: translate(0px, -8px);
      transition: .6s;
      }
      img{
      width: 200px;
      height: 200px;
      text-align: center;
      margin: 0 auto;
      display: block;
      }
      p{
      text-align: center;
      color: #b2bec3;
      padding: 0 8px;
      }
      h6{
      font-size: 26px;
      text-align: center;
      color: #222f3e;
      margin: 0;
      }
      ul{
      list-style-type: none;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0px;
      }
      li{
      padding: 5px;
      }
      .fa{
      color: #ff9f43;
      font-size: 26px;
      transition: .4s;
      }
      .fa:hover{
      transform: scale(1.3);
      transition: .6s;
      }
      h6
      {
        color:#0b0b0b;
      }
     .mod
     {
      height:
     }
      button
      {
      text-align: center;
      font-size: 24px;
      color: #fff;
      width: 100%;
      padding: 15px;
      border:0px;
      outline: none;
      cursor: pointer;
      margin-top: 5px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      }
      .buy-1{
      background-color: #2183a2;
      }
      .buy-2{
      background-color: #3b3e6e;
      }
      .buy-3{
      background-color: #0b0b0b;
      }
      @media(max-width: 1000px){
      .content{
      width: 46%;
      }
      }
      @media(max-width: 750px){
      .content{
      width: 100%;
      }
      }
      input 
      {
        width:50%;
        height: 40px;
        margin-bottom: 20px;
        margin-left:20px;    
      }
      .one
      {

        margin-top:30px;
        width:50%;
        height: 50px;
        margin-bottom: 20px;
        margin-left:20px;
        background-color:rgba(241, 19, 19, 0.782); 
        color:white;   
        border-radius:13px;
        font-size:20px;
       text-align:center;
       padding-top:22px;
        
      }
       .two
      {
        width:50%;
        height: 50px;
        margin-bottom: 20px;
        margin-left:20px;
        background-color:   rgba(30, 231, 30, 0.775);
        color:black;
        font-size:20px;
        border-radius:13px;
       text-align:center;
       padding-top:22px;
        
      }
      .back
      {
        width:30px;
        border-radius:20px;
        height:40px;
        color:red;
        background-color:yellow;
      }
      .mod
      {
        height:50px;
        width:100px;
        color:red;
        background:black;
      }
      .option
      {
        margin-top:20px;
        width:80%;
        height:40px;
        margin-bottom:20px;
      }
    </style>
  </head>
  <body>
  
  <form  method="POST">
    <div class="gallery">
      <div class="content">
        <img src="farm10.png">
        <select class="option" name="crop_choosen">
        <?php
            
            foreach ($options as $option) {
                echo "<option value='$option'>$option</option>";
            }
        ?>
        </select>
        <br>
        
        <button type="submit"  name="crop" class="buy-2">DONE</button>
        <h3>OUR SUGGESTIONS </h3>
    </div>
    <?php

           echo "UNQ ".$unq;
            echo "District_Name ".$District_Name;
            echo "Season ".$season_choosen;
          
            $sug=mysqli_query($con,"SELECT Crop,max('Production') FROM sheet1 where District_Name='$District_Name' 
            and Season='$season_choosen' and State_Name='$State_Name'");
            if(mysqli_num_rows($sug)==0) echo "FALSE ";
            while($row=mysqli_fetch_array($sug))
            {
              ?>
              <h2><?php echo $row['Crop'] ?>;</h2>
              
              <?php
            }
    if(isset($_POST['crop']))
    {
          
            
              $crop_choosen=$_POST['crop_choosen'];
            echo $crop_choosen;
            $res=mysqli_query($con,"UPDATE farmer_crops SET $crop_choosen='s1' where unq=$unq");
            
            if($res){
                echo "<script>
                    alert('added to cultivation');
                </script>";
               
        echo "<script>  
        window.location.href = 'todolistclone.php'; 
        </script>";
            }
            
        
    }
     ?>
  </body>
</html>