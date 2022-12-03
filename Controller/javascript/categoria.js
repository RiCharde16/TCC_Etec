const categorias = document.getElementsByClassName('estilos-jogos');
const btn_mais_jogos = document.getElementById('btn_Mjogos');

// console.log(categoria[0]);

// categoria[0] Ação
// categoria[1] RGP
// categoria[2] Aventura
// categoria[3] Puzzle
// categoria[4] Party game
// categoria[5] Esportes

const cat = ['Ação','RPG','Aventura','Puzzle','Party Game','Esportes']


btn_mais_jogos.addEventListener('click',()=>{
    window.location = "/TCC_OFNOGAMES/Model/PHP/listagem_jogos.php"
})

for(let x = 0; x < categorias.length; x++){
    categorias[x].addEventListener('click',()=>{
        window.location = `./Model/PHP/listagem_jogos.php?categoria=${cat[x]}`
    })
}

