class TelaJogo extends HTMLElement
{
    constructor(){
        super();
        const shadow = this.attachShadow({'mode':'open'});
        shadow.appendChild(this.build());
        shadow.appendChild(this.style());
          
    }

    build(){
        // Section conteudo pai dos elementos
        const componentRoot = document.createElement('section');
        componentRoot.setAttribute('class','container')
        
        // Filho da section <Div class="Scrool-escondido">
        const div_iframe = document.createElement('div');
        div_iframe.setAttribute('class','scroll-escondido')

        // Filho do Div.Scrool-escondido <Div class="block">
        const block1 = document.createElement('div');
        block1.setAttribute('class','block');
        
        //Elemento h1 Filho Div.block
        const titulo_jogo = document.createElement('h1');
        titulo_jogo.setAttribute('id','titulo')
        
        // Elemento filho div.scrool-escondido e irmão do div.block
        const iframe = document.createElement('iframe');
        iframe.src = this.getAttribute('link_jogo');
        
        // Filho do Section.container e irmão do div.bloc1
        const block2 = document.createElement('div');
        block2.setAttribute('class','block-2');

        // Elemento filho do div.block2
        const descricao = document.createElement('p');
        descricao.setAttribute('id','descricao');
        descricao.textContent = this.getAttribute('descricao');

        block1.appendChild(titulo_jogo);
        block1.appendChild(descricao);
        div_iframe.appendChild(block1);
        div_iframe.appendChild(iframe);

        
        componentRoot.appendChild(block1);
        componentRoot.appendChild(div_iframe);
        componentRoot.appendChild(block2);

        return componentRoot;

    }
    style(){
        const style_tela = document.createElement('style');

        style_tela.textContent = `

        `;

        return style_tela
    }
}

customElements.define("tela-jogo",TelaJogo)