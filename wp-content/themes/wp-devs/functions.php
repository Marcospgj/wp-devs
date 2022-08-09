<?php

function wpdevs_load_scripts(){ //comando que carrega as funções das páginas 

    
    //chamando folha de estilo por fila  //wpdevs_style é identificador da função.

    /* wp_enqueue_style -> método que organiza e exibe em fila os arqivos de estilo
    
    wpdevs_style identificador do arquivo na fila 

    get_stylesheet_uri() -> função que retorna o caminha absoluto até a folha de estilo principal do tema

    array() -> utilizado para informa se existe alguma folha estilo que deva ser carregada antes. 

    filemtime(get_template_directory().'/style.css' -> versão DA FOLHA DE ESTILOS, utilizado para evitar conflitos com as versões salvas no cache do navegador

     all(todos) ->este parametro referênte ao tipo de mídia que o arquivo CSS se refere
    */
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(),filemtime(get_template_directory().'/style.css'), 'all');

     /* 
      * inserindo ao tema fontes do google

      * wpdevs_style -> identificador do arquivo na fila 

      *'google-fonts' nome da classe 
      *
      *'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,800;1,400&display=swap' -> link da fonte retirado do site 
      *
      *array() -> utilizado para informa se existe alguma folha estilo que deva ser carregada antes. 
      *
      *null -> referente ao número da  versão do tema, como na função anterior já foi especificado na versão atual ele não precisar ser,
        por isso usa-se null 

      */
      wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);

    /*
    wp_enqueue_script 

    'dropdown'

    */
    wp_enqueue_script('dropdown', get_template_directory_uri(),'/js/dropdown', array(),'1.0',true);
}

/* 
add_action() -> função usada para criar um gancho(hooks) de ação.

wp_enqueue_scripts -> nome do gancho de ação(hooks)

wpdevs_load_scripts -> função que será executada 
*/  

add_action('wp_enqueue_scripts','wpdevs_load_scripts');

// registando menuprincipal e footer

register_nav_menus(
  array(

    // 'wp_devs_main_menu' -> chave do elemento array 

     // 'Main Menu' -> valor recebido pelo index/slug    *** indica que o menu principal que será afetado por esta função
       'wp_devs_main_menu'  => 'Main Menu',

      'wp_devs_footer_menu' => 'Footer Menu'
  )
);


