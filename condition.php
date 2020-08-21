<?php 

declare(strict_types = 1);


function is_vowel($string1) {

	if (ctype_upper($string1)) { 	         
        // if true then return Yes 
        echo "Yes\n"; 
    } else { 
          
        // if False then return No 
        echo "No\n"; 
    } 
}

is_vowel('?');

die();


function write_sqrt(float $x) : float
{
	if($x >= 0) {
		return $x;
	}	
}

echo write_sqrt(5.6);



die();

function five(int $number) : int
{

	// if(!is_integer($number)) {
	// 	throw new \Exception;
	// }	

	$total = $number + 5;
	
	// if(!is_integer($total)) {
	// 	throw new Exception;
	// }

	return $total;
}


echo five('4');


