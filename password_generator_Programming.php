<?php 
	$lower = 'abcdefghijklmnopqrstuvwxyz';
	$upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numbers = '0123456789';
	$symbols = '#$%*!';

	$chars = $lower . $upper . $numbers . $symbols;
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

// 	print_r($chars);

$i = rand(0,strlen($chars)-1); // -1 in length because array starts from zero and it includes all characters in String $chars

echo $chars[$i];
	echo '<br>';

// Programming logic builds up like this. First a task is determined, then tested with variable and builtin funtion by echo output. Then if result is out as desired then build to use function and loops.

function random_char($string){
	$i = rand(0,strlen($string)-1);
	return $string[$i];
}


	$length = 8;
	$temp = '';
	for($i=0; $i < $length ; $i++)
	{
		$temp .= random_char($chars);
	}
	echo $temp;

// function random_string($char_set) {
// 	$length = 5;
// 	$temp = '';
// 	for($i=0; $i < $length ; $i++)
// 	{
// 		$temp .= random_char($char_set);
// 	}
// 	return $temp;
// }
// 	echo random_string($chars);

// Programming logic builds up like this. First a task is determined, then tested with variable and builtin function by echo output. Then if result is out as desired then build to use function and loops.
?>