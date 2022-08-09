<?php

// // serve para unir um ou mais arrays 

// $array1 = array("color" => "red", 2, 4); 
                                     
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// $result = array_merge($array1, $array2);
// //              |                
// //              -----> FUNÇÃO QUE JUTA DOIS OU MAIS ARRAYS 

// print_r($result);


// retornando valores com o mesmo indice/ chave 

// a função array_intesect_key imprime os valores que possuem a mesma chave em 1 ou mais arrays

// $array1 = array("chave1"=>"valor 1", "chave2"=>"valor2");
// $array2= array("chave1"=>"valor3", "chave4" => "valor2");

// print_r(array_intersect_key($array1,$array2))

// array_map serve para aplicar uma função em todos os valores de um array 
// a função Strirp_tags remove a a formatação HTML dos valores do vetor o reorganizando ao imprimir 

$arr =['Marcos','<p> Paulo</p>','<h1> Jesus</h1>'];

print_r(array_map('strip_tags',$arr));

?>