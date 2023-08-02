<?php
    require 'config.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="farmerpage.php" method="POST">
<input type="text" placeholder="name" name="name"> 
    <input type="phone" placeholder="phone" name="phone" > 
    <input type="password" placeholder="password" name="password" >
    <input type="password" placeholder="confirm" name="cpassword">
    <input type="submit" name="submit">
</form>
        <?php
                    if(isset($_POST['submit']))
                    {
                        $name=$_POST['name'];
                        $phone=$_POST['phone'];
                        $password=$_POST['password'];
                        $cpassword=$_POST['cpassword'];
                        $unq=$phone;
                        $q3="SELECT phone FROM farmcreds where phone='$phone'";
                        $r3=mysqli_query($con,$q3);
                        if(mysqli_num_rows($r3))
                        {
                            echo "<script>
                            alert('phone number already exist please choose different one');
                            </script>";
                        }
                        else if($password!=$cpassword)
                        {
                            echo "<script>
                            alert('password is not same');
                            </script>";
                        }
                        else if(strlen($phone)!=10)
                        {
                            echo "<script>
                            alert('phone number lenght must be 10digts');
                            </script>";
                        }
                        else
                        {
                            $q="INSERT INTO farmcreds
                            VALUES ('$unq','$name','$phone','$password')";
                            $r=mysqli_query($con,$q);
                            if($r)
                            {
                                echo "<h3>DONE</h3>";
                               // header('location:home.php');
                            }
                            else
                            {
                                echo "<script>
                            alert('something went wrong');
                            </script>";
                            }
                        }
                        


                    }
                ?>
</body>
</html>