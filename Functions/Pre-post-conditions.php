<?php 

class StudentModel
{	
	protected $_name;
	protected $_grade;

	public function getName(){
		return $this->_name;
	}

	public function setName($name){
		$this->_name = $name;
	}

	public function getGrade(){
		return $this->_grade;
	}

	public function setGrade($grade){
		return $this->_grade = $grade; 
	}
}

class ScholarShip 
{

	protected $_st;

	public function __construct(
		StudentModel $st
	){
		$this->_st = $st;
	}

	public function execute() {
		
		$grade = $this->_st->getGrade();	

		if($this->_st->getName()){
			// passed the exam average 2.0		
			if( $grade >= 1 && $grade <= 2 ){
				echo $this->getScholarship();
			}
		}

		// post condition
		// if all requirements has been occured
		// get your scholar

	}	

	private function getScholarship(){
		return 'Hi ' .$this->_st->getName(). ' you win your scholarship this year';
	}
}


$studentModel = new StudentModel();		
$studentModel->setName('Regine');
$studentModel->setGrade(1.5);

$scholarShip = new ScholarShip($studentModel);
$scholarShip->execute();

echo '<br/>';

function add($n1, $n2){
	if(!is_int($n1) || !is_int($n2)){
		return false;	
	}
	
	return $n1+$n2;
}

function subtraction($n1, $n2){
	if(!is_int($n1) || !is_int($n2)){
		return false;	
	}
	
	return $n1-$n2;
}

function multiplication($n1, $n2){
	if(!is_int($n1) || !is_int($n2)){
		return false;	
	}
	
	return $n1*$n2;
}

function division($n1, $n2){
	if(!is_int($n1) || !is_int($n2)){
		return false;	
	}
	
	return $n1/$n2;
}



echo add(1,2); 
echo '<br/>';
echo subtraction(1,2); 
echo '<br/>';
echo multiplication(1,2); 
echo '<br/>';
echo division(1,2); 

