<?php
require_once 'kelas_Product.php';

class kelas_Book extends kelas_Product
{
	// class definition goes here
	protected $_pageCount;
	public function __construct($title, $pageCount)
	{
		$this->_title = $title;
		$this->_pageCount = $pageCount;
		$this->_type = 'book';
	}
	public function getPageCount()
	{
		return $this->_pageCount;
	}


}
