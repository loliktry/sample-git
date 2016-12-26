<?php

class parentnya
{
	protected $pr;
	public $a;

	protected function testParent()
	{
		echo "this is test";
	}
	private function testParentPriv()
	{
		echo "this is test = Priv";
	}
	private function hitungLuasSegitiga($a,$b)
	{
		$c = 0.5*$a*$b;
		return $c;
	}

	protected function hitungLuasPersegi($a)
	{
		$c = $a*$a;
		return $c;
	}

	public function TambahLuas()
	{
		$luas_persegi = $this->hitungLuasPersegi(2);
		$luas_segitiga = $this->hitungLuasSegitiga(2,1);

		$hasil = $luas_persegi + $luas_segitiga ;

		return $hasil;
	}
}

class childnya extends parentnya
{
	public function testChild()
	{
		$this->testParent(); //will work because it
	}
	public function testChildPriv()
	{
		$this->testParentPriv(); //will work because it
	}
}

$objParent = new parentnya();
//$objParent->testParent();//Throw error
echo "Tambah Luas ==> ".$objParent->TambahLuas();

$objChild = new Childnya();
/*$objChild->testChild();//work because test child will call test parent.
$objChild->testChildPriv();*/