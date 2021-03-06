<!DOCTYPE html>

<!--
    Early Birds Opening Splashcreen
    Created 2/15/2014 by Will Soeltz
    
	Will Soeltz and Kaitlyn Carcia
	University of Massachusetts Lowell, 91.462 GUI Programming II, Jesse M. Heines
	File: index.php
	Contains splash screen, login, registration, assignment code, lab code, about
	Last updated March 26, 2014 by KC
-->

<html>
  <head>
    <meta charset = "utf-8" />
    <!-- Styling for this page -->
    <link rel = "stylesheet" href = "css/reset.css" />
    <link rel = "stylesheet" href = "css/colorbox_xonbottom.css" />
    <link rel = "stylesheet" href = "css/main.css" />
    <link rel="stylesheet" href="css/jquery.jscrollpane.css" />
    <!-- Open Sans Google Font API -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic,800,600italic' rel='stylesheet' type='text/css'>
	<!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- JS for sliding divs -->
    <script src="js/slideDivs.js"></script>
    <!-- the mousewheel plugin - optional to provide mousewheel support -->
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <!-- the jScrollPane script -->
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <!-- JavaScript pages for lightbox -->
    <script src="js/jquery.colorbox.js"></script>
    <!-- General JavaScript pages for index page - lightbox, scroll, logout -->
    <script src="js/index.js"></script>
    <!-- Inlclude jQuery Validation Plugin -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script> 
    <title>Early Birds</title>
  </head>
  <body>
    <div id="contentWrapper">
        <div id="logoHalf">
        	<!-- EB logo  -->
            <div id="logo">
                <img src="css/assets/logo.png" height="231" width="611" alt="Early Birds" title="Early Birds"/>
            </div>
        </div>
        <div id ="learnMoreTab"><a class="learnMoreLight" href="#about">Learn More</a></div>
        <div id="navHalf">
            <div id="sideContent">
            	<!-- Students: Enter in assignment code -->
                <div id="assignmentCode" class="contentBlock">
                    <h2>Enter Your Assignment Code</h2>
                    <!-- Assignment Code form -->
                    <form id="assignmentForm" action="scripts/find_assignment_code.php" method="get">
                        <input type="text" name="assignment_code" placeholder="Assignment Code">
                        <br/><br/>
                        <div class="center">
                            <input type="submit" class="stdButton" name="acode" value="Continue">
                            <div id="assignmentErrors"></div>
                        </div>
                    </form>
                    <!-- Find assignment code if not sure how -->
                    <div class="center">
                        <hr>
                        Not sure how to find your assignment code?<br><br>
                        <a class="stdButton" href="javascript:void(0)" id="findAssignCode">Find It</a>
                    </div>
                    <!-- Down arrow to go back to splash div -->
                    <a title="Go Back to Main Menu" href="javascript:void(0)" id="assignmentToSplash"><img class="goBack vertical" src="css/assets/down_arrow.png"></a>           
                </div>
                
                <!-- Students: Enter in lab code. Needed as placeholder block for sliding divs -->
                <div id="labCode" class="contentBlock">
                </div>
                
                <!-- Splash Menu -->
                <div id="splash" class="contentBlock">
                    <h2 class="thequestion">Are you a</h2>
                    <!-- Go to students page -->
                    <h1><a href="javascript:void(0)" id="student">Student</a></h1>
                    <h2 class="thequestion">or a</h2>
                    <!-- Go to teachers page -->
                    <h1 class="teacherLink"><a href="javascript:void(0)" id="teacher" >Teacher?</a></h1>
                    <p>In one fell swoop, Early Birds helps familiarize students with computers all while teaching them the basics of writing science lab reports.
                    <br/>
                    </p>
                </div>
                
                <!-- Learn more/About. Needed as placeholder block for sliding divs -->
                <div class="contentBlock">
                </div>
                
				<!-- Login div -->
                <div id="login" class="contentBlock">
               		<!-- Up arrow to go back to splash div -->
					<a title="Go Back to Main Menu" href="javascript:void(0)" id="loginToSplash"><img class="goBack vertical" src="css/assets/up_arrow.png"></a>
                    <h2>Login</h2>
                    <!-- Login form -->
                    <form id="loginForm" name="loginForm" method="post" action="scripts/login.php">
	                    <input type="text" name="email" placeholder="Email">
	                    <input type="password" name="password" placeholder="Password">
	                    <div class="center">
                            <div id="loginErrors" class="errors"></div>
	                    	<input type="submit" value="Login" class="button" id="login">
	                    </div>
	                </form>
	                <!-- Register button if no account -->
	                <div class="center">
		                <hr>
		                Don't have an account?<br><br>
		                <a class="stdButton" href="javascript:void(0)" id="loginToRegister">Register</a>
	                </div>
	                </form>                    
                </div>
                
				<!-- Registration div -->
                <div id="register" class="contentBlock">
                	<!-- Left arrow to go back to login div -->
                	<a title="Go Back to Login" href="javascript:void(0)" id="registerToLogin"><img class="goBack" src="css/assets/left_arrow.png"></a>
                	<h2>Register</h2>
                	<!-- Registration form-->
                	<form id="registerForm" name="registerForm" method="post" action="scripts/registration.php">
	                    <input type="text" name="name" placeholder="Name">
	                    <input type="text" name="email" id="registerEmail" placeholder="Email">
	                    <input type="text" name="confirm_email" placeholder="Confirm Email">
	                    <input type="password" name="password" id="registerPassword" placeholder="Password">
	                    <input type="password" name="confirm_password" placeholder="Confirm Password">
	                    <div class="center">
                        <div id="registerErrors" class="errors"></div>
	                    	<input type="submit" value="Register" class="button" id="register">
	                    </div>
	                </form>
                </div>
            </div>
            <div id="blueDrop"></div>
        </div>
    </div>

    <!-- Contains hidden content for learn more and logout box -->
            <div id="hiddencontent">
                <div id="about">
                    <div id="aboutContent">
                        <div class="learn right">
                            <h5>Step-by-Step Learning Process.</h5>
                            <p>The Early Birds web app walks students through the process of writing formal lab reports, teaching them each step as they get there.</p>
                        </div>
                        <div class="learn left">
                            <h5>No Complex Word Processors.</h5>
                            <p>Early Birds encourages students to become comfortable using computers for classroom assignments at a young age.</p>
                        </div>
                        <div class="learn right">
                            <h5>Intuitive Student Interface.</h5>
                            <p>Our interface has been designed with young students in mind to engage and assist them in the learning process.</p>
                        </div>
                        <div class="learn left">
                            <h5>Simplify the Gradeing Process.</h5>
                            <p>With the online interface, teachers can check up on student progress, and immedietly see when assignments have been submitted.</p>
                        </div>
                        <div class="learn center">
                            <h5>You know what they say,</h5>
                        </div>
                    </div>
                </div>
                <a class="logout" href="#logoutContainer">Logout Succesful</a>
                <div id="logoutContainer">
                    <div id="logoutContent">
                        <h2>Succesfully logged out.</h2>
                    </div>
                </div>
            </div>
        <!-- end hidden content -->


  </body>
</html>
