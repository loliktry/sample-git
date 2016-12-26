<?php
//Class hewan
class hewan
{
	protected $jml_kaki;
	protected $warna_kulit;
	function __construct()
	{
	
	}
	function berpindah()
	{
		echo "Saya berpindah";
	}
	function makan()
	{
		echo "Saya makan";
	}
}

//Class kucing
class kucing extends hewan
{
	function berpindah()
	{
		echo "Saya merangkak dengan 4 kaki";
	}
}

//Class burung
class burung extends hewan
{
	protected $sayap;
	function berpindah()
	{
		echo "Saya terbang";
	}
	function makan()
	{
		echo "Saya makan dengan mematuk";
	}
}
//Class monyet
class monyet extends hewan
{
	
}

?>

