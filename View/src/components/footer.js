class Footer extends HTMLElement
{
    constructor(){
        super();
        
        const shadow = this.attachShadow({'mode':'open'});
        shadow.appendChild(this.build());
        shadow.appendChild(this.styles());
    }

    build(){
        const componentRoot = document.createElement('footer');
        componentRoot.setAttribute('class','bg-purple-black');

        // Div 1 
        const block1 = document.createElement('div');
        block1.setAttribute('class','container');
        const link_sobre = document.createElement('a');
        link_sobre.textContent = "Sobre";
        link_sobre.href = this.getAttribute('url-sobre') || "/TCC_OfNoGames/View/sobre.html";

        const div_filho = document.createElement('div');
        div_filho.setAttribute('class','container');
        
        const link_facebook = document.createElement('a');
        const img_facebook = document.createElement('img');
        img_facebook.setAttribute('class','icon-social');
        img_facebook.src = "https://cdn-icons-png.flaticon.com/512/1051/1051309.png";
        link_facebook.appendChild(img_facebook);
        
        const link_instagram = document.createElement('a');
        const img_instagram = document.createElement('img');
        img_instagram.setAttribute('class','icon-social');
        img_instagram.src = "https://cdn-icons-png.flaticon.com/512/3938/3938052.png";
        link_instagram.appendChild(img_instagram);

        const link_twitter = document.createElement('a');
        const img_twitter = document.createElement('img');
        img_twitter.src = "https://cdn-icons-png.flaticon.com/512/3669/3669691.png";
        img_twitter.setAttribute('class','icon-social');
        link_twitter.appendChild(img_twitter);
    

        const link_ajuda = document.createElement('a');
        link_ajuda.textContent = "Ajuda"
        link_ajuda.href = this.getAttribute('url-ajuda') || "/TCC_OfNoGames/View/ajuda.html";
        // Div 2
        const block2 = document.createElement('div');
        const direitos_autorais = document.createElement('p');
        direitos_autorais.textContent = `© 2022, R.P.D gaMes. Todos os direito reservados. R.P.D gaMEs como logo e site inc.no Brasil da America do sul.Outras marcas e nomes de produtos são marcas registradas de 
        seus respectivos donos. Transações para alem do Brasil são feitas através da R.P.D gaMes internacioanl`;


        // Adcionando os Elementos
        block1.appendChild(link_sobre);
        block1.appendChild(div_filho)
        block1.appendChild(link_ajuda);
        div_filho.appendChild(link_facebook);
        div_filho.appendChild(link_twitter);
        div_filho.appendChild(link_instagram);
        componentRoot.appendChild(block1);

        componentRoot.appendChild(block2);
        block2.append(direitos_autorais)

        return componentRoot;
    }

    styles(){
        const style_footer = document.createElement('style');
        
        style_footer.textContent = `
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
        .container{
            display: flex;  
        }
        a{
            text-decoration: none;
            color: #fff;
            font-weight: 100;
        }
        a:hover{
            color: rgb(195, 0, 195);
            cursor: pointer;
        }
        .bg-purple-black{
            background-color: #1a0728;
        }
        footer div{
            padding: 20px;
            justify-content: space-around;
            text-transform: uppercase;
            align-items: center;
        }
        footer h3{
            cursor: pointer;
        }
        footer h3:hover{
            color:rgb(195, 0, 195);
        }
        footer div > div{
            width: 200px; 
            padding: 0;
            justify-content: space-around;
        }
        .icon-social{
            width: 50px;
            height: 50px;
            filter: invert();
            cursor: pointer;
        }
        .icon-social:hover{
            filter: contrast(20%);
        }
        footer{
            text-align: center;
            padding: 10px;
        }
        p{
            color: #fff;
            font-size: 9px;
            line-height: 15px;
        }
        `;

        return style_footer;
    }
}

customElements.define('footer-site',Footer);