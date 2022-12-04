var carousel = document.getElementsByClassName('slide');
var seta_prox = document.getElementById('seta-prev'); 
var seta_ant = document.getElementById('seta-before');
var slide1 = carousel[0]; 
var x = 0;



seta_prox.addEventListener('click', function(){
    if(x == 0){                 
        x += 805;
        slide1.style.marginLeft = "-"+x+"px";
    }
    
    else if(slide1.style.marginLeft == "-"+x+"px" && slide1.style.marginLeft != "-2405px"){
        x += 800;
        slide1.style.marginLeft = "-"+x+"px"
    }
    else{
        slide1.style.transition = "2s";
        slide1.style.marginLeft = "0px";
        x = 0
    }
    slide1.style.delay = "1000"
});

seta_ant.addEventListener('click', function(){
    // alert('tese');
    if(x == 805){
        x -= 805;
        slide1.style.marginLeft = "-"+x+"px"
    }
    else if(x > 0){
        x -= 800;
        slide1.style.marginLeft = "-"+x+"px"
    }
});     

let temp = setInterval(()=>{
    if(x == 0){                 
        x += 805;
        slide1.style.marginLeft = "-"+x+"px";
    }
    
    else if(slide1.style.marginLeft == "-"+x+"px" && slide1.style.marginLeft != "-2405px"){
        x += 800;
        slide1.style.marginLeft = "-"+x+"px"
    }
    else{
        slide1.style.transition = "2s";
        slide1.style.marginLeft = "0px";
        x = 0
    }
},8000)
