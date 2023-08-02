<?php
    require 'config.php';
    session_start();
    
?>



<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
  table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}
</style>
<body>
  <table>
    <caption>WE GOT THESE RELATED TO YOU</caption>
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">District</th>
        <th scope="col">Town</th>
        <th scope="col">Phone</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        
        
      </tr>
    </thead>
    <tbody>
        <?php
           //s echo "ITEM".$_SESSION['item'];
            $item=$_SESSION['item'];
           $res=mysqli_query($con,"SELECT DISTINCT * FROM store where $item='1'");
           if(mysqli_num_rows($res))
           {
            while($row=mysqli_fetch_array($res))
            {
                $unq=$row['unq'];
                $result=mysqli_query($con,"SELECT DISTINCT * FROM buscreds where unq=$unq");
                while($r=mysqli_fetch_array($result))
                {
                    //echo "name".$r['name']."<br>";
                    
                    $_SESSION['__name__']=$r['name'];
                    ?>
                    <td data-label='Name'><?php echo $_SESSION['__name__']; ?></td>
                    <?php
                    $_SESSION['__district__']=$r['district'];
                    ?>
                    <td data-label='Name'><?php echo $_SESSION['__district__']; ?></td>
                    <?php
                    $_SESSION['__town__']=$r['town'];
                    ?>
                    <td data-label='Name'><?php echo $_SESSION['__town__']; ?></td>
                    <?php

                   // echo "dist".$_SESSION['__district__']."<br>";
                   // echo "phone".$r['phone']."<br>";
                    //echo "town".$_SESSION['__town__']."<br>";
                    
                    
                    $_SESSION['__phone__']=$r['phone']; 
                    ?>
                    <td data-label='Phone'><?php  echo $_SESSION['__phone__']; ?></td>
                    <?php
                }
                $result=mysqli_query($con,"SELECT DISTINCT * FROM prices where unq=$unq");
                while($r=mysqli_fetch_array($result))
                {
                  // echo "price".$r[$item]."<br>";

                    $_SESSION['__price__']=$r[$item];
                    ?>
                    <td data-label='Quantity'><?php echo $_SESSION['__quantity__']; ?></td>
                    <?php
                }
                $result=mysqli_query($con,"SELECT DISTINCT * FROM quantity where unq=$unq");
                while($r=mysqli_fetch_array($result))
                {
                   // echo "quantity".$r[$item]."<br>";
                    $_SESSION['__quantity__']=$r[$item];
                    ?>
                    <td data-label='s'><?php echo $_SESSION['__price__']; ?></td>
                    <?php
                }
                while($r=mysqli_fetch_array($result))
                {
                   // echo "name".$r['name']."<br>";
                    ?>
                    
                    <?php
                    
                    //$_SESSION['__district__']=$r['district'];
                    //echo "dist".$_SESSION['__district__']."<br>";
                    
                    //$_SESSION['__town__']=$r['town'];
                    
                   // echo "phone".$r['phone']."<br>";
                    
                    
                    
                   
                }
                ?> 
                 <tr>     

            
           <!-- <td data-label='Phone'><?php // echo $_SESSION['__phone__']; ?></td>
            <td data-label='District'><?php // echo $_SESSION['__price__']; ?></td>
           
            <td data-label='BloodGroup'><?php //echo $_SESSION['__district__']; ?></td>
            <td data-label='BloodGroup'><?php // echo $_SESSION['__town__']; ?></td>
            </tr>
              -->
            <?php
            }
            
           }
           else
           {
            echo "NO RESULT FOUND";
           }
           
                       

        ?>
   
       

</body>
</html>
