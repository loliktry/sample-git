<?php
Class Segitiga{

	//public var $hasil;
	public $alas;
	public $tinggi;

	function __construct($A, $B)
	{
		$this->alas = $A;
		$this->tinggi = $B;
	}

	function luas()
	{
		$hasil = 0.5 * $this->alas * $this->tinggi;
		return $hasil;
		//echo $this->nama."<br/>".$this->nim."<br/><br/>";
	}
	
}

$segitigaku = new Segitiga(3,4);
$ternyata_luasnya = $segitigaku->luas();
echo "Luas segitiga = ".$ternyata_luasnya;
?>
