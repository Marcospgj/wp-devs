<?php

$var1=10;
$var2='10';


/* verificando se o valor atribuido é igual 

OBS: DESTA FORMA O PHP DESCONSIDERA OS TIPOS DE VARIÁVEL    e compara se a informação é igual 

if($var1 == $var2){
    echo 'verdade';
} 



// com um "=" sempre sera verdadeiro fpoois ele atribui a segunda variável o valor da primeira
if($var1 = $var2){
   
    echo'verdade';
}


// === compara se o valor e tipo da variavel são iguais 

if($var1 === $var2){   

    echo "valor e tipo são iguais ";
}else{
    echo "valor e tipo são diferentes";
}
*/

//!== compara se o valor e tipo são diferentes 


if($var1 !== $var2){   
        //verdadeiro
    echo "valor e tipo são diferentes";
}else{
    //falso
    echo "valor e tipo são diferentes";
}
?>