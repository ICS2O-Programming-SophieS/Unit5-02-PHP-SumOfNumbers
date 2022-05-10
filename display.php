<?php
  	// initialize the counter to 0
	$counter = 0;
	// initalize numbers as an empty string
	$numbers = "";
	
	// get the user number
	$userNum = intval($_POST["userNum"]);

	// use a while loop to display the numbers from 0 up to the user number
	while ($counter <= $userNum) {
		// build the string of numbers with a line break each time
		$numbers = $numbers . $counter . "<br>";
		// increment the counter
		$counter++;
	}

	echo $numbers;
?>


