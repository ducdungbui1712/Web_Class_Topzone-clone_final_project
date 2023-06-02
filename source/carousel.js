let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("myCarou");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

window.onload = function(){
  comboDetailCarousel()
}

function comboDetailCarousel(){
  const cont_stage_outer = document.querySelectorAll('.cont-stage-outer');
  const cont_stage = document.querySelectorAll('.cont-stage');   

  cont_stage.forEach(items =>{
    let pressed = false;
    let startX;
    let x;
    items.parentElement.addEventListener('mousedown', (e) => {
      pressed = true;
      startX = e.pageX - items.offsetLeft;
    });

    items.parentElement.addEventListener('mouseleave', () => {
        pressed = false;
    });

    items.parentElement.addEventListener('mouseup', () => {
        pressed = false;
    });

    items.parentElement.addEventListener('mousemove', (e) => {
        if(!pressed) return;
        e.preventDefault();
        x = e.pageX;
        const walk = x - startX ;
        items.style.left = `${walk}px`;

        let outer = items.parentElement.getBoundingClientRect();
        let inner = items.getBoundingClientRect();

        if(parseInt(items.style.left) > 0){
          items.style.left = '0px';
        }else if(inner.right < outer.right){
          items.style.left = `-${inner.width - outer.width}px`
        }
    });
  })
}

