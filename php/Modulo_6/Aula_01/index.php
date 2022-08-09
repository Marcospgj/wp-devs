<?php

$arr =  array( 'Guilherme', 'josé','João','Mario');
/*
foreach($arr as $key => $value){

    echo $key;
    echo '=>';
    echo $value;
    echo '<hr>';

}
*/

// atribuindo o valor de $arr para $total 
$total = count($arr);

for($i=0; $i<$total; $i++){
    echo $arr[$i];
    echo '<br>';

}


?>