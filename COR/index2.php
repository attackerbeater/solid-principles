<?php 

interface Handler
{
    public function setNext(Handler $handler): Handler;
    public function handle(string $request): ?string;
}

abstract class AbstractHandler implements Handler
{
	private $nextHandler;

	public function setNext(Handler $handler): Handler
	{
		$this->handler = $handler;

		return $handler;
	}

	public function handle(string $request): ?string 
	{
		if ($this->nextHandler) {
			return $this->nextHandler->handle($request);
		}		

		return null;
	}
}

class MonkeyHandler extends AbstractHandler
{
	public function handle(string $request): ?string
    {
        if ($request === "Banana") {
            return "Monkey: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}

class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Nut") {
            return "Squirrel: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}

class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall") {
            return "Dog: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}

class DeveloperHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Nut") {
            return "Developer: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}

function clientCode(Handler $handler)
{   
    $data = ["Nut", "Banana", "Cup of coffee"];
    foreach ($data as $food) {
        echo "Client: Who wants a " . $food . "?\n";
        $result = $handler->handle($food);
        if ($result) {
            echo "  -- " . $result;
        } else {
            echo "  " . $food . " was left untouched.\n";
        }
    }
}

$monkey = new MonkeyHandler;
$squirrel = new SquirrelHandler;
$dog = new DogHandler;
$developer = new DeveloperHandler;

$monkey
->setNext($squirrel)
->setNext($dog)
->setNext($developer);

/**
 * The client should be able to send a request to any handler, not just the
 * first one in the chain.
 */
echo "Chain: Monkey > Squirrel > Dog > Developer\n\n";
clientCode($monkey);
echo "<br/>";

echo "Subchain: Squirrel > Dog > Developer\n\n";
clientCode($squirrel);
echo "<br/>";

echo "Subchain: Dog > Developer\n\n";
clientCode($dog);
echo "<br/>";

echo "Subchain: Developer\n\n";
clientCode($developer);
echo "<br/>";

