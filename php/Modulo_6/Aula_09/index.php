    <!DOCTYPE html>
    <html>
        <heade>
            <title>Formulário </title>
        </heade>
        <body>

        <?php

                // verificando se a valores deifinido para os campos do formulário 
                // caso haja será cadastrado

                
                // if(isset($_GET['acao'])){    

                //     // obtendo os valores dos campos do formulário
                //     $nome = @$_GET['nome'];
                //     $email = @$_GET['e-mail'];

                //     // imprimindo os valores dos campso do formulário na tela
                //     echo $nome;
                //     echo '<br>';
                //     echo $email;
                // }

                ?> 

            <!-- o method= "post" permiete que faça os envios das informações sem alterar a URL do site 
            <form method="post">
                <input type="text" name= "nome"/>
                <input type = "text" name = "e-mail"/>
                <input type =  "submit" name ="acao" value ="Enviar"/>

            </form>
        

            <?php
                // if(isset($_POST['acao'])){
                //             echo $_POST['numero1']+ $_POST['numero2'];


                // }
            ?>

                <form method ="post">
                    <input type= "text" name = "numero1"/>
                    <input type = "text" name = "numero2"/>
                    <input type =  "submit" name ="acao" value ="Enviar"/>
                    
            
                </form> -->



                <?php
                if(isset($_POST['acao'])){
                        foreach($_POST['valor'] as $key => $value){
                            echo $key;
                            echo "=>";
                            echo $value;
                            echo '<hr>';

                        }        
                }

                ?>

                <form method = "post">
                    <select name = "nome">
                        <option value= "marcos"> marcos </option>
                        <soption value = "paulo">paulo</option>
                    </select>
                    <input type ="checkbox" name= "valor[]" value = "10">10
                    <input type ="checkbox" name= "valor[]" value = "20">20
                    <input type ="checkbox" name= "valor[]" value = "30">30
                    <input type ="checkbox" name= "valor[]" value = "40">40
                    <input type =  "submit" name ="acao" value ="Enviar"/>

                </form>            
        <body>



    </html>