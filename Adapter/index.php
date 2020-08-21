<?php 

class WheelType 
{
	public function forRails()
	{
		return 'for train vehicle only';
	} 
}

class Vios 
{
	public function asPalt(){
		return 'this vehicle can run only on aspalt'; 
	}
}

class Adapter extends WheelType
{
	private $adaptee;

    public function __construct(
    	Vios $adaptee
    )
    {
        $this->adaptee = $adaptee;
    }

    public function forRails()
    {
    	return $this->adaptee->asPalt(). ' but with the use of adpater can run in rails'; 
    } 
}

function clientCode(WheelType $type)
{
    echo $type->forRails();
}

$adapter = new Adapter(new Vios);
echo clientCode($adapter);