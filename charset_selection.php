<?php 

function random_char($string){
	$i = rand(0,strlen($string)-1);
	return $string[$i];
}

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
	function generate_password($length){

	$lower = 'abcdefghijklmnopqrstuvwxyz';
	$upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numbers = '0123456789';
	$symbols = '#$%*!';

	$use_lower = true; // variables to set charsets required
	$use_upper = true;
	$use_numbers = true;
	$use_symbols = true;

	$chars = '';
	
	if($use_lower === true) $chars .= $lower;
	if($use_upper === true) $chars .= $upper;
	if($use_numbers === true) $chars .= $numbers;
	if($use_symbols === true) $chars .= $symbols;

	return random_string($length,$chars);
	}

	echo generate_password(9);

?>