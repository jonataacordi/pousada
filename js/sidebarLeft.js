var menuItem = document.querySelectorAll('.item-menu')

function selectLink(){
    menuItem.forEach((item) =>
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

menuItem.forEach((item) =>
    item.addEventListener('click', selectLink)
)

//Expandir o menu
var btn_expandir = document.querySelector('#btn-expandir')
var menuSide = document.querySelector('.sidebar-left')

btn_expandir.addEventListener('click', function(){
    menuSide.classList.toggle('expandir')//toggle caso exista a classe (expandir) ele remove e caso não exista ele adiciona
})