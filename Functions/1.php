<?php 

http://www.cs.nott.ac.uk/~psznza/G52ADS99/lecture3.html

//  https://stackoverflow.com/questions/9001294/bubble-sort-implementation-in-php
// declare(strict_types = 1);

echo '<pre/>';

// 1st loop
// $i- $size
// 0 - 4
// 1 - 4
// 2 - 4
// 3 - 4

// 2nd loop
// $j- $size - $i
// 0 - 4 - 0
// 1 - 4 - 0
// 2 - 4 - 0
// 3 - 4 - 0
// 0 - 4 - 1
// 1 - 4 - 1
// 2 - 4 - 1
// 3 - 4 - 1
// 0 - 4 - 2
// 1 - 4 - 2
// 2 - 4 - 2
// 3 - 4 - 2
// 0 - 4 - 3
// 1 - 4 - 3
// 2 - 4 - 3
// 3 - 4 - 3

// $i 		< 	 $j	
// 0 = 10		0 = 10
// 1 = 0 		0 = 10 	ok 0
// 2 = 9		0 = 10 	ok 9
// 3 = 15		0 = 10 
// 0 = 10		1 = 0 
// 1 = 0		1 = 0 
// 2 = 9		1 = 0 
// 3 = 15		1 = 0 
// 0 = 10		2 = 9 
// 1 = 0		2 = 9 	ok 0
// 2 = 9		2 = 9 
// 3 = 15		2 = 9 
// 0 = 10		3 = 15 	ok 10
// 1 = 0		3 = 15 	ok 0
// 2 = 9		3 = 15 	ok 9
// 3 = 15		3 = 15 


$numbers = array(10,0,9,15, 2, -1);
echo '<pre/>';
print_r($numbers);

// echo "Numbers before sort: ";
// for ( $i = 0; $i < $array_size; $i++ )
//    echo $numbers[$i];
// echo "<br/>";

function sorting($numbers) {
	$array_size = count($numbers);
	for ( $i = 0; $i < $array_size; $i++ )
	{
	   for ($j = 0; $j < $array_size; $j++ )
	   {	
	      	if ($numbers[$i] < $numbers[$j])
	      	{
	      		/*
					10 	- 15
					0 	- 15
					9 	- 15
					10 	- 15


					10,0,9,10
					0,10,9,10
					0,9,10,10
					0,9,10,15
	      		*/

				// $temp = $numbers[$i];	
				list($numbers[$i], $numbers[$j]) = [$numbers[$j], $numbers[$i]];	
	         	
	         	// $numbers[$i] = $numbers[$j];
	         	// $numbers[$j] = $temp;	      		
	      	}
	   	}
	}
	return $numbers;
}

print_r(sorting($numbers));
// die();

// echo "Numbers after sort: ";
// for( $i = 0; $i < $array_size; $i++ )
//    echo $numbers[$i];

die();


// list($j, $i) = array(100, 200);

// echo $j . ' - ' .$i;


// k: 0 - j 10
// k: 0 - j 10
// k: 9 - j 10
// k: 9 - j 10
// k: 15 - j 10
// k: 9 - j 0
// k: 10 - j 9
// k: 9 - j 0

// $j=10; $k=0;
// list($j, $k) = [0, 10];
// echo $j. ' - ' .$k;

// echo '<br/>';

// $j=10; $k=0;
// list($j, $k) = [0, 10];
// echo $j. ' - ' .$k;

// echo '<br/>';

// $j=10; $k=9;
// list($j, $k) = [9, 10];
// echo $j. ' - ' .$k;

// echo '<br/>';

// $j=10; $k=9;
// list($j, $k) = [9, 10];
// echo $j. ' - ' .$k;

// echo '<br/>';

// $j=10; $k=15;
// list($j, $k) = [15, 10];
// echo $j. ' - ' .$k;

// echo '<br/>';

// $j=0; $k=9;
// list($j, $k) = [9, 10];
// echo $j. ' - ' .$k;

// echo '<br/>';


// die();

function bubble_sort($arr) {
   	// count an array then subtract to 1
   	// orig 8 now it's 7
    $size = count($arr) - 1;
    // 0,1,2,3
    // 0,1,2
    // 0,1 

    // echo $i . ' - ' .  $size;
    // echo '<br/>';
    // die();
   	  	
    for ($i=0; $i<$size -1; $i++) {

    	// echo $i . ' - ' .$size;
    	// echo "<br/>";
        for ($j=0; $j<$size - $i; $j++) {

        	// echo $j . ' - ' . $size-$i. ' - ' . $i;
        	// echo '<br/>';
        	$k = $j+1;
        	// echo '<br/>';	


        	// echo $j. ' - ' .$size;
        	// echo 'k: ' .$arr[$k]. ' - j ' .$arr[$j];
        	// echo "<br/>";	

            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                echo 'before: ';
                echo 'j: ' .$arr[$j]. ' - k: ' .$arr[$k];
                echo "<br/>";
                echo 'after :';
                echo 'k: ' .$arr[$k]. ' - j: ' .$arr[$j];
                echo "<br/>";	

                /**
                	before: j: 10 - k: 0
                	after :k: 0 - j: 10
                	before: j: 10 - k: 9
                	after :k: 9 - j: 10
				 */ 


                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }

    }
    return $arr;
}


