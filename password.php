<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Oswald|Montserrat">
	    <link rel="stylesheet" href="css/LoginStyles.css" />
        <link rel="stylesheet" href="css/loading.css" />
  </head>
  <body onload="myFunction()">
  
		<div id="loading"></div>
     <h1>Reset Password</h1>
     <div class="contain">
        <form method="post" action="reset.php">
            <fieldset class="fieldset">
                <label><fieldset><legend>Enrollment number</legend><input type="text" name="enroll" required /></label></fieldset>
                <label><fieldset><legend>New Password</legend><input type="password" name="password"  required  /></label></fieldset>
            </fieldset>
            <fieldset class="fieldset">
                <label>
                    <input type="checkbox" name="terms" class="inline" required /> I accept the <a href="idCardTermsCondition.php">terms and conditions.</a>
                </label>
            </fieldset>

            <input type="submit" name="submit" value="Reset" />
        </form>
    </div>
    <script type="text/javascript" src="js/loading.js"></script>
  </body>
</html>