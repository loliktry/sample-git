<?php
	

	
	$bil = array();
	if (isset($_GET['tombol']))
	{
	 	$n1=$_GET['n1'];
	 	if(isset($_GET['isi'])){
	 		$bil = $_GET['isi'];
	 		array_push($bil,$n1);
	 	}
	 	else{
	 		//$bil = array();
	 		echo "masuk pertama";
	 		array_push($bil,$n1);
	 	}
	 	print_r($bil);	
	}
?>

<html>
	<head>
	</head>
	<body>
	<h3>FORM INPUTAN DATA ARRAY()</h3>
	<form method="GET" action="">
	<hr>
		
			Bil 1 :<input type="text" name="n1">
			<input type="submit" name="tombol" value="hitung">
			<?php 
			if(count($bil) > 0){
				echo "masuk";
				foreach ($bil as $itemBil) {
					echo "<input type='hidden' name='isi[]' value=$itemBil>";
				}
			}
			?>
		
	</form>
	<hr><br>
	HASIL OPERASI :
	<?php
		foreach ($bil as $key => $value) {
		 	echo "<br> index ".$key." --> ".$value;
		 } 
	?>
	</body>
</html>


