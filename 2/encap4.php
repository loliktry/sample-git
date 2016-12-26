<?php
class test
{
	//didefinisikan disini
	public function method($method)
	{
		$this->$method();
	}
	private function abc()
	{
		//Do Something -> kliwonan
		echo "magic method abc()<br>";
	}
	protected function xyz()
	{
		//Do something -> kliwonan
		echo "magic method xyz()<br>";
	}
}


$objT = new test();
$objT->method('abc');
$objT->method('xyz');