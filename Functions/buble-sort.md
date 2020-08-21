
http://www.cs.nott.ac.uk/~psznza/G52ADS99/lecture3.html


array(
	0 => 10,
	1 => 0,
	2 => 9,
	3 => 15
);

1st lopp
0 - 3
1 - 3
2 - 3

2nd  loop 
$j - (count($arr) - $i) - $i
0 - 3 - 0
1 - 3 - 0
2 - 3 - 0
0 - 3 - 1
1 - 3 - 1
0 - 3 - 2

--

$j - $k - $arr[$k] < $arr[$j]
0 - 1 - $arr[1] = 0  < $arr[0] = 10 = true  = 0
1 - 2 - $arr[2] = 9  < $arr[1] = 0  = false
2 - 3 - $arr[3] = 15 < $arr[2] = 9  = false
0 - 1 - $arr[1] = 0  < $arr[0] = 10 = true  = 0
1 - 2 - $arr[2] = 9  < $arr[1] = 0  = false
0 - 1 - $arr[1] = 0  < $arr[0] = 10 = true 	= 0

0 	< 10
9 	< 10
15 	< 10
9 	< 0
10 	< 9
9 	< 0


10,0,9,15
0,10,9,15
0,9,10,15


0,10
9,10

