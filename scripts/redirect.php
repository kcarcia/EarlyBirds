<?php
	# Kaitlyn Carcia and Will Soeltz
	# University of Massachusetts Lowell, 91.462 GUI Programming II, Jesse M. Heines
	# File: redirect.php
	# Redirects a user loading an existing lab to the studenthub page with correct information
	# Last updated April 7, 2014 by KC

	session_start();
	
	# Get lab id number
	$id = $_GET['id'];
	
	# studenthub variable is set to true
	$_SESSION['here']="true";
	
	# Redirect to studenthub
	$url = "../studenthub.php?id=" . $id;
	header("Location: $url");
?>