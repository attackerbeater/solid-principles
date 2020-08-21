<?php 

class EventManager 
{
	private $listener;

	public function subscribe($eventType, $listener)
	{	
		echo '<pre/>';
		var_dump($listener->add());
	} 
}

class Editor
{
	public $event;

	public function __construct(
		EventManager $event
	)
	{
		$this->event = $event;
	} 
}

interface EventListener
{
	public function update($filename);
}

class LoggingListener implements EventListener
{	
	private $log;
	private $message;
	 
	public function __construct(
		$log_filename,
		$message
	)
	{
		$this->log = $log_filename;
		$this->message = $message;
	} 

	public function update($filename)
	{
		return $filename;
	}
}

$editor = new Editor(new EventManager());

$logger = new LoggingListener("/path/to/log.txt", "Someone has opened the file ");

$editor->event->subscribe("open", $logger);









