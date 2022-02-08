const btn = document.getElementById('go');
btn.addEventListener("click", function(){
  alert('hello');
  window.scrollTo(0,200);
});


const mainMenu = document.querySelector('ul');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');




openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}
function close(){
    mainMenu.style.top = '-100%';
}





AOS.init();
