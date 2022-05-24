<?php
  	// initialize the sum to 0
	$sum = 0;

	// initalize numbers as an empty string
	$numbers = "";
	
	// get the user number
	$userNum = intval($_POST["userNum"]);

	// use a for loop to calculate and display the sum from 0 up to the user number
	for ($counter = 0; $counter <= $userNum; $counter++) {
		// if we have not reached the userNum, add a + to the end
		if ($counter < $userNum) {
			$numbers = $numbers . $counter . "+";
		}
		// if we have reached the userNum, we are done building our string of numbers
		else {
			$numbers = $numbers . $counter;
		}
		// add the counter to the current sum
		$sum = $sum + $counter;
	}

	echo $numbers . "=" . $sum;
?>


