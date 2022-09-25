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


seta1.addEventListener('click', ()=>{
    c1_img.style.opacity = "5%";
    c1_img.style.padding = '0px';
    setTimeout(()=>{
        c1_img.setAttribute('src',
        'https://pps.whatsapp.net/v/t61.24694-24/301077192_1255326365009929_5573505733664741108_n.jpg?ccb=11-4&oh=01_AVz0bMN9DS0gTM2uyk2dJ4Dwg9-3zOMLEx8hvU55Wrn4xw&oe=633CB0F5');
        

        
        seta1.innerHTML = "<h1>Richard</h1>"
        c1_img.style.delay = "10s";
        // c1_img.style.opacty = "100%";
        c1_img.style.opacity = "100%";
        c1.style.overflow = "hidden";
    },1000)
})

seta2.addEventListener('click',()=>{
    c4_img.style.opacity = "5%";
    c4_img.style.padding = '0px';
    setTimeout(()=>{
        c4_img.setAttribute('src',
        'https://pps.whatsapp.net/v/t61.24694-24/298991707_1136614380257242_7241976680702949946_n.jpg?ccb=11-4&oh=01_AVzm1yS34OlcNSY5o8nkF1o2fc0rb8poz4f0bAFIstiC3Q&oe=633DC950');
        
        seta2.innerHTML = "<h1>Danilo</h1>"
        c4_img.style.delay = "10s";
        
        // c1_img.style.opacty = "100%";
        c4_img.style.opacity = "100%";
        c4.style.overflow = "hidden";
    },1000)
})

seta3.addEventListener('click',()=>{
    c2_img.style.opacity = "5%";
    c2_img.style.padding = '0px';
    setTimeout(()=>{
        c2_img.setAttribute('src',
        'https://cdn-icons-png.flaticon.com/512/17/17004.png');
        
        seta3.innerHTML = "<h1>Marcos</h1>"
        
        // c1_img.style.opacty = "100%";
        c2_img.style.opacity = "100%";
        c2.style.overflow = "hidden";
    },1000)
})

seta4.addEventListener('click',()=>{
    c3_img.style.opacity = "5%";
    c3_img.style.padding = '0px';
    setTimeout(()=>{
        c3_img.setAttribute('src',
        'https://cdn-icons-png.flaticon.com/512/17/17004.png');
        
        seta4.innerHTML = "<h1>Paulo</h1>"
        c3_img.style.delay = "10s";
        
        // c1_img.style.opacty = "100%";
        c3_img.style.opacity = "100%";
        c3.style.overflow = "hidden";
    },1000)
})