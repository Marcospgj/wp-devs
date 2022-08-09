<?php
// iniciando sessão
session_start();

//definindo valor fixo para a variável da sessão
//$_SESSION['nome'] = 'Ivaldes';


// CRIANDO COOKIES

setcookie('nome','marcos', time() + (60*60*24),'/');// '/' deicxa o cookie acessível a todas as páginas 

echo $_COOKIE['nome'];
?>