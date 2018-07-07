<?php
	/*
	 * Trace Larson
	 * 6-29-01
	 * SSL Section 01
	 *  Assignment 1: Run your code
	 *  Questions 2-4
	 */
	
	#2
	echo '<br>';
	$name = "Trace";
	$age = 32;
	$person = [$name, $age, "name" => $name, "age" => $age ];
	
	#2.1
	echo "My name is $name and age is $age";
	echo '<br>';
	
	#2.2
	echo 'My name is ' . $name . ' and age is ' . $age;
	echo '<br>';
	
	#2.3
	echo "My name is $person[0] and age is $person[1]";
	echo '<br>';
	
	#2.4
	echo "My name is {$person['name']} and age is {$person['age']}";
	echo '<br>';
	
	#2.5
	$age = null;
	echo $age;
	echo '<br>';
	// Returns nothing
	
	
	#2.6
	unset($name);
	echo $name;
	echo '<br>';
	// Returns: Undefined variable: name in /var/www/html/myframework/Week1/activity1-1.php on line 30
	
	
	
	#3
	echo '<br>';
	function assignLetterGrade($points){
		if($points >= 90){
			return 'A';
		}else if($points >= 80 and $points < 90){
			return 'B';
		}else if($points >= 70 and $points < 80){
			return 'C';
		}else if($points >= 60 and $points < 70){
			return 'D';
		}else if($points < 60){
			return 'F';
		}
		else{
			return 'Invalid';
		}
	}
	echo assignLetterGrade(94); // Returned A
	echo '<br>';
	echo assignLetterGrade(54); // Returned F
	echo '<br>';
	echo assignLetterGrade(89.9); // Returned B
	echo '<br>';
	echo assignLetterGrade(60.01); // Returned D
	echo '<br>';
	echo assignLetterGrade(102.1); // Returned A
	echo '<br>';
	
	
	
	
	#4
	echo '<br>';
	$colors = [0 => 'Red', 1 => 'Pink', 2 => 'Blue', 3 => 'Sky Blue', 4 => 'Purple', 5 => 'Magenta' ];
	foreach ($colors as $color => $value) {
		echo "Color $color is $value";
		echo '<br>';
	}
	// Returned:
	/*
	    Color 0 is Red
	    Color 1 is Pink
		Color 2 is Blue
		Color 3 is Sky Blue
		Color 4 is Purple
		Color 5 is Magenta
	 */
	
	
?>