<?php

interface InstallDataInterface {
   
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context);
}

interface SetupInterface {
	public function startSetup();
	public function endSetup();
}

interface ModuleDataSetupInterface extends SetupInterface { 
	public function getTableRow($table, $idField, $rowId, $field = null, $parentField = null, $parentId = 0);
    public function deleteTableRow($table, $idField, $rowId, $parentField = null, $parentId = 0);

}

interface ModuleContextInterface{ 
	public function getVersion();
}	

class InstallData implements InstallDataInterface {

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context){

		$setup->startSetup();

		if(version_compare($context->getVersion(), '1.2.0') < 0) {

			$setup->getConnection();

			$setup->getTableRow($table, $idField, $rowId, $field = null, $parentField = null, $parentId = 0);

		}
	
		$setup->endSetup();
	}
}


$installObj = new InstallData();



die();


interface PencilInterface {

	public function pencil();
}

interface EraserInterface {

	public function eraser();
}

interface CrayonInterface {

	public function crayon();
}

class YellowPaper implements PencilInterface, EraserInterface {

	public function pencil(){

	}

	public function eraser(){
		
	}

}


class TypWritting implements PencilInterface, EraserInterface {

	public function pencil(){

	}

	public function eraser(){
		
	}

}


class ColorPaper implements CrayonInterface, EraserInterface {

	public function crayon(){

	}

	public function eraser(){
		
	}

}
















die();

echo '<pre/>';

class BaseCamp {
	
	protected $projectManager;

	protected $customerService;

	protected $generalManager;

	public function __construct(
		ProjectManager $projectManager,
		CustomerService $customerService,
		GeneralManager $generalManager 
	) {
		$this->projectManager = $projectManager;
		$this->customerService = $customerService;
		$this->generalManager = $generalManager;
	}

	public function getTasks() {

		// $roles = [];

		// foreach ($tasks as $key => $task) {
		// 	$roles[] = $tasks->role();		
		// }		
		// return $roles;

		return __METHOD__;
	} 

}

interface TasksInterface {
	public function role(); 
}

/*************************** DEVELOPER ***************************/
class Developer implements TasksInterface
{

	protected $baseCamp;

	protected $task;

	public $msg;


	public function __construct(
		BaseCamp $baseCamp,
		Tasks $task
	) {
		$this->baseCamp = $baseCamp;
		$this->task = $task;
	}

	// plan
	public function plan() {	
		
	}

	// create
	public function create() {
		// type of create
		// report to PM
		// implement code
	
		$this->task->setReply($this->msg);
	}

	// debug
	public function debug() {

	}

	// check 
	public function check() {
	// 	return $this->baseCamp->getTasks();
		return 1;
	}

	// role 
	public function role() {

	}	
} 

// basecamp
$baseCamp = new BaseCamp(
	new ProjectManager(
		new Tasks,
		new Report
	),
	new CustomerService,
	new GeneralManager
);

$dev = new Developer($baseCamp, new Tasks);
echo $dev->check();

// reply to bascamp task to PM
$dev->msg = 'This is not easy to do';
$dev->create();



/*************************** DESIGNER ***************************/
/**
 *  
 */
class Designer implements TasksInterface
{

	// role 
	public function role() {

	}	

	// plan
	public function plan() {

	}	

	// create images
	public function design() {

	}	
}

/**
 * 
 */
class CustomerService 
{

}

/**
 * 
 */
class GeneralManager
{
	
}

/**
 * 
 */
class Tasks
{

	private $reply; 
	
	public function setTasks($role) {
		// get data from database

		if ($role == 'designer') {
			$data[] = 'Please design image slider';
			$data[] = 'Create product page asset';
		}

		if ($role == 'developer') {
			$data[] = 'Please apply image slider';
			$data[] = 'Add 30% off for all woodWick products';
		}

		return $data;
	}

	public function setReply($msg) {
		$this->reply = $msg; 
	} 

	public function getReply() {
		return $this->reply;
	}
}

class Report {

	public function getReport(){
		return $data = ['No report yet!']; 
	}
}

/**
 * 
 */
class ProjectManager
{
	protected $task;

	public function __construct(
		Tasks $task,
		Report $report
	) {
		$this->task = $task;
		$this->report = $report;
	}

	// report
	public function getReport() {
		return $this->report->getReport();
	}	

	// command
	public function setTask($role) {
		switch ($role) {
			case 'developer':
				$task =  $this->task->setTasks($role);
				var_dump($task);
				break;

			case 'designer':
				$task =  $this->task->setTasks($role);
				var_dump($task);
				break;
			
			default:
				# code...
				break;
		}
	}	

	// public function setTasks(TasksInterface $tasks) {

		// $roles = [];

		// foreach ($tasks as $key => $task) {
		// 	$roles[] = $tasks->role();		
		// }		
		// return $roles;
	// } 


	public function getReply() {
		return $this->task->getReply();
	}
}

$pm = new ProjectManager(
	new Tasks,
	new Report
);

echo $pm->getReply();