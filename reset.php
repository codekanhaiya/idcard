<html>
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Oswald|Montserrat">
	  <link rel="stylesheet" href="css/printStyles.css" />
  </head>
  <body>
 
   <?php
    session_start();

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

    $enroll = $_POST['enroll'];
    $pass = $_POST['password'];

    $sql1 = "SELECT * FROM students WHERE id='$enroll'";

    $result1=mysqli_query($conn,$sql1);
    if(!$result1)
    {
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    
    $row=mysqli_fetch_assoc($result1);

    if($row){

            $sql2 = "UPDATE students SET password='$pass' WHERE id='$enroll'";
            
            $result2=mysqli_query($conn,$sql2);
            if(!$result2)
            {
                echo "Error: ".mysqli_error($conn);
                exit;
            }

            echo "Successfully, Password has been changed.";
            ?>
 
             <a id="btn" href="LoginForm.php" >Log In</a>

            <?php

    }else{
        echo "Please enter correct Enrollment Number.";
    }

    mysqli_close($conn);
   
  ?>
</body>
</html>