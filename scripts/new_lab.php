<?php
	# Kaitlyn Carcia and Will Soeltz
	# University of Massachusetts Lowell, 91.462 GUI Programming II, Jesse M. Heines
	# File: userpass.php
	# Database constants used for connecting to the database
	# Last updated March 30, 2014 by KC

	# connects to database
	include "connect.php";
	
	session_start();
	$acode = $_SESSION['acode'];
	$sname = $_REQUEST['assignment_code'];
	$_SESSION['sname'] = $sname;

	addLabToDatabase($acode, $sname);
	
	# Adds new lab to the database
	function addLabToDatabase($acode, $sname) {
 		
		# Inserts user into database
		$result = mysql_query("INSERT INTO Labs (Lab_ID, Assignment_Code, Student_Name) VALUES ( 'mysql_insert_id()', '$acode', '$sname')")
			or die("<p>Error inserting into the database: " .
					mysql_error() . "</p>");
 		
		# Sets lab_ID session variable 		
 		$id = mysql_insert_id();
 		$_SESSION['Lab_ID']=$id;

		# Here variable signifies user is on the studenthub page
		$_SESSION['here'] = "true";

		# Redirect to studenthub with lab id in URL
		$url = " ../studenthub.php?id=" . $id;
 		header("Location: $url");
	}
?>