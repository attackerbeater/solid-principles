<?php 

interface HttpGetActionInterface {
	public function execute();
}

abstract class Category 
{

	protected function _initCategory($getRootInstead = false)
	{
		print __METHOD__;
	}
}

class Add extends Category implements HttpGetActionInterface
{
	public function execute()
	{
		$category = $this->_initCategory(true);
	}
}

class Edit extends Category implements HttpGetActionInterface
{
	public function execute()
	{
		$category = $this->_initCategory(true);
	}
}



$objAdd = new Add();
$objAdd->execute();

$objEdit = new Edit();
$objEdit->execute();

die();


// wrong OCP

class A {}
class B {}
class C {}

class Main {

	public function method1($shape) {

		if (is_a($shape, 'A')) {
			echo 'A';
		} else if (is_a($shape, 'B')) {
			echo 'B';
		} else if (is_a($shape, 'C')) {
			echo 'C';
		}		
		
	}
}

$objM = new Main(); 
$objM->method1(new A);
$objM->method1(new B);
$objM->method1(new C);


die();


// correct OCP
interface ABCInterface {
	public function run();
}

class Main {

	private $_h;

	public function __construct(
		ABCInterface $h
	) {
		$this->_h = $h;
	} 
	
	public function method1() {
		return $this->_h->run();
	}
}

class A implements ABCInterface {
	public function run(){
		echo __METHOD__;
	}
}

$objM = new Main(new A()); 
$objM->method1();

class B implements ABCInterface {
	public function run(){
		echo __METHOD__;
	}
}

$objM = new Main(new B()); 
$objM->method1();

class C implements ABCInterface {
	public function run(){
		echo __METHOD__;
	}
}

$objM = new Main(new C()); 
$objM->method1();





die();

interface Chair {
	public function hasLegs();
	public function sitOn();
}

class VictorianChair implements Chair {
	
	public function hasLegs(){

	}

	public function sitOn(){

	}
}

class ModernChair implements Chair {
	
	public function hasLegs(){

	}

	public function sitOn(){

	}
}

die();


interface TasksInterface {

	public function assignTo();
}

class Developer Implements TasksInterface {

	public function assignTo() {
		return 'Disable Module';
	}
}

class Designer Implements TasksInterface {

	public function assignTo() {
		return 'Revise Images';
	}
}

class PM {

	private $task; 

	public function __construct(
		TasksInterface $task
	) {
		$this->task = $task;
	}

	public function getTask(){
		return $this->task->assignTo();	
	}
}

class DeveloperFactory {

	public function create($obj) {
		return new PM($obj);
	}
}

class DesignerFactory {

	public static function create($obj) {
		return new PM($obj);
	}
}

class BaseCamp {

	protected $developer;
	protected $designer;
	protected $developerFactory;

	public function __construct(
		Developer $developer,
		Designer $designer,
		DeveloperFactory $developerFactory
	) {
		$this->developer = $developer;
		$this->designer = $designer;
		$this->developerFactory =  $developerFactory;
	}

	public function execute() {
		$developerFactory = $this->developerFactory->create($this->developer);
		echo $developerFactory->getTask();
		echo '<br/>';

		$designerFactory = DesignerFactory::create($this->designer);
		echo $designerFactory->getTask();
	}

}


$bc = new BaseCamp(new Developer, new Designer, new DeveloperFactory);
$bc->execute();

die(); 


interface PartsInterface {
	public function part();
}

class CPU {

	private $part;

	public function __construct(
		PartsInterface $part
	){
		$this->part = $part;
	}


	public function execute() {
		return $this->part->part();		
	} 
}


class Ram implements PartsInterface {

	public function part() {
		return __CLASS__;
	}
}

$ram = new Ram;
$cpu = new Cpu($ram);
echo $cpu->execute();

class MoBo implements PartsInterface {

	public function part() {
		return __CLASS__;
	}
}

$ram = new Mobo;
$cpu = new Cpu($ram);
echo $cpu->execute();

class Processor implements PartsInterface {

	public function part() {
		return __CLASS__;
	}
}

$ram = new Processor;
$cpu = new Cpu($ram);
echo $cpu->execute();


die();

interface BankInterface {

	public function type();
}


class BankHolder {

	private $bankInterface;

	public function __construct(
		BankInterface $bankInterface
	) {
		$this->bankInterface = $bankInterface; 
	}

	public function execute() {
		return $this->bankInterface->type();
	}
}



class Bpi implements BankInterface {
	
	public function type() {
		return __CLASS__;
	}
}

$bpi = new Bpi;
$bH = new BankHolder($bpi);
echo $bH->execute(). PHP_EOL;


class Security implements BankInterface {
	
	public function type() {
		return __CLASS__;
	}
}

$sb = new Security;
$bH = new BankHolder($sb);
echo $bH->execute();


