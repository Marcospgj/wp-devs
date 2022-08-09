<?php  
// iniciando sessão
session_start();
/*
// varificando se a sessão existe 
if(isset($_SESSION['nome'])){

//imprimindo variavel da sessão
    echo $_SESSION['nome'];


}*/
// forma de remover valor da variável da sessão

//unset($_SESSION[ 'nome'] );



//session_destroy();

echo $_COOKIE['nome'];

?>