$arr = array(10,0,9,15);

print("Before sorting");
print_r($arr);

$arr = bubble_sort($arr);
print("After sorting by using bubble sort");
print_r($arr);







die();


$arr = [10,0,9,15];
		// 0,10,9,15
		// 0,9,10,15






function bubble_Sort1($my_array )
{
	// echo count( $my_array ) - 1;


	// echo '<br/>';		

	// do
	// {
		$swapped = false;
		for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
		{

			// echo $i. ' - ' . $c;	

			echo $my_array[$i] . ' - ' . $my_array[$i + 1]; 
			echo '<br/>';	

			if( $my_array[$i] > $my_array[$i + 1] )
			{
				list( $my_array[$i + 1], $my_array[$i] ) =	array( $my_array[$i], $my_array[$i + 1] );
				$swapped = true;
			}
		}
	// }
	// while( $swapped );
	return $my_array;
}
 $test_array = [10,0,9,15]; //array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array\n:";
echo implode(', ',bubble_Sort1($test_array)). PHP_EOL;

die();


// 5,1,4,2,8
// 1,5,4,2,8
// 1,4,5,2,8
// 1,4,2,5,8	

// 1,2,4,5,8

//  [6,3,15,9,12]; // 
// print_r($arr);


/*
	Array
	(
	    [0] => 10
	    [1] => 0
	    [2] => 9
	 
	)
*/ 

// $new_arr[] = $arr[1];
// $new_arr[] = $arr[2];
// $new_arr[] = $arr[0];


// print_r($new_arr);

// die();
echo '<pre/>';

$sort_array = [];
if (is_array($arr)) {	
	$x = 0;
	for ($i=0; $i < count($arr) ; $i++) {

		for ($j=0; $j < count($arr) ; $j++) { 
			$y = $x++;
			

			echo $arr[$j]. ' - ' .$arr[$i];
			echo '<br/>';
			// if(empty($sort_array)) {
				// $sort_array[] = $arr[$i];
			// }

			// print_r($sort_array);
		
			// 
			// echo 'sort_array index: ' .($y-1). ' sort_array value: ' .$sort_array[$y-1]. ' active index: ' .$j. ' active value: ' .$arr[$j];
				
			// echo '<br/>';	

			// if($sort_array[$y] > $arr[$j]){
				// $sort_array[$y] = $sort_array[$y];
			// }


			// if() {

			// }


			
			// if($arr[$j] < $arr[$i] 
			// 	|| $arr[$j] == $arr[$i]
			// ){

			// 	echo $arr[$j]. ' - ' .$arr[$i];
			// 	echo '<br/>';

			// }

			// pre-conditions 
			// check if $arr[$j] is less than to $arr[$i]
			// if ($arr[$j] <= $arr[$i]) {				
				// post-conditions
				// check if $arr[$j] values are already push to $sort_array			
				// $sort_array[$j] = $arr[$j];
				// $sort_array[$j] = $arr[$i];
				// echo $arr[$i]. ' - ' . $arr[$j]; 
				// echo '<br/>';
				// if ($arr[$j] !== $arr[$i]) {
					// $sort_array[$i] =  $arr[$i];		
					
				// }
				// $sort_array[2] = 0;

				
			// } 

			// if ($arr[$j] !== $arr[$i]) {
			// 					// echo $arr[$i];		
								
			// 				}


			// if ($arr[$j] >  $arr[$i]) {
				// $sort_array[$j] = $arr[$j];
			// }



			// if()
		}
	}
}	


			print_r($sort_array);



die();
$start = microtime(true);
for ($i=0; $i < count($arr) ; $i++) { 
	echo $arr[$i].PHP_EOL;
}

echo "Completed in ", microtime(true) - $start, " Seconds\n";

echo '<br/>';

$start = microtime(true);
foreach ($arr as $key => $value) {
	echo $value.PHP_EOL;
}
echo "Completed in ", microtime(true) - $start, " Seconds\n";


die();

function storage($dir)
{
	// pre-conditions
	if(is_dir($dir)){

		$handle = opendir($dir);

		// post-conditions
		if ($handle){
			echo "Directory handle: $handle\n";
			echo "Entries:\n";

			/* This is the correct way to loop over the directory. */
			while (false !== ($entry = readdir($handle))) {
			    echo "$entry\n";
			}
		}

		// $directories[] = $dir; 

		// var_dump(sizeof($directories));
		// return $files1 = scandir($dir);	
	}
	
	die();

	// var_dump($dir);
	// die();
	if($dir == 0){
		// return false;
		exit;
	}

	return $dir;
}

try {
	echo '<pre/>';
	$dir = getcwd(); // 'D:\Apps\Program\xampp\htdocs\solid-principles\Functions';
	storage($dir);
} catch (TypeError $e) {
	echo $e->getMessage();	
}


die();

class Calculator 
{
	public function execute(){

		try {
		    echo $this->add("3", "4");
		}
		catch (TypeError $e) {
		    echo $e->getMessage();
		}
	}

	public function add(int $a, int $b)
	{
	    return $a + $b;
	}
}

$c = new Calculator;
$c->execute();