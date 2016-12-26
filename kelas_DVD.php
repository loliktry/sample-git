<?php
require_once 'kelas_Product.php';

class kelas_DVD extends kelas_Product
{
	protected $_duration;
	
	public function __construct($title, $duration)
	{
		$this->_title = $title;
		$this->_duration = $duration;
		$this->_type = 'DVD';
	}
	public function getDuration()
	{
		return $this->_duration;
	}

}
