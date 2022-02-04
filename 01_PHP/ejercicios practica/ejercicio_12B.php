<?php 

	$vrsumatoria = 7;

	$vrsuma = 0;

	if ($vrsumatoria <= 250) {
		echo "Sumatoria del numero: " . $vrsumatoria;
		echo "<br>";
		$i = 0;
		//1,2,3,4,5,6,7
		while ($i <= $vrsumatoria) {
			$i=$i+1;
			$vrsuma = $vrsuma+$i;
			echo "serie.. ". $i."-";

		}
		echo "La sumatoria es: .. ".$vrsuma;
	}

?>