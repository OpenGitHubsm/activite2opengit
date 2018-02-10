<?php
	// fonction permettant de convertir la date

	function convertir($date){
		$dateE = strtotime($date);
		$formatsorti = date('l jS F Y', $dateE);
		echo $formatsorti;		
	}

	//test de notre fonction
	convertir('12/15/2018');

?>
