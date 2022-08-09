<!--Footer-->
<footer class="site-footer">
                <div class="container">
                    <div class="copyrigth">
                        <p> Copyrigth X - All rigth reserved </p>
                    </div>
                    <nav class="footer-menu">
                        <?php 


                    
                        // -  -  >função que chama que chama o menu do rodpé    
                        // |
                        // |           - - - VETOR que gera AS OPÇÕES DO menu do radapé    
                        // |           | 
                        // |           |       -- -> index que que recebe a função 'wp_devs_main_menu' pertencente ao FUNCTIONS PHP QUE GERA AS AÇÕES DO MENU  
                        // |           |       |
                        // |           |       |                       - - - > função QUE LIGA O MENU AO FUNTIO PHP    
                        // |           |       |                       |
                        // |           |       |                       |                     
                        // |           |       |                       |                     ---  depth função que indica a quantidade de níveis doi menu 
                        // |           |       |                       |                    |       -  -  0 = sem retrições de níveis de menu  
                        // |           |       |                       |                    |      |- - 1 = possui somente 1 nível de menu 
                        // |           |       |                       |                    |      |- - 2 = possui dois níveis de menu  
                        // |           |       |                       |                    |      |           
                         wp_nav_menu( array ( 'theme_location' => 'wp_devs_footer_menu', 'depth' => 1 ))
                        ?>
                    </nav>

                </div>
    </footer><!--fim foooter-->

</body>
</html>