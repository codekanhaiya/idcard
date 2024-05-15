<?php

session_start();

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

   $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
	$db_name="idcard";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
    echo "Connection Failed: ".mysqli_connect_error();
    exit;
    }

    $sql = "SELECT * FROM students WHERE id='$user_id' And name = '$name'";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error: ".mysqli_error($conn);
        exit;
    }

    $row=mysqli_fetch_assoc($result);
    if(!$row)
    {
       echo "Error !" ;
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Identy Card</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" />
    <link href="css/IDstyle.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/loading.css" />
</head>
<body >
<canvas id="confetti-holder"></canvas>

  <div class="main">

    <div class="front">

       <div class="college">GOVT. POLYTECHNIC AADAMPUR</br>TARABGANJ GONDA</br>CODE-2230</div>
       
       <img class="college1" src="img/collegeLogo.png"/>

      <div class="frame">
        <?php
            echo "<img src='".$row['imageFile']."' width='100%' height='100%' />";
       ?>
      </div>
      
      <div class="info1">

        <p> <?php echo $row['name'] ?> </p>

        <table>

          <tr>
            <td><label class="value1" >Enrollment</label></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"><?php echo $row['id'] ?></label></td>
          </tr>

          <tr>
            <td><label class="value1" >Branch</label></li></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"><?php echo $row['branch'] ?></label></td>
          </tr>

          <tr>
            <td><label class="value1" >Session</label></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"><?php echo $row['session'] ?></label></td>
          </tr>

          <tr>
            <td><label class="value1" >Email</label></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"><?php echo $row['email'] ?></label></td>
          </tr>

        </table>

      </div>
      
    </div>

    <div class="back">

     <img class="college2" src="img/collegeLogo.png"/>      
    
      <div class="info2">

        <table>
          <tr>
            <td><label class="value1" >Class</label></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"></span><?php echo $row['class'] ?></label></td>
          </tr>

          <tr>
            <td><label class="value1" >D.O.B.</label></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"><?php echo $row['dob'] ?></label></td>
          </tr>

          <tr>
            <td><label class="value1" >Mob.No.</label></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"><?php echo $row['contact'] ?></label></td>
          </tr>

          <tr>
            <td><label class="value1" >Father Name</label></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"><?php echo "Mr. ".$row['Fname'] ?></label></td>
          </tr>

          <tr>
            <td><label class="value1" >Mother Name</label></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"><?php echo "Mrs. ".$row['Mname'] ?></td>
          </tr>

          <tr>
            <td><label class="value1" >Address</label></td>
            <td><span class="colon">:</span></td>
            <td><label class="value2"><?php echo $row['address'] ?></label></td>
          </tr>

        </table>
      </div>
    
     <p class="sign"><u>PRINCIPAL SIGN</u></p>
     <img src="img/sign.png" alt="Signature" id="sign"/>

    </div>   
  </div>
  
  
  <div class="btn" onclick="myFun()">
      <img src="img/print.png"/>
  </div>

    <div class="qrCode">
     </div>

  
  <script>
    function myFun() {
     window.print();
    }
  </script>

      <script type="text/javascript" src="js/index.min.js"></script>
      <script type="text/javascript" src="js/site.js"></script> 
  

</body>
</html>
