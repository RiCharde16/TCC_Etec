class Header extends HTMLElement
{
    constructor(){
        super();
        const shadow = this.attachShadow({'mode':'open'});
        shadow.appendChild(this.styles());
        shadow.appendChild(this.build());
        shadow.appendChild(this.scripts());
        // shadow.setAttribute('id','header');
    }
    build(){
        const componentRoot = document.createElement('header');
        componentRoot.setAttribute('class','container bg-purple-black')
        const  img_menu = document.createElement('img');
        img_menu.src = this.getAttribute('dir-menu') || "/TCC_OfNoGames/View/img/menu.png";
        img_menu.setAttribute('id','icon-menu');
        const  navegation = document.createElement('nav');
        navegation.setAttribute('class','container menu'); 

        const div_1 = document.createElement('div');
        div_1.setAttribute('class','container')
        navegation.appendChild(div_1);

        const link_jogos = document.createElement('a');
        link_jogos.textContent = "Jogos";
        link_jogos.href = this.getAttribute('dir-jogos') || "/TCC_OfNoGames/Model/PHP/listagem_jogos.php"
        const link_login = document.createElement('a');
        link_login.textContent = "Login";
        link_login.href = this.getAttribute('dir-login') || "/TCC_OfNoGames/View/login.html";

        const img_logo = document.createElement('img');
        const link_logo = document.createElement('a');
        link_logo.appendChild(img_logo);
        link_logo.href = "/TCC_OFNOGAMES/index.php"
        img_logo.src = this.getAttribute('dir-log') || "/TCC_OFNOGAMES/View/img/Logo_OFNOGAMES.png";
        img_logo.setAttribute('id','logo')
        // navegation.appendChild(img_logo);
        navegation.appendChild(link_logo);

        div_1.appendChild(link_jogos);
        div_1.appendChild(link_login);

        const div_2 = document.createElement('div');
        div_2.setAttribute('class','container');
        navegation.appendChild(div_2);

        const link_ajuda = document.createElement('a');
        link_ajuda.textContent = "Ajuda";
        link_ajuda.href = this.getAttribute('dir-ajuda') || "/TCC_OfNoGames/View/ajuda.html";
        const link_sobre = document.createElement('a');
        link_sobre.textContent = "Sobre";
        link_sobre.href = this.getAttribute('dir-sobre') || "/TCC_OfNoGames/View/sobre.html"

        div_2.appendChild(link_ajuda);
        div_2.appendChild(link_sobre);

        const inputRoot = document.createElement('div');
        inputRoot.setAttribute('id','buscar');
        const input = document.createElement('input');
        input.type = "search";
        const  img_lupa = document.createElement('img');
        img_lupa.setAttribute('id','search');
        img_lupa.src = this.getAttribute('dir-lupa') || "/TCC_OfNoGames/View/img/lupa-arredondada.png";
        inputRoot.appendChild(input);
        inputRoot.appendChild(img_lupa);

        componentRoot.appendChild(img_menu);
        componentRoot.appendChild(navegation);
        // componentRoot.appendChild(img_lupa);
        componentRoot.appendChild(inputRoot);

        return componentRoot;
    }
    scripts(){
        const script = document.createElement('script');
        script.src = this.getAttribute('dir') || "/TCC_OfNoGames/Controller/Javascript/Controle_menu.js";
        
        return script;
    }
    styles(){
        const style_header = document.createElement('style');

        style_header.textContent = `
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
        a{
            text-decoration: none;
            color: #fff;
            font-weight: 100;
        }
        .alinhar{
            justify-content: center;
        }
        /* Classes reutilizaveis */
        .container{
            display: flex;
        }
        .bg-purple-black{
            background-color: #1a0728;
        }
        #logo{
            position: absolute;
            top: 10px;
            margin: 0px 10px 50px 0px;
            width: 150px;
            heigth: 150px;
        }
        /* Header > nav */
        header{
            position: sticky;
            z-index: 1;
            /* overflow: visible; */
            top: 0; 
            height: 80px;
            margin: 0px 0px 20px 0px;
            align-items: center;
            padding: 0px 15px;
        }
        .container nav{
            text-transform: uppercase;
            font-weight: 700;
            justify-content: space-around;
            align-items: center;
            /* height: fit-content */
        }
        .menu{
            justify-content: space-around;
            width: 100%;
        }
        .menu a{
            padding: 0px 15px;
        }
        #icon-menu{
            width: 50px;
            height: 50px;
            filter: invert();
            cursor: pointer;
        }
        #icon-menu:hover{
            filter: invert(100%);
        }
        header a:hover{
            color: rgb(195, 0, 195);
            font-weight: bold;
            cursor: pointer;
        }

        /* Input search styles */

        div#buscar{ 
            display: flex;
            width: 210px;
            align-items: center;
            padding: 0px 5px;
            height: 40px;
            margin: 20px auto;
            border: 1px solid #000;
            border-radius: 50px;
            background-color: #fff;
        }
        #buscar > input{
            width: 200px;
            text-align: right;
            border: none;
        }
        div{
            width: 200px;
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
        #buscar > img:hover{
            cursor: pointer;
        }
        input[type="search"]::-webkit-search-cancel-button{
            display: none;
        }

        `;

        return style_header;
    }
}

customElements.define('header-jogo',Header);


