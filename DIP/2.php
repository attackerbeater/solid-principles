<?php 

interface IWorker {
	public function work();
}

class Worker implements IWorker{

	public function work() {
	  echo '....working';
	}
}

class SuperWorker  implements IWorker{
	public function work() {
	  	echo '.... working much more';
	}
}

// The Manager class doesn't require any changes when adding SuperWorkers.
// The risk to affect old functionality present in the Manager class is reduced as we don't modify it.
// No need to revise the unit testing for the Manager class.
class Manager {
	private $worker;

	public function setWorker(IWorker $w) {
		$this->worker = $w;
	}

	public function manage() {
		return $this->worker->work();
  	}
}


$m = new Manager();
$m->setWorker(new Worker);
echo $m->smanage();



