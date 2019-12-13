<?php 
	
	// echo $chars;

	echo '<br>';

// // Two alternate Ways to generate char-sets
	// echo range(1,8); // Error in this line Array to string conversion
	// echo rand(1,8); //generates random numbers betweeen 1 and 8
	// echo '<br>';
// implode is similar to join it converts array to string.
// 	$lower = implode(range('a','z'));
// 	$upper = implode(range('A','Z'));
// 	$numbers = implode(range(0,9));
// 	$symbols = '#$%*!';

// 	$chars = $lower . $upper . $numbers . $symbols;

// 	print_r($chars); //formatted alternative to using echo 

// $i = rand(0,strlen($chars)-1); // -1 in length because array starts from zero and it includes all characters in String $chars

// echo $chars[$i];
// 	echo '<br>';

// Programming logic builds up like this. First a task is determined, then tested with variable and builtin funtion by echo output. Then if result is out as desired then build to use function and loops.

function random_char($string){
	$i = rand(0,strlen($string)-1);
	return $string[$i];
}

//Before writing function or loops test basics echo output
	// $length = 8;
	// $temp = '';
	// for($i=0; $i < $length ; $i++)
	// {
	// 	$temp .= random_char($chars);
	// }
	// echo $temp;

	
	

function random_string($length,$char_set) {
	// $length = 5; we can use dynamic length from now.passed as 
	//parameter of generate_password func
	$temp = '';
	for($i=0; $i < $length ; $i++)
	{
		$temp .= random_char($char_set);
	}
	return $temp;
}

// Programming logic builds up like this. First a task is determined, then tested with variable and builtin function by echo output. Then if result is out as desired then build to use function and loops.     

// Configuring charset using generate_password func and length parameter. 

	function generate_password($length){

	$lower = 'abcdefghijklmnopqrstuvwxyz';
	$upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numbers = '0123456789';
	$symbols = '#$%*!';

	
	$chars = $lower . $upper . $numbers . $symbols;
	return random_string($length,$chars);
	}

	echo generate_password(9);























?>