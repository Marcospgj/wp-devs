<?php

class Pessoa{
    //Oxbjeto pessoa 

    private $nome = 'Guilherme';
    private $idade = '23';
    private $peso =  '70kg';

    public function  crescer(){
        $this->comer();
        echo ' crescendo';
    }

    private function comer() {
        echo ' comendo';
    }

}

//instanciando 

$pessoa = new pessoa;
$pessoa2 = new pessoa;

$pessoa->crescer();



?>