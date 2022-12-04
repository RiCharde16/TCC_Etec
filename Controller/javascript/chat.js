const input_mensage = document.querySelector('#inputRoot input');
const btn_enviar = document.querySelector('#enviar');
const chat_aba = document.getElementById('chat');
var y = 10000;

var mensagem;
console.log(chat_aba);

input_mensage.addEventListener('keyup',(btn)=>{
    y = y + 10000;
    mensagem = btn.target.value
    if(btn.key == "Enter" && btn.target.value != ""){
        balao = document.createElement('div')
        balao.setAttribute('class','user2');
        texto = document.createElement('p');
        texto.textContent = mensagem;
        balao.appendChild(texto);

        chat_aba.appendChild(balao);
        
        btn.target.value = "";
        chat_aba.scroll(0,y)
    }
})

btn_enviar.addEventListener('click',()=>{
    y = y + 10000;
    if(input_mensage.value != ""){
        balao = document.createElement('div')
        balao.setAttribute('class','user2');
        texto = document.createElement('p');
        texto.textContent = mensagem;
        balao.appendChild(texto);
    
        chat_aba.appendChild(balao);
    
        input_mensage.value = "";
        chat_aba.scroll(0,y)
    }
    console.log(y)
})


