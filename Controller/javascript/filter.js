// console.log('Teste')
const input_filter = document.querySelector('input#filter');
const tr_tabela = document.querySelectorAll('table tbody tr')
const theade = document.querySelector('table thead tr')
// const btn_jogo_cadastro =

input_filter.addEventListener('change',(event)=>{
    // console.log(event.target.value)
    filtro_jogo = event.target.value.toLowerCase();

    if(filtro_jogo != ''){
        for(let jogo of tr_tabela){
            const titulo_jogo = jogo.querySelector('td:nth-child(2)').textContent.toLowerCase();
            const id_jogo = jogo.querySelector('td:nth-child(1)').textContent
            console.log(id_jogo);
            // console.log(`${titulo_jogo} == ${filtro_jogo}`);

            if(!titulo_jogo.includes(filtro_jogo)){
                // theade.style.display = "none"
                jogo.style.display = "none";
            }
            else{
                // theade.style.display = "table"
                jogo.style.display = "table-row";
                // jogo.style.gridTemplateColumns = "1fr 1fr 1fr"
            }
        }
    }
})
// })