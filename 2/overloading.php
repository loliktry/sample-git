<?php
//class mobil
Class Mobil{
	public $nama;
	public $merk;
	
	public function getInfo(){
		echo "Nama mobil: ".$this->nama."<br/>";
		echo "Merk: ".$this->merk."<br/>";
	}
	
	public function getInfo($a){
		echo "Nama mobil: ".$a."<br/>";
		echo "Merk: ".$this->merk."<br/>";
	}
}
	//bagian main
	$ferari = new Mobil();
	$ferari->nama="xxx";
	$ferari->merk="aaa";
	$ferari->getInfo();
	$ferari->getInfo("Jenset");
?>
