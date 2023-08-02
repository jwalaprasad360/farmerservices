<?php
require 'config.php';
session_start();
$_SESSION['done']=false;
$crop_choosen=$_SESSION['crop_choosen'];
echo "CROP : ".$_SESSION['crop_choosen'];
$unq=$_SESSION['unq'];
echo "UNQ ".$unq;
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .test-bg3 {
    background-color: #e0af0c19;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;

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
.test3
{
    
    font-size:15px; 
    color:rgb(9, 232, 72);
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    padding:6px;
	display:flex;
	justify-content:center;
} 
.radio-container {
  display: flex;
  flex-wrap: wrap;
  align-items: center; /* center vertically */
  justify-content: center; /* center horizontally */
  height:100%;
  weight:100%;
  border: 3px solid green;
  text:yellow;
}

.link
{
    background:blue;
    color:white;
    width:50px;
    height:40px;
}
.done
{
    height:40px;
    width:80px;
    color:black;
    background:yellow;
}
input[type="radio"] {
  
}

label {
 font-size:20px;
 color:blue;
}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form method="POST">
<body>
<div class="radio-container">
  <input type="radio" id="radio-input" name="group">
        
  <?php
$res=mysqli_query($con,"SELECT $crop_choosen from farmer_crops WHERE '$crop_choosen'!='0' and unq='$unq'");
if(mysqli_num_rows($res) and !$_SESSION['done'])
{
    
    while($row=mysqli_fetch_array($res))
    {
        
        $curr_step=$row[$crop_choosen];
        ?>
        <div class="test-bg3"> 
        <h1 class="test3">  </h1>
        <?php 
            echo "CURRENT STEP  : ".$curr_step;
            ?>
            <p class="p14">
                <?php 
            $res1=mysqli_query($con,"SELECT $curr_step from crops where name='$crop_choosen'");
            while($row=mysqli_fetch_array($res1))
            {
                $data=$row[$curr_step];
                echo "  <label for='radio-input'>$data</label>
                ";
                //echo "DATA : ".$data;
                //echo "\n";
            }

            ?>
            </p>
        </div>
        <?php
        
    }
    
    ?>    
    <?php
}
else 
{
    echo "NOTHING TO SHOW\n";
}
if(isset($_POST['done']))
{
    $_SESSION['done']=true;
    $int =(int)$curr_step[1];
    $int=$int+1;
    $nxt = 's'.number_format($int);
    $res=mysqli_query($con,"UPDATE farmer_crops SET $crop_choosen='$nxt' where unq=$unq");
            
            /*if($res){
                echo "<script>
                    alert('moved to next step');
                </script>";
            }
    */
}

?>
  <input type="submit" value="DONE" class="done" name="done">
  
</div>
<a href="nav2.php" class="link">GO HOME</a>
</form>
</body>
</html>