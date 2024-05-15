<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Oswald|Montserrat">
	  <link rel="stylesheet" href="css/RegisterationStyles.css" />
	  <link rel="stylesheet" href="css/loading.css" />
  </head>
  <body onload="myFunction()">
  
		<div id="loading"></div>
		
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>
    <form method="post" action="submit.php" enctype="multipart/form-data">

      <fieldset>
        <label><input type="text" name="enroll" placeholder="Enrollment Number" maxlength="15" required /></label>
        <label><input type="text" name="name" placeholder="Name" maxlength="30" required /></label>
        <label><input type="text" name="dob" placeholder="DD/MM/YYYY" maxlength="10" required /></label>
        <label><input type="email" name="email" placeholder="E-Mail ID" required /></label>
        <label><input type="text" name="fname" placeholder="Father Name" maxlength="50" required /></label>
        <label><input type="text" name="mname" placeholder="Mother Name" maxlength="50" required /></label>
        <label><input type="text" name="contact" placeholder="Contact Number" maxlength="10" required /></label>
        <label><textarea name="address" rows="5" cols="30" placeholder="Address" required></textarea></label>
        <label><input type="text" name="session"  placeholder="Session" maxlength="9" required/></label>
      </fieldset>

      <fieldset>
        <label><input type="radio" name="class" class="inline" value="First Year" required/> First Year</label>
        <label><input type="radio" name="class" class="inline" value="Second Year" required/> Second Year</label>
        <label><input type="radio" name="class" class="inline" value="Third Year" required/> Third Year</label>
      </fieldset>

      <fieldset>
        <label><input type="radio" name="branch" class="inline" value="Computer Science & Engineering" required/> Computer Science & Engineering</label>
        <label><input type="radio" name="branch" class="inline" value="Machenical Engineering (Automobile)" required/> Machenical Engineering (Automobile)</label>
        <label><input type="radio" name="branch" class="inline" value="Machenical Engineering (Production)" required/> Machenical Engineering (Production)</label>
      </fieldset>

      <fieldset>
        <label>Upload a profile picture: <input type="file" name="imageFile"  required /></label>
      </fieldset>

      <fieldset>
        <label>How did you hear about this technology?
          <select name="referrer" required>
            <option value="">--select one--</option>
            <option value="College Website">College Website</option>
            <option value="Your Teachers">Your Teachers</option>
            <option value="Your Seniors">Your Seniors</option>
            <option value="Your Collegeous">Your Collegeous</option>
            <option value="Other">Other</option>
          </select>
        </label>
      </fieldset>

      <fieldset>
        <label><input type="password" name="password" placeholder="Create a New Password" maxlength="10" minlength="6" required /></label>
      </fieldset>

      <fieldset>  
      <p class="info">Already have an account? <a href="LoginForm.php">Log In.</a></p>
        <label>
          <input type="checkbox" name="terms" class="inline" required /> I accept the <a href="idCardTermsCondition.php">terms and conditions.</a>
			  </label>
      </fieldset>

      <input id="play" type="submit" name="submit" value="Sign Up" />
    </form>

    <audio>
			<source src="audio/button.mp3" type="audio/mp3">
		</audio>
		<script type="text/javascript" src="js/music.js"></script>
	
	<script type="text/javascript" src="js/loading.js"></script>
	
  </body>
</html>