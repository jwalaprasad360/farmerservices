<?php
    require 'config.php';
    session_start();
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
      background: linear-gradient(to right,#7EE8FA,#BDD8FE);
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
      background-color:#D84563;
      }
      .buy-3{
      background-color:#613f75;
      }
      .buy-4{
      background-color:black;
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
        margin-top:40px;
        height:50px;
        width:80%;
        margin-bottom:10px;
      }
    </style>
  </head>
  <body>
  
  <form action="additem.php" method="POST">
  
    <div class="gallery">
      <div class="content">
        <img src="Farm9.jpeg">
        <select class="option" name="seed">
        
        <option value="Wheat">Wheat</option>
        <option value="Redchilli">Redchilli</option>
        <option value="Cotton">Cotton</option>
        <option value="Tobacco">Tobacco</option>
        <option value="GroundNut">GroundNut</option>
        </select>
        <br>
      
        
        <input  name="price" type="number" placeholder="price"> 
        <input  name="quantity" type="number" placeholder="quantity">
        <button type="submit"  name="add1"  class="buy-2">ADD</button>
        <button type="submit"  name="add2" class="buy-3">REMOVE</button>
        <button type="submit"  name="add4" class="buy-4">BACK TO HOME</button>
        
    </div>
    <?php
    if(isset($_POST['add4']))
    {
      echo "
                               <script>
                               window.location.href = 'home.php'; 
                               </script>";
    }
    if(isset($_POST['add1']))
    {
        $price=$_POST['price'];
        $item=$_POST['seed'];
        $unq=$_SESSION['unq'];
        $quantity=$_POST['quantity'];
        $res1=mysqli_query($con,"SELECT $item FROM store where unq='$unq' and $item='0'");
        
        if(mysqli_num_rows($res1))
        {
            $res=mysqli_query($con,"UPDATE store SET $item='1' where unq='$unq'");
            $res2=mysqli_query($con,"UPDATE  prices SET $item=$price where unq='$unq'");
            $res3=mysqli_query($con,"UPDATE  quantity SET $item=$quantity where unq='$unq'");
            if($res and $res2 and $res3)
            {
              echo "<script>
              alert('SUCCESSFULLY PLACED IN MARKET');
              
              </script>";
            }
            else echo "FAIL";
        }
        else
        {
          echo "<script>
              alert('ALREADY ADDED TO MARKET');
              </script>";
        }  
    }
    if(isset($_POST['add2']))
    {
      $price=$_POST['price'];
        $item=$_POST['seed'];
        $unq=$_SESSION['unq'];
        $quantity=$_POST['quantity'];
        $res1=mysqli_query($con,"SELECT $item FROM store where unq='$unq' and $item='1'");
        
        if(mysqli_num_rows($res1))
        {
            $res=mysqli_query($con,"UPDATE store SET $item='0' where unq='$unq'");
            $res2=mysqli_query($con,"UPDATE  prices SET $item='0' where unq='$unq'");
            $res3=mysqli_query($con,"UPDATE  quantity SET $item='0' where unq='$unq'");
            if($res and $res2 and $res3)
            {
              echo "<script>
              alert('REMOVED FROM MARKET');
              </script>";
            }
            else echo "FAIL";
        } 
        
    }
    /*
     if(isset($_POST['add1']))
     {
        $color_box=$_POST['q1'];
      $query="SELECT color_box
      FROM stock
      WHERE color_box>='$color_box'"; 
     $r1=mysqli_query($con,$query);

     if(!mysqli_num_rows($r1))
       {
        echo "<script>
        alert('PLEASE DECREASE ITEMS AND TRY AGAIN TO ADD,THANK YOU');
        </script>";
       }
       else
       {
        $unq=$_SESSION['unq'];
        $query =  "UPDATE temp SET color_box = color_box+'$color_box' where unq ='$unq'";
        $res=mysqli_query($con,$query);
          if($res)
          {
          echo "<script>
          alert('ADDED TO YOUR CART'); 
          </script>";

          //updating stock


          $q="UPDATE stock
          SET color_box=color_box-'$color_box'";
          $r1=mysqli_query($con,$q);
          }
        else
        {
             echo "<script>
          alert('NOT ADDED'); 
          </script>";
        }
       }
      }

        





       //for product 2

       if(isset($_POST['add2']))
       {
          $color_half_bag=$_POST['q2'];
        $query="SELECT color_half_bag
        FROM stock
        WHERE color_half_bag>='$color_half_bag'"; 
       $r2=mysqli_query($con,$query);
  
       if(!mysqli_num_rows($r2))
         {
           echo "<script>
           alert('PLEASE DECREASE ITEMS AND TRY AGAIN TO ADD,THANK YOU');
           </script>";
         }
         else
         {
          $unq=$_SESSION['unq'];
          $query =  "UPDATE temp SET color_half_bag = color_half_bag+'$color_half_bag' where unq = '$unq'";
          $res=mysqli_query($con,$query);
            if($res)
            {
            echo "<script>
            alert('ADDED TO YOUR CART');
            </script>";
  
            //updating stock
  
  
            $q="UPDATE stock
            SET color_half_bag=color_half_bag-'$color_half_bag'";
            $r1=mysqli_query($con,$q);
            }
          else
          {
               echo "<script>
            alert('NOT ADDED'); 
            </script>";
          }
         }
        }


        //for product 3
        if(isset($_POST['add3']))
       {
          $color_quator_bag=$_POST['q3'];
        $query="SELECT color_quator_bag
        FROM stock
        WHERE color_quator_bag>='$color_quator_bag'"; 
       $r3=mysqli_query($con,$query);
  
       if(!mysqli_num_rows($r3))
         {
           echo "<script>
           alert('PLEASE DECREASE ITEMS AND TRY AGAIN TO ADD,THANK YOU');
           </script>";
         }
         else
         {
          $unq=$_SESSION['unq'];
          $query =  "UPDATE temp SET color_quator_bag =color_quator_bag+'$color_quator_bag' where unq = '$unq'";
  
          $res=mysqli_query($con,$query);
            if($res)
            {
            echo "<script>
            alert('ADDED TO YOUR CART'); 
            </script>";
  
            //updating stock
  
  
            $q="UPDATE stock
            SET color_quator_bag=color_quator_bag-'$color_quator_bag'";
            $r1=mysqli_query($con,$q);
            }
          else
          {
               echo "<script>
            alert('NOT ADDED'); 
            </script>";
          }
         }
        }


       


    
*/
     ?>
  </body>
</html>