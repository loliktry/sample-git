<?php
class kelas_Product
{
	// properties defined here
	protected $_type;
	protected $_title;

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
//akses class -> membentuk object
$product1 = new kelas_Product('Buku','Penggembala Cinta ');
$product2 = new kelas_Product('CD', 'Mimpi Seorang Bidadari');

// display product1
echo '<p>$product1 adalah sebuah "' . $product1->getProductType().'"';
echo ' called "' . $product1->getTitle() . '"</p>';
// display product2
echo '<p>$product2 adalah sebuah "' . $product2->getProductType().'"';
echo ' called "' . $product2->getTitle() . '"</p>';


//merubah protected variabel
//$product->_type = 'DVD';





