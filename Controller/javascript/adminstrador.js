// console.log('Teste')
const btn_excluir = document.getElementsByClassName('exc');
const btn_alterar = document.getElementsByClassName('alt');
const tr = document.querySelectorAll('tbody tr');

//Butões
const btn_usuario = document.getElementById('user');
const btn_jogos = document.getElementById('jogos');
const btn_cadastrar = document.querySelector('#cad_jogo');

// console.log(btn_cadastrar);

// Botoões tabelas
btn_usuario.addEventListener('click',()=>{
    window.location = "/TCC_OFNOGAMES/Model/PHP/adm_users.php";
})

btn_jogos.addEventListener('click',()=>{
     window.location = "/TCC_OFNOGAMES/Model/PHP/Pagina_administrador.php";
})

btn_cadastrar.addEventListener('click',()=>{
    window.location = "/TCC_OFNOGAMES/View/cadastro_jogo.html";
})

// -----------

for(var buttons of btn_alterar){
    buttons.addEventListener('click',(e)=>{
        const dados = e.currentTarget.getAttribute('dado');
        const tabela = e.currentTarget.getAttribute('tabela');

        $res = confirm(`Deseja alterar o jogo de ID ${dados}?`)

        if($res == true && tabela == 'jogos'){
            window.location = `/TCC_OFNOGAMES/Model/PHP/Salvar_get.php?numero=${dados}&tabela=${tabela}`;
        }
        else if($res == true && tabela == 'usuario'){
            window.location = `/TCC_OFNOGAMES/Model/PHP/Salvar_get.php?numero=${dados}&tabela=${tabela}`;
        }

    })
}

for(var buttons_exc of btn_excluir){
    buttons_exc.addEventListener('click',(e)=>{
        const dados = e.currentTarget.getAttribute('dado');
        const table = e.currentTarget.getAttribute('tabela');

        $res = confirm(`Deseja Excluir o jogo de ID ${dados}?`);


        if($res == true){
            window.location = `/TCC_OFNOGAMES/Model/PHP/excluir.php?numero=${dados}&tabela=${table}`
        }
    })
}