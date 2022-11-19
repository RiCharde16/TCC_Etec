var menu_icon = document.getElementById('icon-menu');
var menu_col = document.getElementById('menu_column');
var btn_close = document.getElementById('btn_close');

menu_icon.addEventListener('click',function(){
    // menu_icon.classList.remove('active');
    // menu_col.classList.remove('active');
    menu_col.style.transform = "translateX(0px)"
})

btn_close.addEventListener('click',function(){
    menu_col.style.transform = "translateX(-200px)";
   
});
