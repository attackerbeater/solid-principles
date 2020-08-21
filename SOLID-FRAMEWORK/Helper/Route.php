<?php 

class Route
{
	public function redirect($path)
	{
		if(is_string($path)){
			return $path;
		}		
	} 
}
