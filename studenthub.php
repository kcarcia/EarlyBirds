<!DOCTYPE html>
<!--
Early Birds Student Hub
Created 2/27/2014 by Kaitlyn Carcia
Will Soeltz and Kaitlyn Carcia
University of Massachusetts Lowell, 91.462 GUI Programming II, Jesse M. Heines
File: studenthub.html
Screen contains all tools necessary to create lab report
Last updated March 2, 2014 by KC
-->

<html>
    <head>
        <meta charset = "utf-8" />

        <!-- Styling for this page - also includes general styling used in the student login -->
        <link rel = "stylesheet" href = "css/reset.css" />
        <link rel = "stylesheet" href = "css/studentlogin.css" />
        <link rel = "stylesheet" href = "css/studenthub.css" />

        <!-- Open Sans Google Font API -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic,800' rel='stylesheet' type='text/css'>

        <title>Early Birds</title>

<!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- jQuery UI -->
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        
        <!-- js for jQuery Tabs from jQuery UI -->
        <script src="tabs/js/jquery.ui.widget.js"></script>
        <script src="tabs/js/jquery.ui.tabs.js"></script>
        
        <!-- styling for jQuery tabs from jQuery UI -->
        <link rel="stylesheet" href="tabs/css/jquery.ui.all.css">
        
        <!-- Scripts to get jQuery tabs working w/ site -->
        <script src="js/tabs.js"></script>
    </head>
    <body>
        <div id="contentWrapper">
        
            <!-- Header containing logo and the Early Bird -->
            <div id="header">
                <div id="logoText">
                    <a href="index.html"><img src="css/assets/logo_textonly.png" title="Early Birds" alt="Early Birds" width="409" height="93"/></a>
                </div>
            </div>
            
            <!-- Container for all main content -->
            <div id="mainBodyContent">
             <!-- Keeps parents of floating elements from collasping -->
                <div class="clearfix">
                 <!-- Lab/teacher name and teacher email information - Will eventually be replaced w/ PHP -->
                    <div id="labInfo" style="float:left;">
                        <h2>Gravity Apples</h2>
                        <h3 class="bold">Teacher:</h3> <h3>John Smith</h3><br>
                        <h3 class="bold">Contact:</h3> <h3>jsmith@gmail.com</h3><br>
                    </div>

					<!-- Student/lab code information on left - Will eventually be replaced w/ PHP -->
                    <div id="labInfo" style="float:right; text-align:right;">
                        <h3 class="bold">Student:</h3> <h3>Balthazar McAndrews Junior</h3><br>
                        <font color="#f7d708"><h3>Your Lab Code:</h3> <h3 class="bold">17</h3></font><br>
                        <h4>Don't forget to write down your lab code</h4>
                    </div>
                </div>
                
				<!-- All tabs for lab report -->
                <div id="tabs">
                    <ul>
                        <li><a id="#tabs1" href="#tabs-1">Problem</a></li>
                        <li><a id="#tabs2" href="#tabs-2">Hypothesis</a></li>
                        <li><a id="#tabs3" href="#tabs-3">Materials</a></li>
                        <li><a id="#tabs4" href="#tabs-4">Procedure</a></li>
                        <li><a id="#tabs5" href="#tabs-5">Results</a></li>
                        <li><a id="#tabs6" href="#tabs-6">Conclusion</a></li>
                    </ul>
                    <div id="tabs-1">
						<!-- Input box -->
						<textarea name="problemInput" class="textInput" id="tabs-1-box"></textarea>
                    </div>
                    
                    <div id="tabs-2">
						<!-- Input box -->
						<textarea name="problemInput" class="textInput" id="tabs-2-box"></textarea>
                    </div>
                    <div id="tabs-3">
						<!-- Input box -->
						<textarea name="problemInput" class="textInput" id="tabs-3-box"></textarea>
                    </div>
                    <div id="tabs-4">
						<!-- Input box -->
						<textarea name="problemInput" class="textInput" id="tabs-4-box"></textarea>
                    </div>
                    <div id="tabs-5">
						<!-- Input box -->
						<textarea name="problemInput" class="textInput" id="tabs-5-box"></textarea>
                    </div>
                    <div id="tabs-6">
						<!-- Input box -->
						<textarea name="problemInput" class="textInput" id="tabs-6-box"></textarea>
                    </div>
                </div>
                
                <!-- Hint section -->
                <div id="labHelp">
                 <!-- Keeps parents of floating elements from collasping -->
                    <div class="clearfix">
                        <div id="hintContainer">
                            <!-- First problem hint that shows on site -->
                            <h3>Need Help Writing your</h3><h3 class="bold">&nbsp;Problem?</h3><br>
                            <p>What questions are you trying to answer? Include any preliminary observations or background information about the subject.</p>
                        </div>
                        <!-- Container for cartoon bird image -->
                        <div id="bird">
                            <img src="css/assets/earlybird1.png" title="Early Birds" alt="Early Birds" width="266" height="147"/>
                        </div>
                    </div>
                </div>
                
                <div id="navButtons">
                    <!-- Save, Next, and Previous buttons -->
                    <a id="previous" class="stdButton stdButton-hover previous">Previous Section</a>
                    <a id="save" class="stdButton save">Save</a>
                    <a id="next" class="stdButton stdButton-hover next">Next Section</a>
                
                <!-- Reminder for lab code - eventually PHP code will exist here -->
                <div class="center">
                   <font color="#f7d708"><h3>Your Lab Code:</h3> <h3 class="bold">17</h3></font><br>
                   <h4>Don't forget to write down your lab code</h4>
                   <h4>so you can continue your work later</h4>
                </div>
                </div>
                <!-- Adding some space -->
                <div style="height: 170px"></div>
            </div>
        </div>
        
    	<?php
			include "include/footer.html";
		?>
    <body>
</html>