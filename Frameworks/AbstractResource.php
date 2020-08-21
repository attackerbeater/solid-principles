<?php

abstract class AbstractResource
{
	abstract protected function _construct();
	abstract public function getConnection();

	public function beginTransaction()
	{
	    $this->getConnection()->beginTransaction();
	    return $this;
	}

}