1.unsetData($key = null)
	// pre-condition
	// check if array key is null
	if($key == null){
		// post-condition
		// set data to null
		$this->setData([]);
	}

	// pre-condition    
	// check if inputted key is string
	if(is_string($key)){
		// post-condition
	    // check if the inputted key name is exists from data array then unset this
		if(isset($this->_data[$key]) || array_key_exists($key, $$this->_data)){
			unset($this->_data[$key]);
		}
	}	

    // pre-condition    
    // check if keys exists from array
    if($key === (array)$key){
   		// post-condition
   		// loop key array
  		foreach($key as $index => $value){
  			// unset the key
  			unset($this->_data[$key]);
  		}
    }

   