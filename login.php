<html>
  <head>
    <title>Login Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    
    $enroll = $_GET['enroll'];
    $pass = $_GET['password'];

    $sql = "SELECT * FROM students WHERE id='$enroll' And password='$pass'";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error: ".mysqli_error($conn);
        exit;
    }

    $row=mysqli_fetch_assoc($result);
    if($row)
    {
        echo "Hello ".$row['name']."<br/>";
        $_SESSION['user_id']=$row['id'];
        $_SESSION['name']=$row['name'];
    
    ?>
        <a id="btn" href="IDcard.php" >Print Your Admit Card</a>
    <?php
    }
    else
    {
        echo "Sorry,<br/>Login Failed !<br/>Please try again.";
    }

    mysqli_close($conn);

    ?>

</body>
</html>