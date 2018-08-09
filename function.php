
// Usando o metodo GET, crie um formulario que receba o nome do estudante, 3 notas de zero a  dez e calcule a media quando um botao de 
// submit for pressionado! Faca a validacao dos campos de modo que usuÃ¡rio tenha que preencher todos os campos e todos numericos.


<?php

for($i=0; $i < 3; $i++)
{


 nota

}



$nros = $_POST['nro'];
$media = 0;
$cont = 0;
foreach ($nros as $key => $nro) {
	$media += $nro;
	$cont++;
}

$media = $media/$cont;

echo $media;
?>