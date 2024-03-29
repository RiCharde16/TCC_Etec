class CardJogo extends HTMLElement
{
    constructor(){
        super();
        const shadow = this.attachShadow({mode: "open"});
        shadow.appendChild(this.build());
        shadow.appendChild(this.styles());
    }
    // addEventListener

    build(){
        const componentRoot = document.createElement('div');
        componentRoot.setAttribute('class','card-jogo');

        const newImg = document.createElement('img');
        newImg.src = this.getAttribute('photo') || "https://images.crazygames.com/games/fireboy-and-watergirl-the-forest-temple/cover-1586285142530.jpg?auto=format,compress&q=75&cs=strip";
        newImg.alt = this.getAttribute('alt') || "Imagen not found";
        
        const info = document.createElement('div');
        info.setAttribute('class','info');

        // Elemento escondido
        const chave = document.createElement('p');
        chave.textContent = this.getAttribute('chave') || 1;
        chave.style.display = "none";

        const tituloJogo = document.createElement('h1')
        tituloJogo.textContent = this.getAttribute('titulo-jogo');

        const desc = document.createElement('p');
        desc.textContent = this.getAttribute('descricao');

        info.appendChild(tituloJogo);
        info.appendChild(desc);
        
        componentRoot.appendChild(newImg);
        componentRoot.appendChild(info);
        componentRoot.appendChild(chave);

        return componentRoot;
    }

    styles(){
        const style = document.createElement('style');

        style.textContent = `
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap");

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Robot',sans-serif;
        }
        .card-jogo{
            border: 2px solid #d0d;
            width: 250px;
            height: 300px;
            background-color: #d0d;;
            border-radius: 20px;
            overflow: hidden;
            margin: 15px 20px;
        }
        .card-jogo > img{
            width: 100%;
            height: 210px;
        }
        .info{
            width: 250px;
            height: 80px;
            text-align: center;
            padding: 10px;
            border-radius: 50px;
            background-color: #d0d;
            overflow: hidden;
        }
        .info > h1{
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
        }
        .info > p{
            font-size: 15px;
            color: #eeee;
            margin: 10px 0px;
        }
        .card-jogo{
            cursor:pointer;
            transition: 0.5s ease-in-out;
        }
        .card-jogo:hover{
            transform: scale(1.1);
        }
        `

        return style
    }
}

customElements.define("card-jogo",CardJogo);


// console.log("Teste")