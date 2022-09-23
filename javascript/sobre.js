const seta1 = document.getElementById('seta1');
const seta2 = document.getElementById('seta2');
const seta3 = document.getElementById('seta3');
const seta4 = document.getElementById('seta4');

const c1_img = document.querySelector('#c1 img');
const c2_img = document.querySelector('#c3 img');
const c3_img = document.querySelector('#c2 img');
const c4_img = document.querySelector('#c4 img');

var c1 = document.querySelector('#c1');
var c2 = document.querySelector('#c3')
var c3 = document.querySelector('#c2')
var c4 = document.querySelector('#c4')

var ele_h1 = document.createElement('h1');

var texto1;

seta1.addEventListener('click', ()=>{
    console.log("div #c1");
    c1_img.style.opacity = "10%"; 
    texto1 = document.createTextNode("Richard");
    setTimeout(()=>{
        ele_h1.classList.add('Teste');
        ele_h1.appendChild(texto1);
        c1.appendChild(ele_h1);
    },1000)  
    
    // c1.innerHTML = "Paulo";
})
seta2.addEventListener('click', ()=>{
    console.log("div #c4");
    texto1 = document.
    c4_img.style.opacity = "10%"; 
    setTimeout(()=>{
        ele_h1.classList.add('Teste');
        c4.appendChild(ele_h1);
        ele_h1.appendChild(texto1);
    },1000);
})
seta3.addEventListener('click', ()=>{
    console.log("div #c3");
})
seta4.addEventListener('click', ()=>{
    console.log("div #c2");

})