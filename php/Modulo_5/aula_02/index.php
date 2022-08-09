<?php

// COMANDO PARA MOSTRAR INFORMAÇÕES DO SERVIDOR COMO IP E NOME DO SERVIDOR 
 echo $_SERVER["SERVER_NAME"];

 // comando para quebra de linha 
 echo "\n";

 // MOSTRAR O ENDEREÇO DE ONDE ESTA SENDO EXECU TADO O SERVIDOR
echo  $_SERVER["DOCUMENT_ROOT"];

// comando para quebra de linha 
echo "\n";

// comando para organizar as informações na tela
echo '<pre>';

//comando para imprimir as informações do servidor 
print_r($_SERVER);


echo'</pre>';

?>