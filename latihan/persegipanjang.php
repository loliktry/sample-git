<?php
Class PersegiPanjang{
	public $panjang;
	public $lebar;

	public function __construct($a, $b)
	{
		$this->panjang = $a;
		$this->lebar = $b;
	}

	//public var $hasil;
	function luas(){
		$hasil = $this->panjang * $this->lebar;
		return $hasil;
		//echo $this->nama."<br/>".$this->nim."<br/><br/>";
	}
	
}

$persegipanjangku = new PersegiPanjang(3,4);
$ternyata_luasnya = $persegipanjangku->luas();
echo "Luas segitiga = ".$ternyata_luasnya;
?>
