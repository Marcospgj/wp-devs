<?php


// declarando classe filha
// classes finais não podem ser herdadas 
/*final class Filha {

        // declarado função
    public function mostrarOla(){
        echo "<br>";
        echo " Olá mundo ";
    }
}*/
class Filha {


    private function FuncaoTeste(){
        echo "<br/>";
        echo "Chamando função  teste !!";
    }

    // declarado função
public function mostrarOla(){
    echo 'NOVA FUNÇÃO'; 
        // echo "<br>";
        // echo " Olá mundo ";
    $this->FuncaoTeste();// para usar um função privada em outra parte do código é necessário atribui acesso a outra função da mesma classe para repassar a informação
}
}

//declarando classe Pai
/*class Pai{

    // declarando função classe pai 
    public function MostrarTchau(){
        echo " Tchau mundo!";
    }
}*/


// as classes public e protectd podem ser heradadas 


class Pai extends Filha{ // com o extends a classe pai te acesso a todos os atributos e métodos da calsse filah 


    // public function MostrarOla(){
    //     echo 'NOVA FUNÇÃO'; 
    // }
    public function MostrarTchau() {
        echo "Tchau mundo !!!";
        echo "<br>";
        parent::mostrarOla();
    }
}
    // criando objeto pai 
$pai = new Pai;
    // atribuindo função ao objeto 
$pai -> MostrarTchau ();

// $pai-> mostrarOla();


//$filha-> mostrarOla();

?>
