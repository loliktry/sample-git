<?php
//this is add commant for sample-git
//this will be 

class kelas_Product
{
	// properties defined here
	//protected $_type = 'Book';
	var $_type = 'Book';
	//public $_type = 'Book';
	// methods defined here
    var $something = '';
}

//akses class membentuk 
$product = new kelas_Product();
$product2 = new kelas_Product();

// display the $_type property
echo $product->_type;
echo $product2->_type;

//merubah protected variabel
//$product->_type = 'DVD';





