<?php
class kelas_Product
{
	// properties defined here
	protected $_type = 'Book';
	// methods defined here
	
	
	public function getProductType()
	{
		return $this->_type;
	}
	
	public function setProductType($type)
	{
		$this->_type = $type;
	}

}
//akses class membentuk object
$product = new kelas_Product();


//mengakses protected
echo $product->getProductType()."<br>";

$product->setProductType('DVD');
echo $product->getProductType();


