<?php
 
//  MANIPULANDO STRINGS

        // função explode 
/*
     
$conteudo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt officiis officia rem 
            molestiae fugit nostrum architecto quae qui dignissimos? Numquam
             tenetur cupiditate animi et recusandae eveniet doloremque officia 
            earum alias?'; 


             echo substr($conteudo, 0,20); // função que permite recortar trechos de
            //               |        |  |    textos por quantidade de strings 
            //               |        |  |
            //               |        |  -> QUANTIDADE DE STRINGS QUE SERÃO RECORTADAS
            //               |        ----> POSIÇÃO EM QUE ESTA A PRIMEIRA STRING (ONDE COMEÇARA O CORTE)     
            //               -------------> NOME DA VARIAVEL  
             
            


          $nome= " Eduardo josé Estanheig";
            
            print_r (explode(" ",$nome));  
            //             |    |
            //             |    |
            //             |    |
            //             |     ------>" "  divide  as palvras em diferentes posições do arrray
            //             |            "0"/"1"... caso tenha valor atribuido esse valor sera considerado a
            //             |                       em que a frase completa será atribuida 
            //             |
            //             -----------> função que separa uma frase por palvras e a transforma em um array
            
            


        */
            $nome = explode(" ",$nome);  

            print_r($nome);

             $nome = implode(' ',$nome ); 
                        // |
                        // --- >  implode junta strings separadas em diferentes posições de um vetor-->
            /*

        
            $conteudo ='<h1> Marcos </h1> outra coisa';
            
             echo strip_tags($conteudo); 
//                     |
//                     --->  remove a formatação HTML do script impresso mantendo o conteúdo 

   */         

?>  