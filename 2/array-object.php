<?php
//	
	//$bil = array();
	class Car
	{
	    public $color;
	    public $type;
	    
	    function __construct($a, $b){
		$this->color = $a;
		$this->type = $b;
	    }
	}

	
	if(isset($_POST['tombol'])){
		$warna = $_POST['warna'];
		$tipe = $_POST['type'];
		
		//$isi = $_POST['isi'];
		$mobil = new Car($warna, $tipe);


		//array_push($bil, $mobil);

		//print_r($mobil);
		//print_r($isi);
		if(isset($_POST['isiColor']) or isset($_POST['isiType'])){
			$bil = array();

			$isiWarna = $_POST['isiColor'];
			$isiType = $_POST['isiType'];

			
						
			for($y = 0; $y < count($isiWarna); $y++){
				$objectX = new Car($isiWarna[$y],$isiType[$y]);
			    /*$objectX->color = ;
			    $objectX->type = ;*/

			    array_push($bil, $objectX);
			}

			//print_r($objectX);
			echo "<br>";
			
			array_push($bil, $mobil);

			print_r($bil);
			//$baru = (object) $bil;

			/*$testBaru = new $baru();
			//print_r($testBaru);
			echo $testBaru->color;
			echo $testBaru->type;*/

			/*$bil = array();
			$bilWarna = $_POST['isiColor'];
			$bilType = $_POST['isiType'];
			array_push($bilWarna, $mobil);*/
			echo "lebih dari satu";
		}else{
			$bil = array();
			array_push($bil, $mobil);
			//print_r($bil);
			echo "masuk pertama";
		
		}
		$bilMobil = json_encode($bil,JSON_PRETTY_PRINT);
		//print_r($bilMobil);
		$bilMobil = json_decode($bilMobil,true);
		echo "<br>";
		//print_r($bilMobil);
	}
?>

<html><head><title>woke</title></head>
<body>
	<form method="POST" action="" onsubmit="return transfer()" >
	<input type="text" name="warna">
	<input type="text" name="type">
	<?php
	if(isset($bil) > 0){
		for($y = 0; $y < count($bil); $y++){
			 
			echo "<input type='text' name='isiColor[]' value=".$bilMobil[$y]['color']." >";
			echo "<input type='text' name='isiType[]' value=".$bilMobil[$y]['type']." >";
		}
		
	}

	?>
	<input type="submit" name="tombol" value="Submit">
	</form> 
</body>
</html>



<script type="text/javascript">

	var bilMobil = <?php echo $bilMobil; ?>;
    var data = "";

    if(data!=bilMobil){
    	data+=bilMobil;
    } 
	console.log(bilMobil);
	console.log(data);
</script>

<?php
//$cars = array($myCar, $yourCar);
//
/*foreach ($bil as $car) {
    echo 'This car is a ' . $car->color .
	 ' type : ' . $car->type . "<br>";
}*/
