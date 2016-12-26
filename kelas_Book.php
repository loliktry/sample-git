<?php
require_once 'kelas_Product.php';

class kelas_Book extends kelas_Product
{
	// class definition goes here
	protected $_pageCount;
	
	public function __construct($type, $title, $pageCount)
	{
		parent::__construct($type, $title);
		$this->_pageCount = $pageCount;
	}
	
	
	public function getPageCount()
	{
		return $this->_pageCount;
	}

}
