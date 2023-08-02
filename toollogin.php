<?php
 //require 'config.php';
 $con=mysqli_connect("localhost","root","","vitap");
 session_start();   
?>


    <!doctype html>
    <html>
        <head>
        <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
        <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
      -moz-font-smoothing: antialiased;
      -o-font-smoothing: antialiased;
      font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    body {
      font-family: "Roboto", Helvetica, Arial, sans-serif;
      font-weight: 100;
      font-size: 12px;
      line-height: 30px;
      color: #777;
      background:linear-gradient(to right,#000428,#004e92); 
    }
    h3
    {
        color:red;
    }
    .container
    {
        
      max-width: 400px;
      width: 100%;
      margin: 0 auto;
      position: relative;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea,
    #contact button[type="submit"] {
      font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    }

    #contact {
      background: #F9F9F9;
      padding: 25px;
      margin: 150px 0;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact h3 {
      display: block;
      font-size: 30px;
      font-weight: 300;
      margin-bottom: 10px;
    }

    #contact h4 {
      margin: 5px 0 15px;
      display: block;
      font-size: 13px;
      font-weight: 400;
    }

    fieldset {
      border: medium none !important;
      margin: 0 0 10px;
      min-width: 100%;
      padding: 0;
      width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea {
      width: 100%;
      border: 1px solid #ccc;
      background: #FFF;
      margin: 0 0 5px;
      padding: 10px;
    }

    #contact input[type="text"]:hover,
    #contact input[type="email"]:hover,
    #contact input[type="tel"]:hover,
    #contact input[type="url"]:hover,
    #contact textarea:hover {
      -webkit-transition: border-color 0.3s ease-in-out;
      -moz-transition: border-color 0.3s ease-in-out;
      transition: border-color 0.3s ease-in-out;
      border: 1px solid #aaa;
    }

    #contact textarea {
      height: 100px;
      max-width: 100%;
      resize: none;
    }

    #contact button[type="submit"] {
      cursor: pointer;
      width: 100%;
      border: none;
      background: #4CAF50;
      color: #FFF;
      margin: 0 0 5px;
      padding: 10px;
      font-size: 15px;
    }

    #contact button[type="submit"]:hover {
      background: #43A047;
      -webkit-transition: background 0.3s ease-in-out;
      -moz-transition: background 0.3s ease-in-out;
      transition: background-color 0.3s ease-in-out;
    }

    #contact button[type="submit"]:active {
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
    }

    .copyright {
      text-align: center;
    }

    #contact input:focus,
    #contact textarea:focus {
      outline: 0;
      border: 1px solid #aaa;
    }

    ::-webkit-input-placeholder {
      color: #888;
    }

    :-moz-placeholder {
      color: #888;
    }

    ::-moz-placeholder {
      color: #888;
    }

    :-ms-input-placeholder {
      color: #888;
    }
    .date2
    {
        width:100%;
        height: 25px;
        background-color: rgb(237, 64, 64);
    }
    .date1
    {
        width:100%;
        height: 25px;
        background-color:rgb(67, 176, 67);
    }
    .option
    {
        height: 25px;
        width: 100%;
    }
    label
    {
      color:black;
      font: size 10px;
    }
        </style>
    </head>




    <div class="container">  
      <form id="contact" action="toollogin.php" method="POST">
        <h3>Please Login</h3>
        <h4></h4>
        <!--<fieldset>
          <input placeholder="Your name" name="name" type="text" name="name" tabindex="1"  autofocus>
        </fieldset>-->
        
        <fieldset>
          <input placeholder="Your Phone Number" name="phone" type="tel" name="number" tabindex="3" >
        </fieldset>
        <fieldset>
          <input placeholder="password" name="password" type="tel" name="number" tabindex="3" >
        </fieldset>

        <fieldset>
            <select class="option" name="blood_group">
                <option value="select">Choose Tool</option>
                <option value="plough">plough</option>
                <option value="cultivator">cultivator</option>
                <option value="sprayer">sprayer</option>
                <option value="Disc harrow">Disc harrow</option>
                <option value="cultipacker">cultipacker</option>
            </select>
          </fieldset>
          <fieldset>
          <input placeholder="Adress" name="address" type="tel" name="addsress" tabindex="3" >
</fieldset>

<fieldset>
          <input placeholder="Price"  type="tel" name="price" tabindex="3" >
</fieldset>
        
       
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>
    <?php
      if(isset($_POST['submit']))
      {
        $tool = $_POST['blood_group'];
         $address = $_POST['address'];
         $price = $_POST['price'];
          $phone=$_POST['phone'];
          $password=$_POST['password'];
          $sql = "SELECT * from toolcreds where phone = '$phone' and password  = '$password'";
          $abc = mysqli_query($con,$sql);
          $unq=$phone;
          while($row = mysqli_fetch_array($abc)){
            $fullname= $row['fullname'];
          }

          $sqwe = "INSERT INTO toolg  VALUES ('$unq','$fullname','$phone','$tool','$price','$address')";
          $qwo= mysqli_query($con,$sqwe);
          if($qwo){
            echo "
            <script>
            window.location.href = 'home.php'; 
            </script>";

            //windows.header("location:home.html");
          } else {
            echo "not success";
          } }

          

         
     
         
          
      
    ?>

    </div>
    </html>