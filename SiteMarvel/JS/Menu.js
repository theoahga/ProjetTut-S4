const linkCollapse = document.getElementsByClassName('conteneur_icon')
var i

for(i=0;i<linkCollapse.length;i++){
  linkCollapse[i].addEventListener('click', function(){
    const collapseMenu = this.nextElementSibling
    collapseMenu.classList.toggle('affiche_menu')

    const rotate = collapseMenu.previousElementSibling
    rotate.classList.toggle('rotation')
  })
}