const categorias = document.getElementsByClassName('estilos-jogos');

// console.log(categoria[0]);

// categoria[0] Ação
// categoria[1] RGP
// categoria[2] Aventura
// categoria[3] Puzzle
// categoria[4] Party game
// categoria[5] Esportes

const cat = ['Ação','RPG','Aventura','Puzzle','PartyGame','Esportes']

for(let x = 0; x < categorias.length; x++){
    categorias[x].addEventListener('click',()=>{
        window.location = `./Model/PHP/listagem_jogos.php?categoria=${cat[x]}`
    })
}