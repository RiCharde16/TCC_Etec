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
        const link_jogos = document.createElement('a');
        link_jogos.textContent = "Jogos"
        const link_login = document.createElement('a');
        link_login.textContent = "Login"
        const link_sobre = document.createElement('a');
        link_sobre.textContent = "Sobre"
        const link_ajuda = document.createElement('a');
        link_ajuda.textContent = "Ajuda"

        pages.appendChild(link_jogos)
        pages.appendChild(link_login)
        pages.appendChild(link_sobre)
        pages.appendChild(link_ajuda)

        componentRoot.appendChild(btn_close);
        componentRoot.appendChild(inputRoot);
        componentRoot.appendChild(pages);

        return componentRoot;
    }

    scripts(){
        const script = document.createElement('script');
        script.src = "/TCC_OfNoGames/Controller/Controle_menu.js";

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
            opacity: 90%;
            background-color: #1a0721;
            padding: 15px;
            z-index: 5;
            transition: 1s ease-in-out;
            overflow: hidden;
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
        #menu_column div a:hover{
            color: purple;
        }
        #btn_close{
            color: #fff;
        }

        /* Input search styles */

        div#buscar{ 
            display: flex;
            width: 180px;
            align-items: center;
            padding: 2px;
            height: 40px;
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
