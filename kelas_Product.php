<?php

class kelas_Product
{
	// properties defined here
	protected $_type;
	protected $_title;
	//const POUNDS_TO_KILOGRAMS = 0.45359237;


	public function __construct($type, $title)
	{
		$this->_type = $type;
		$this->_title = $title;
	}
	// methods defined here
	public function getProductType()
	{
		return $this->_type;
	}
	
	public function getTitle()
	{
		return $this->_title;
	}

	/*public function setProductType($type)
	{
		$this->_type = $type;
	}*/

}


?>
