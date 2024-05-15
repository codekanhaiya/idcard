<html>
  <head>
    <title>Registration Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Oswald|Montserrat">
	    <link rel="stylesheet" href="css/RegisterationStyles.css" />
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
    if(!$conn){
        echo "Connection Failed: ".mysqli_connect_error();
        exit;
    }

    $enroll = $_POST['enroll'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
        $special=explode("@",$email);
        $ct=count($special);
            $p1=$special[$ct-2];
            $p2=$special[$ct-1];

     $modifyEmail = $p1." @".$p2;       
       
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $mob = $_POST['contact'];
    $add = $_POST['address'];
    $sess = $_POST['session'];
    $year = $_POST['class'];
    $branch = $_POST['branch'];

    $file = $_FILES['imageFile']['name'];
     $ext=explode(".",$file);
     $count=count($ext);

    $ref = $_POST['referrer'];
    $pass = $_POST['password'];


    if($ext[$count-1]=='jpg' || $ext[$count-1]=='jpeg' || $ext[$count-1]=='png' || $ext[$count-1]=='JPEG' || $ext[$count-1]=='JPG' || $ext[$count-1]=='PNG'){

        $tmp = $_FILES['imageFile']['tmp_name'];
        $folder = "dp/".$file;

        $sql = "INSERT into students(id,name,dob,email,Fname,Mname,contact,address,session,class,branch,imageFile,referrer,password)
        VALUES('$enroll','$name','$dob','$modifyEmail','$fname','$mname','$mob','$add','$sess','$year','$branch','$folder','$ref','$pass')";

        try{   //it is used for PRIMARY KEY restriction.
            $result = mysqli_query($conn,$sql);
            if(!$result){
            echo "Error: ".mysqli_error($conn);
        }
        }catch(Exception $e){
            echo "Sorry !<br/>Already this enrollment number have been used.<br>";
            ?>
                <a id="btn" href="LoginForm.php" >Log In</a> <a id="btn" href="RegistrationForm.php" >New Registration</a>
            <?php
            exit;
        }
        
        move_uploaded_file($tmp,$folder); //file will come in "dp" folder when Data is not redundent. 

        $_SESSION['user_id']=$enroll;
        $_SESSION['name']=$name;
    
        echo "<br/>Congratulation ".$name." Registration Successful !";

        ?>
        <a id="btn" href="IDcard.php" >Print Your Admit Card</a>
        <?php

        mysqli_close($conn);

    }
    else{
       echo "Sorry!<br/>This file type is not allowed.<br/>Plese upload only 'jpeg', 'jpg', 'png' file format.";
       exit;
    }

?>
</body>
</html>