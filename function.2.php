<?php
$numeros = $_GET['num'];
rsort($numeros);
foreach ($numeros as $key => $num) {
	if($key == 0){
		echo $num;
	}
}
?>