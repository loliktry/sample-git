<?php

class kelas_Product
{
	// properties defined here
	//protected $_type = 'Book';
	var $_type = 'Book';
	//public $_type = 'Book';
	// methods defined here
}

//akses class membentuk object
$product = new kelas_Product();
$product2 = new kelas_Product();

// display the $_type property
echo $product->_type;
echo $product2->_type;

//merubah protected variabel
//$product->_type = 'DVD';





