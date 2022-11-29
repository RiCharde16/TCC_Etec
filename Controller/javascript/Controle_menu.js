// Component Header
const header = document.querySelector('header-jogo')
const menu_icon = header.shadowRoot.querySelector('#icon-menu')
const lupa = header.shadowRoot.querySelector('#search');
const pesquisa_header = header.shadowRoot.querySelector('input[type="search"]');
// Component Menu
const menu = document.querySelector('menu-site')
const menu_col = menu.shadowRoot.querySelector('#menu_column'); 
const btn_close = menu.shadowRoot.querySelector('#btn_close');
const lupa_menu = menu.shadowRoot.querySelector('#search');
const pesquisa_menu = menu.shadowRoot.querySelector('input[type="search"]');

// console.log(pesquisa_menu)


// Barra de pesquisa no header
pesquisa_header.addEventListener('keydown',(e)=>{
    
    nome_jogo = e.target.value

    // Se prencionar a lupa ira pesquisar
    lupa.addEventListener('click',(e)=>{
        // nome_jogo = pesquisa_header.target.value
        // console.log(nome_jogo);
        window.location = `/TCC_OFNOGAMES/Model/PHP/listagem_jogos.php?nome=${nome_jogo}`;

    })

    // console.log(e.key)
    // Se presionar enter tbm ira pesquisar
    if(e.key == "Enter"){
        window.location = `/TCC_OFNOGAMES/Model/PHP/listagem_jogos.php?nome=${nome_jogo}`;
    }
})

// Aba de Menu
pesquisa_menu.addEventListener('keydown',(e)=>{
    nome_jogo = e.target.value

    // Se prencionar a lupa ira pesquisar
    lupa_menu.addEventListener('click',(e)=>{
        window.location = `/TCC_OFNOGAMES/Model/PHP/listagem_jogos.php?nome=${nome_jogo}`;

    })
    // Se presionar enter tbm ira pesquisar
    if(e.key == "Enter"){
        window.location = `/TCC_OFNOGAMES/Model/PHP/listagem_jogos.php?nome=${nome_jogo}`;
    }
})

menu_icon.addEventListener('click',()=>{
    // alert('Teste');
    menu_col.style.transform = "translateX(0px)"
})

btn_close.addEventListener('click',()=>{
    menu_col.style.transform = "translateX(-500px)"
})



