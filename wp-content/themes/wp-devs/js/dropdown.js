
//  -  -   -let é um tipo de varável usada no javaScript 
//  |          
//  |    - -   -   dropdown é o nome da variável
//  |    |   
//  |    |              ----------documento.querySelector é uma função que busca as informações do classe declaradas dento dos parenteses   
//  |    |             |    |              - - - nome da classe que sera buscada/alterada/  
//  |    |             |    |             |  
let dropdown = document.querySelector('.menu'),//ul
submenu = document.querySelector('sub-menu'), //ul li ul
buttonClick= document.querySelector('check-button'),//button
hamburguer = document.querySelector('menu-icon');


//       - -  - nome da variável    
//       |        
//       |        - - -  função dque gera o evento listado   
//       |        |
//       |        |                    -   -   - Evento ativador 
//       |        |                    |
//       |        |                    |
 buttonClick.addEventListener(   'click',() =>{
    
//         -   -   -   nome da variável da função a ser afetada/ alterada/modificada ao clicar 
//         |       
//         |       -   -   -   ClassList.toggle() é uma função que alterna a classe para gerar a funçaõ deinida
//         |       |
//         |       |   
    dropdown.classList.toggle( 'show-dropdown');
    submenu.classList.toggle( 'show-dropdown');
})