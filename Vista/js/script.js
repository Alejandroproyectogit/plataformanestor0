window.addEventListener("scroll", function(){
    var navbar = document.querySelector(".header");
    navbar.classList.toggle("abajo",window.scrollY>0);
})

const toggle = document.querySelector('.toggle')
const toggleIcon = document.querySelector('.toggle i')
const dropDownMenu = document.querySelector('.dropdown_menu')

toggleIcon.onclick = function (){
    dropDownMenu.classList.toggle('open')
    const open = dropDownMenu.classList.contains('open')

    toggleIcon.classList = open
    ? 'fa-solid fa-arrow-up'
    : 'fa-solid fa-bars'
}