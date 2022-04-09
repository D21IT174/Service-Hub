<html>
<head>

    <title>SignUp</title>

  <link rel="stylesheet" type="text/css" href="PROJECT\CSS\SignUp.css">

</head>

<body>    
    <h1><br>SERVICE HUB</h1>
</body>

<body>

<form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    
    <h2>Sign Up</h2>

    <p>
        <?php
        echo "Please fill this form to create an account."
        ?>
            
    </p>
    
    <hr><br>

  <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <label for="pnumber"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Name" name="pnumber" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="add"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="add" required>

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="City" required>

    <label for="dob"><b>Date Of Birth</b></label>
    <input type="text" placeholder="Enter DOB" name="dob" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="con-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="con-repeat" required>

   

<! LINKING OF Terms & Privacy.>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      
        <input type="button" value="Sign Up" class="signupbtn" required="text" required="password" onClick="document.location.href='http://localhost/Home.php'">


    </div>
  </div>
</form>
</body>
</html>

