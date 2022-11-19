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
        newImg.src = this.getAttribute('photo') || "default.png";
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
            border: 1px solid #ddd;
            width: 250px;
            height: 300px;
            background-color: #d0d;;
            border-radius: 20px;
            overflow: hidden;
            margin: 15px 0px;
        }
        .card-jogo > img{
            width: 100%;
        }
        .info{
            padding: 10px;
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
        `

        return style
    }
}

customElements.define("card-jogo",CardJogo);


// console.log("Teste")