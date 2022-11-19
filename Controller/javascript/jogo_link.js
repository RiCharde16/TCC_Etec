const card_jogo = document.getElementsByClassName('jogo')

// console.log(card_jogo);
for(jogo of card_jogo){
    // console.log(jogo)
    // let dados = []
    jogo.addEventListener('click',(ele)=>{
        // alert(jogo.getAttribute('titulo-jogo'));
        // nome = ele.target.getAttribute('titulo-jogo')
        // desc = ele.target.getAttribute('descricao')
        // photo = ele.target.getAttribute('photo')
        id = ele.currentTarget.getAttribute('chave');

        // window.location = `../PHP/pagina_jogo.php?id=${id}`
        window.location = `/TCC_OFNOGAMES/Model/PHP/pagina_jogo.php?id=${id}`
        
    })
}