// console.log('Teste')
const btn_excluir = document.getElementsByClassName('exc');
const btn_alterar = document.getElementsByClassName('alt');
const tr = document.querySelectorAll('tbody tr');

// console.log(btn_excluir);
console.log(tr);

for(var buttons of btn_alterar){
    buttons.addEventListener('click',(e)=>{
        const dados = e.currentTarget.getAttribute('dado');
        $res = confirm(`Deseja alterar o jogo de ID ${dados}?`)

        if($res == true){
            window.location = `/TCC_OFNOGAMES/Model/PHP/alterar.php?numero=${dados}`;
        }

    })
}

for(var buttons_exc of btn_excluir){
    buttons_exc.addEventListener('click',(e)=>{
        const dados = e.currentTarget.getAttribute('dado');

        $res = confirm(`Deseja Excluir o jogo de ID ${dados}?`);

        if($res == true){
            window.location = `/TCC_OFNOGAMES/Model/PHP/excluir.php?numero=${dados}`
        }
    })
}