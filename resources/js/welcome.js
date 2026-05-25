
const burger_menu_icon=document.getElementById('burger-menu-icon');
const menu=document.getElementById('menu');
const menu_1=document.getElementById('menu-1');
const close_btn=document.getElementById('close-icon');
const close_cont=document.getElementById('close-cont');

burger_menu_icon.addEventListener('click', (e)=>{
    e.preventDefault();

    burger_menu_icon.classList.add('hidden');
    close_cont.classList.remove('hidden');
    menu.classList.remove('hidden');
    menu_1.classList.remove('hidden');

})

close_btn.addEventListener('click',(e)=>{
    e.preventDefault();
    burger_menu_icon.classList.remove('hidden');
    close_cont.classList.add('hidden');
    menu.classList.add('hidden');
    menu_1.classList.add('hidden');
    
})