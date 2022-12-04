class Menu extends HTMLElement
{
    constructor(){
        super();

        const shadow = this.attachShadow({'mode':'open'});

        shadow.appendChild(this.build());
        shadow.appendChild(this.styles());
        shadow.appendChild(this.scripts());
    }

    build(){
        const componentRoot = document.createElement('div');
        componentRoot.setAttribute('id','menu_column');
        const btn_close = document.createElement('h1');
        btn_close.textContent = "X"
        btn_close.setAttribute('id','btn_close');

        const circle = document.createElement('div');
        const foto_user = document.createElement('img');
        foto_user.src = "/TCC_OFNOGAMES/View/img/img_devs/default.jpg"
        circle.setAttribute('id','circle');
        circle.appendChild(foto_user);

        const inputRoot = document.createElement('div');
        inputRoot.setAttribute('id','buscar');
        const input = document.createElement('input');
        input.type = "search";
        const  img_lupa = document.createElement('img');
        img_lupa.setAttribute('id','search');
        img_lupa.src = this.getAttribute('dir-lupa') || "/TCC_OfNoGames/View/img/lupa-arredondada.png";
        inputRoot.appendChild(input);
        inputRoot.appendChild(img_lupa);


        const pages = document.createElement('div');
        pages.setAttribute('id','pages')
        const lista = document.createElement('ul');
        const li_chat1 = document.createElement('li');
        const li_Acao = document.createElement('li');
        const li_aventura = document.createElement('li');
        const li_esport = document.createElement('li');
        const li_rpg = document.createElement('li');
        const li_party = document.createElement('li');
        const li_puzzle = document.createElement('li');

        lista.appendChild(li_chat1);
        lista.appendChild(li_Acao);
        lista.appendChild(li_aventura);
        lista.appendChild(li_esport);
        lista.appendChild(li_rpg);
        lista.appendChild(li_party);
        lista.appendChild(li_puzzle);

        const link_chat1 = document.createElement('a');
        link_chat1.textContent = "Chat1"
        const link_acao = document.createElement('a');
        link_acao.textContent = "Ação"
        const link_aventura = document.createElement('a');
        link_aventura.textContent = "Aventura"
        const link_esport = document.createElement('a');
        link_esport.textContent = "Esportes"
        const link_rpg = document.createElement('a');
        link_rpg.textContent = "RPG"
        const link_party = document.createElement('a');
        link_party.textContent = "Party Games"
        const link_puzzle = document.createElement('a');
        link_puzzle.textContent = "Puzzle"

        li_chat1.appendChild(link_chat1)
        li_Acao.appendChild(link_acao)
        li_esport.appendChild(link_esport)
        li_aventura.appendChild(link_aventura)
        li_rpg.appendChild(link_rpg)
        li_party.appendChild(link_party)
        li_puzzle.appendChild(link_puzzle)

        pages.appendChild(lista)

        componentRoot.appendChild(btn_close);
        componentRoot.appendChild(circle);
        componentRoot.appendChild(inputRoot);
        componentRoot.appendChild(pages);

        return componentRoot;
    }

    scripts(){
        const script = document.createElement('script');
        script.src = "/TCC_OFNOGAMES/Controller/javascript/Controle_menu.js";

        return script;
    }
    styles(){
        const style_menu = document.createElement('style');

        style_menu.textContent = `
        *{
            padding: 0;
            margin: 0;
            font-family:sans-serif;
        }
        #menu_column{
            position: fixed;
            width: 200px;
            left: 0;
            top: 0;
            transform: translateX(-500px);
            height: 100%;  
            opacity: 95%;
            background-color: #1a0721;
            padding: 15px;
            z-index: 5;
            transition: 1s ease-in-out;
            overflow: hidden;
        }
        #circle{
            display: flex;
            overflow: hidden;
            width: 120px;
            height: 120px;
            background-color: #fff;
            margin: 0px auto;
            border-radius: 50%;
        }
        #btn_close{
            position: relative;
            left: 80%;
            padding: 10px;
            cursor: pointer;
        }
        #menu_column div a{
            color: #fff;
            padding: 10px 0px;
        }
        #pages{
            display: flex;
            flex-direction: column;
        }
        #menu_column div li{
            padding: 10px 0px;
        }
        ul{
            margin: 0px 0px 0px 15px;
        }
        a{
            text-transform: uppercase;
            cursor: pointer;
        }
        #menu_column div a:hover{
            color: #f0f;
        }
        #btn_close{
            color: #fff;
        }

        /* Input search styles */

        div#buscar{ 
            display: flex;
            width: 190px;
            align-items: center;
            padding: 2px;
            height: 35px;
            margin: 20px auto;
            border: 1px solid #000;
            border-radius: 50px;
            background-color: #fff;
        }
        #buscar > input{
            padding: 2px 4px;
            width: 150px;
            text-align: right;
            border: none;
        }
        #buscar input:focus{
            box-shadow: 0 0 0 0;
            outline: 0;
            padding: 2px 2px;
        }
        #buscar > img{
            width: 25px;
            padding: 2px;
            rotate: 450deg;
        }
        input[type="search"]::-webkit-search-cancel-button{
            display: none;
        }
        `;

        return style_menu;
    }
}

customElements.define('menu-site',Menu);
