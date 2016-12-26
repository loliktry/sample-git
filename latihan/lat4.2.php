<?php
class mahasiswa{
	private $nama;
	private $nim;
	function __construct($nama,$nim){
			$this->nim = $nim;
			$this->nama = $nama;
	}
	function setNama($a){
		$this->nama=$a;
	}
	function setNim($b){
		$this->nim=$b;
	}
	function getNama(){
		return $this->nama;
	}
	function getNim(){
		return $this->nim;
	}
	function destruct(){}
}

$mhs1=new mahasiswa('namanya','nimnya');
//$mhs1->nama="hendra";
//echo $mhs1->nama;
if (version_compare(PHP_VERSION, '5.3.0') >= 0)
{

      $myClassReflection = new ReflectionClass(get_class($mhs1));
      $nim = $myClassReflection->getProperty('nim');
      $nama = $myClassReflection->getProperty('nama');
      $nim->setAccessible(true);
      $nama->setAccessible(true);
      echo $nim->getValue($mhs1);
      echo "<br>";
      echo $nama->getValue($mhs1);
}else 
{
	echo "here";
    $propname="\0foo\0bar";
    $a = (array) $mhs1;
    echo $a[$propname];
}
?>
