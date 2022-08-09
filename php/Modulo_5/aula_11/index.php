<?php
/* OPERADORES LÓGICOS 
> MAIOR
< MENOR 
<= MENOR IGUAL
>= MAIOR IGUAL
&& E 
|| OU  

*/
$v1 = 1;
$v2 = '1';
$v3 = 1.0;

/*
// neste caso é considerado somente o vcalor descondiderando o tipo de variável

if ($v1== $v2 || $v1 == $v3){

    echo "os valores são iguais";
 
}*/

// neste caso é considerado somente o valor e tipo de variável

if ($v1=== $v2 || $v1 === $v3){

    echo "os valores/tipos são iguais";
 
}else{
    echo "Os valores/tipos são diferentes";
}

?>