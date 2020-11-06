 let loading = document.getElementById('loading');

const options = {valueNames: [ 'category' ]};
const galeria = new List('gallery', options);
  addAnimation = () =>{
    for(let x of galeria.matchingItems){
          x.elm.classList.remove('zoomOut');
          x.elm.classList.add('animated');
          x.elm.classList.add('zoomIn');
        }
  }
const links = document.querySelectorAll(".button");
updateList = (category) =>{
  links.forEach(function(btn) {btn.classList.remove('active');});
  switch(category){
    case 'all':galeria.filter();break;
    case 'habitaciones':
    links.forEach(function(btn) {btn.classList.add('active');});
    galeria.filter(function(item) {return (item.values().category == category) ? true : false;});
    default:galeria.filter(function(item) {return (item.values().category == category) ? true : false;});
  }
}

const filterBtns = document.querySelectorAll(".filter li button");
filterBtns.forEach(function(filterBtn) {
  filterBtn.addEventListener("click", function(e) {
    addAnimation();
    filterBtns.forEach(function(btn) {btn.parentNode.classList.remove('active');});
    this.parentNode.classList.add("active");
    let filterSelected = this.getAttribute("data-filter");
    updateList(filterSelected);
  });
});