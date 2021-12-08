let navbar = document.querySelector('#navigation').querySelectorAll('ul li a');
console.log(navbar);
navbar.forEach(ele => {
    ele.addEventListener('click',function(){
        navbar.forEach(nav => nav.classList.remove('active_login'));
        this.classList.add('active_login');
    });
});