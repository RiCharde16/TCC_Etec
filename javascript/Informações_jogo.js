const titulo_jogo = document.getElementById('titulo');
const descricao = document.getElementById('descricao');


// var dadosArquvio = JSON.parse(sessionStorage.getItem('chave'))

// console.log(dadosArquvio)

const url = window.location.href


lerUrl(url)
console.log(url)
// for(jogo of card_jogo){
//     jogo.addEventListener('click',(element)=>{
//         // alert(element.target.getAttribute('titulo-jogo'))
//         titulo_jogo.innerHTML = element.target.getAttribute('titulo-jogo')
//         descricao.innerHTML = element.target.getAttribute('descricao')
//         // preecher(nome,desc)
//     })
// }
// // console.log(titulo_jogo.innerHTML)
// // console.log(descricao.innerHTML)

// // preecher=(nome,desc)=>{
// //     var temp = setInterval(()=>{
// //         console.log(nome,desc)
// //     },1000)
// // }
