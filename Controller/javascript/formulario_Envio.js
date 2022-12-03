const btn_submit = document.querySelector("form input[type='submit'] ");
const footer = document.querySelector('#footer-site').shadowRoot.querySelector('footer')
const envio = document.querySelector('#Envio');

btn_submit.addEventListener('click',(event)=>{
    event.preventDefault();
    footer.style.display = "none";
    envio.style.display = "flex";
    
    setInterval(()=>{
        // envio.style.display = 'none';
        // footer.style.display = "";
        location.reload();
    },5000)
})


