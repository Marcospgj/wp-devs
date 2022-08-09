<?php

// arrya single 

$arr = ['guilherme','joão'];
$arr = array ('gulherme','chave2' =>'joão');

$arr[0] =  'guilherme';
$arr[] = 'joão';

//fora de declarar arrays multidimencionais 

//$arr2 = array(array('Guilherme','joão'),array(23,45));

//$arr2[0] = array('chave1'=>'Guilheme','joão');

$arr2[0] ['chave1'] = 'Guilherme';

echo $arr2[0]['chave1'];

?>