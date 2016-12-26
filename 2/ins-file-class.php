<?php
Class Demo
{
	//private $nama; // properti
	public $nama; // properti
	//protected $nama; // properti
	
	function sayHallo() //metode
	{
		echo "Hallo $this->nama";
	}
}

$obj = new Demo(); //proses instansiasi object

$obj->nama = 'Achmad Widhy'; //mendefinisikan nilai properti
echo $obj->nama; // memanggil properti
echo "<br>";
$obj->sayHallo(); // menjalankan metode

?>
