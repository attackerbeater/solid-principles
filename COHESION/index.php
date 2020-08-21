<?php 
// https://youtu.be/lt_USS_B-jg

// low cohesion
// the problem is that methods for UI and logic are presenty in the same class 
// leads to less reusablity of code, low readibility and less test ability 
class Adder 
{
	public function input(){}
	public function add(){}
	public function display(){}
}

// high cohesion
// much better
class Calculator
{	
	
	public function add($x, $y)
	{
		return $x + $y;
	}

	public function subtract($x, $y)
	{
		return $x - $y;
	}

	public function multiply($x, $y)
	{
		return $x * $y;
	}
	
	public function divide($x, $y)
	{
		return $x / $y;
	}
}

class Window extends Calculator
{
	private $calculator;
	public $x, $y;

	public function __construct(
		Calculator $calculator
	)
	{
		$this->calculator = $calculator;
	}

	public function input($event){
		switch ($event) {
			case 'add':
				$result = $this->calculator->add($this->x, $this->y); 
				break;

			case 'subtract':
				$result = $this->calculator->subtract($this->x, $this->y); 
				break;
				
			case 'multiply':
				$result = $this->calculator->multiply($this->x, $this->y); 
				break;
	
			case 'divide':
				$result = $this->calculator->divide($this->x, $this->y); 
				break;

			default:
				
				$result = 'This event is not allowed';
				break;
		}

		return $result;
	}

	public function displayError()
	{	

	}	

	public function displayResult()
	{
		return $this->input('add');
	}
}

$w = new Window(new Calculator);
$w->x = 1;
$w->y = 10;
echo $w->displayResult();

