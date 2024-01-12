function display(event){
    /* */
  let el= event.target.closest(".groupe").lastChild;

  if (el.style.display !="block") {
    el.style.display="block";

  }else{
    el.style.display="none";
  }
}

function index(el,List) {
  
  i = 0;
  for (; i < List.length; i++) {
      if (List[i] == el) {
          return i;
      }
  }
  return -1;
}

let indice = 0;

function rollcarousel(direction) {

  let carouselEl =document.getElementsByClassName("carousel-el")[0];
  let slidelist = document.getElementsByClassName("slide");


  if (direction === 'r') {
    indice = (indice + 1) % slidelist.length;
  } else if (direction === 'l') {
    indice = (indice - 1 + slidelist.length) % slidelist.length;
  }
  
  const transformValue = -indice * 100 + '%';
  carouselEl.style.transform = 'translateX(' + transformValue + ')';
}
