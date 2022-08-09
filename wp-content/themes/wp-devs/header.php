<!DOCTYPE html>
<html <?php language_attributes(); ?>><!-- atribuindo linguagem/tradução-->
<head>
    <meta charset=" <?php  bloginfo ('charset')?>"> <!-- definindo ancentuação em php--> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- viewport usado para tornar o site responsivo para dispositivos móveis-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Por questões de escalonabilidade e boas práticas do Wordpress , não se utiliza as tags title 
    e meta tags para SEO e sim funções em php-->

   <?php 
  
   wp_head(); /* wp_head -> faz a chamada da folha de estilo , sem essa tag nenhuma 
                folha de estilo ou plugin do wordpress funciona 
*/ 
   
   ?>

</head>
<body <?php body_class();?>><!-- body_class() retorna as classe realcionada a pagina que estamos visualizando -->

    <!--estruturando o site-->
    <div id="page" class="site"></div>

   <!--  cabeçalho do site -->
    <header>
         <section class="top-bar">
            <div class="container">

            <div class="logo">
                  Logo
                </div>

             <!--caixa de pesquisa-->
                <div class="searchbox">
                 Search
                 </div> 
         

            </div>
             <!--logo do menu do site-->
               
        </section>

        <section class="menu-area"><!-- area do menu-->
            <div class= "container">
            <nav class="main-menu">

            <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
<!--                    
                        -  -  >função que chama que chama o menu principal    
                        |
                        |           - - - VETOR que gera AS OPÇÕES DO menu     
                        |           | 
                        |           |       -- -> index que que recebe a função 'wp_devs_main_menu' pertencente ao FUNCTIONS PHP QUE GERA AS AÇÕES DO MENU  
                        |           |       |
                        |           |       |                       - - - > função QUE LIGA O MENU AO FUNTIO PHP    
                        |           |       |                       |
                        |           |       |                       |                     
                        |           |       |                       |             ---  depth função que indica a quantidade de níveis doi menu 
                        |           |       |                       |             |       -  -  0 = sem retrições de níveis de menu  
                        |           |       |                       |             |      |- - 1 = possui somente 1 nível de menu 
                        |           |       |                       |             |      |- - 2 = possui dois níveis de menu  
                        |           |       |                       |             |      |      -->      
               <?php wp_nav_menu(array('theme_location' =>'wp_devs_main_menu', 'depth' =>2 )); 
               
               
                     ?>
                </nav>

            </div>
            
        </section><!-- fim area do menu -->
    </header><!--Fim cabeçalho  -->