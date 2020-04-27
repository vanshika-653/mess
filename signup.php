<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gourmet &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|DM+Serif+Display:400,400i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="ftco-32x32.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>

  <style>

  .navbar {

  margin-bottom: 0;

  border-radius: 0;

  /* background-color; he put it purple make it stay gray or change to dark gray */

  color: #474747; /* text color */

  padding: 1% 0;

  font-size: 1.2em;  /* This increases text font */

  border: 0; /* the black thing */

  }

  .navbar-brand {

  float: left;

  min-height: 55px;

  padding: 0 15px 5px;

  }

  .navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover {

color: #FFF;

background-color: #222222; /* for the black thing in home */ /* #232323 try to change later on if it does not match with anything else */

}

.navbar-inverse .navbar-nav li a {

  color: #D5D5D5; /* text color?? */

  }

  .carousel-caption { /* this moves the text in the sliders up */

  top: 50%;

  transform: translateY(-50%);

  text-transform: uppercase;

  }

  .btn { /* get started button */

  font-size: 18px;

  color: #FFF;

  padding: 12px 22px;

  background: #000000;

  border: 2px solid #FFF;

  }

  .container {

   margin-top: 30px;

   margin-bottom: 26px;

  }

  #icon {

  max-width: 200px; /* to change the size of 3 images */

  margin: 1% auto;

  margin-top: 30px;

  margin-bottom: 26px;

  }

 

  footer { /* to design footer (no text) */

  width: 100%;

  background-color: #222222;

  padding: 5%;

  color: #FFF; /* text color */

  }

 

  .fa {

padding: 15px; /* social media pics size */

font-size: 25px;

color: #FFF;

  }

  .fa:hover {

  color: #D5D5D5;

  text-decoration: none;

  }

 

  @media (max-width: 900px) {

.fa {

font-size: 20px;

padding: 10px;

}

  }

 

  @media (max-width: 600px) {  /* this is to not show the getting started buttons and header on mobile */

  .carousel-caption {

display: none;

}

#icon {

max-width: 150px;

}

h2 { /* h4 size in mobile */

font-size: 1.7em;

}

  }

 

  .container1 {    margin: 4% auto;

}

<!-- login page -->

body{

margin: 0;

padding: 0;

background: url(img/Tower2.jpg);

background-size: cover;

background-position:center;

font-family: sans-serif;

}

.signup-box{

width: 750px;

height: 800px;

background: rgba(0, 0, 0, 0.5);

color: #fff;

top: 50%;

left:50%;

position:absolute;

transform: translate(-50%, -50%);

box-sizing: border-box;

padding: 70px 30px;

}



h2{

margin: 0;

padding: 0 0 18px;

text-align: center;

font-size: 18px;
color: #fff;

}

.signup-box p{

margin: 0;

padding: 0;

font-weight: bold;

}

.signup-box input{

width: 100%;

margin-bottom: 20px;

}

.signup-box input[type="text"], input[type="number"], input[type="email"], input[type="password"]

{

border: none;

border-bottom: 1 px solid #fff;

background: transparent;

outline: none;

height: 40px;

color: #fff;

font-size: 16px;

}

.signup-box input[type="submit"]

{

border: none;

outline: none;

height: 40px;

background: #1c8adb;

color: #fff;

font-size: 18px;

border-radius: 20px;

}

.signup-box input[type="submit"]:hover

{

cursor: pointer;

background: #39dc79;

color: #000;

}

.signup-box a{

text-decoration: none;

font-size: 14px;

color: #fff;

}

.signup-box a:hover

{

color: #39dc79;

}

  </style>
  <body>
        <div class="slider-item" style="background-image: url('img/hero_1.jpg');">
          <div class="signup-box">
            <form method="POST" style="border:1px solid #ccc">
              <div class="container">
                <h2>Sign Up</h2>
                <hr>
  	            <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="username" required>
            		<label for="rollno"><b>Roll Number</b></label>
                <input type="text" placeholder="Enter Roll No." name="roll_number" required>
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="repeat" required>
                <label>
                <input type="checkbox" text="Remember me" checked="checked" name="remember" style="margin-bottom:15px">Remember me</label>
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <div class="clearfix">
                  <button type="button" class="cancelbtn">Cancel</button>
	                <a href="login.php"><button type="submit" class="signupbtn" name="submit">Sign Up</button></a>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="loader" class="show fullscreen">
          <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/>
          </svg>
        </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    

    <script src="js/main.js"></script>
    
  </body>
</html>

<?php 
$con=mysqli_connect("localhost","root","","gourmet");
if($con)
{
    if(isset($_POST['submit']))
    {
        $username     = $_POST['username'];
        $roll_number  = $_POST['roll_number'];
        $email        = $_POST['email'];
        $password     = $_POST['password'];

        $select  = "select * from registration where username = '$username' OR email = '$email'";
       // print_r($select);die();
        $c = mysqli_query($con,$select);

        $check  = mysqli_num_rows($c);
        // print_r($check);die();
        if($check > 0 )
        {
            echo "<script>alert('Account Already Exist')</script>";
        }
        else
        {
            $insert = "Insert Into registration(username,roll_number,email,password)values('$username','$roll_number','$email','$password')";

            // echo $insert;die();
            if(mysqli_query($con,$insert))
            { 
                echo "<script>alert('Created Successfully , Thank You !')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
            else
            {
                    echo "<script>alert('Data Not Insert)</script>";
            }
        }
    }
}
else
{
    echo "<script>alert('Database Can Not conect')</script>";
}

?>
