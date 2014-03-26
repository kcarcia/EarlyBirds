<!DOCTYPE html>

<!--
    Early Birds Opening Splashcreen
    Created 2/15/2014 by Will Soeltz
    
	Will Soeltz and Kaitlyn Carcia
	University of Massachusetts Lowell, 91.462 GUI Programming II, Jesse M. Heines
	File: index.html
	Contains splash screen, login, registration, assignment code, lab code, about
	Last updated March 25, 2014 by KC
-->

<html>
  <head>
    <meta charset = "utf-8" />
    
    <link rel = "stylesheet" href = "css/reset.css" />
    <link rel = "stylesheet" href = "css/colorbox_xonbottom.css" />
    <link rel = "stylesheet" href = "css/main.css" />
    <link rel="stylesheet" href="css/jquery.jscrollpane.css" />
    
    <!-- Open Sans Google Font API -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic,800' rel='stylesheet' type='text/css'>
    
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
    <script>
        $(document).ready(function(){
            // code for using inline html
            $(".learnMoreLight").colorbox({inline:true, width:"609px", height: "450px"});
            
            $(function(){
                $('#about').jScrollPane();
            });
                        
			// http://stackoverflow.com/questions/298503/how-can-you-check-for-a-hash-in-a-url-using-javascript
            if(window.location.hash == "#logout") {
            	// If there's a hash in the URL, the user logged out
            	// 400 seconds delays the alert message
            	// http://www.w3schools.com/js/js_timing.asp
            	setTimeout(function(){
            		alert("Successfully logged out.")
            		},400);
				
				// Remove hash from URL after alert goes away
				// http://stackoverflow.com/questions/4508574/remove-hash-from-url
				setTimeout(function(){
					var loc = window.location.href,
 			    	index = loc.indexOf('#');

					if (index > 0) {
  						window.location = loc.substring(0, index);
				}},550);
			}	
        });
    </script>
    
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
                    <form id="login" method="get" action="scripts/find_assignment_code.php">
                        <input type="text" name="assignment_code" placeholder="Assignment Code">
                        <br/><br/>
                        <div class="center">
                            <input type="submit" class="stdButton" name="acode" href="studentlogin.php" id="assignmentToLab" value="Continue">
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
                
                <!-- Students: Enter in lab code -->
                <div id="labCode" class="contentBlock">
                <a title="Go Back to Assignment Code" href="javascript:void(0)" id="labToAssignment"><img class="goBack" src="css/assets/left_arrow.png"></a>
                    <h2>Have you already started working?</h2>
                    <div class="center">Enter Your Lab Code</div>
                    <!-- Lab Code form -->
                    <form id="login" method="post" action="scripts/labcode.php">
                        <input type="text" name="assignment_code" placeholder="Lab Code">
                        <br/><br/>
                        <div class="center">
                            <a class="stdButton" href="javascript:void(0)" id="assignmentToLab">Continue</a>
                        </div>
                    </form>
                    
                    <!-- Begin if they do not have a lab code-->
                    <h2>Is this your first time on this assignment?</h2>
                    <div class="center">
                        Click below to begin.
                        <a class="stdButton" href="javascript:void(0)" id="labBegin">Begin</a>
                    </div>
                    
                    <!-- Find lab code if not sure how -->
                    <div class="center">
                        <hr>
                        Not sure how to find your assignment code?<br><br>
                        <a class="stdButton" href="javascript:void(0)" id="findLabCode">Find It</a>
                    </div>
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
                    <!-- Go to learn more 
                    <a class="learn" href="#" id="learnMore">Learn More</a>-->
                    </p>
                </div>
                
                <!-- Learn more/About -->
                <div class="contentBlock">
                    <h4> &ldquo;The Early Birds write the words.&rdquo;</h4><br>
                    <p class="learnMore">Early Birds is a web application that allows teachers to integrate computers into elementary education. It primarily focuses on guiding younger students in using computers to write formal science lab reports.</p><br>
					<p class="learnMore">This website has two separate interfaces: one for students and one for teachers. The student portion of the website includes an easy-to-use interface for writing lab reports, engaging graphics, and recognizable buttons with text. The teacher portal provides information on how to use Early Birds in the classroom and allows teachers to create assignments as well as view their students’ current and previous assignments by signing up for an account.</p><br>
					<p class="learnMore">Early Birds encourages students to become comfortable using computers for classroom assignments at a young age. If you're a teacher looking to get started using Early Birds, register for an account.</p><br>
					<!-- Go back to splash page -->
                    <a title="Go Back to the Main Menu" href="javascript:void(0)" id="aboutToSplash"><img class="goBack" src="css/assets/left_arrow.png"></a>
                </div>
                
				<!-- Login div -->
                <div id="login" class="contentBlock">
               		<!-- Up arrow to go back to splash div -->
					<a title="Go Back to Main Menu" href="javascript:void(0)" id="loginToSplash"><img class="goBack vertical" src="css/assets/up_arrow.png"></a>
                    <h2>Login</h2>
                    <!-- Login form -->
                    <form id="login" method="post" action="scripts/login.php">
	                    <input type="text" name="email" placeholder="Email">
	                    <input type="password" name="password" placeholder="Password">
	                    <div class="center">
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
                	<form id="register" method="post" action="scripts/registration.php">
	                    <input type="text" name="name" placeholder="Name">
	                    <input type="text" name="email" placeholder="Email">
	                    <input type="text" placeholder="Confirm Email">
	                    <input type="password" name="password" placeholder="Password">
	                    <input type="password" placeholder="Confirm Password">
	                    <div class="center">
	                    	<input type="submit" value="Register" class="button" id="register">
	                    </div>
	                </form>
	            <!-- Commented out b/c "Learn more" may potentially crowd screen -->
				<!-- <a href="javascript:void(0)" id="registerToAbout">Learn More</a> -->
                </div>
            </div>
            <div id="blueDrop"></div>
        </div>
    </div>



    <!-- Contains hidden content for learn more -->
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
            </div>
        <!-- end hidden content -->


  </body>
</html>