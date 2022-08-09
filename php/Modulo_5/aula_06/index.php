<?php
// FORMAS DE DEFINIR ARRAY EM PHP 

$_nome= array('Guilherme', 'João','Felipe');

$nome[]='thiago';
$nome[]='ana';

$_nomes[0] ='jose';
$_nomes[48]= 'paulo';

$_nom=['ivaldes','lucas','iran'];

// varios tipos de variáveis em um só vetor 

$variaveis = array ('marcos','1','10.5');

// imprimindo as variáveis com texto

echo "vetor posição 1: " . $_nome[0] . ", posição 2:" . $_nome[1] . ", posição 3:" . $_nome[2] . ".";


echo '<br>';
echo $nome[0];
echo '<br>';
echo $nome[1];
echo "<br>";


echo "<br>";
echo $_nomes [0];
echo "<br>";
echo $_nomes[48];
echo "<br>";

echo $_nom[2] ;
echo "<br>";

//imprimindo vetor com diferentes tipos de variáveis 

echo " O aluno ".$variaveis[0]." tem no total: ".$variaveis[1]." Pendência , no valor de R$ ".$variaveis[2].".";

?>