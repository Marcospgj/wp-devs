<?php
// craindo funções personalizadas 


// funtion -> é a chamda da função

// mostrarNome -> Nome da função

// $nome -> parametro da função A UTILIZAÇÃO DE PARAMETROS É OPCIONAL       

function mostrarNome($nome, $idade){


// imprimindo a função

echo '<br> o seu nome e:<br>'.$nome;
echo '<hr>';

// usando " não precisa fazer concatenuação 
echo "idade: $idade";
}
    // atribuindo 'Marcos' para o parametro $nome
    mostrarNome('Marcos', 23);

?>