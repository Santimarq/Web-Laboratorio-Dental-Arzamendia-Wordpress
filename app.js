document.addEventListener('DOMContentLoaded' , ()=> {

        function laboratorio() {
            if(document.querySelector('.swiper')) { 
                const opciones = {
                    loop: true ,
                    autoplay:  { 
                        delay: 2800
                    }

                }

                new Swiper('.swiper' , opciones);
            } 

        }


        laboratorio();

function animacionLetra() {

  var textWrapper = document.querySelector('.ml12');
  if(textWrapper) {
  
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    
    anime.timeline({loop: true})
      .add({
        targets: '.ml12 .letter',
        translateX: [40,0],
        translateZ: 0,
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 1200,
        delay: (el, i) => 500 + 30 * i
      }).add({
        targets: '.ml12 .letter',
        translateX: [0,-30],
        opacity: [1,0],
        easing: "easeInExpo",
        duration: 1100,
        delay: (el, i) => 100 + 30 * i
      });
  }




}

animacionLetra();


function mostrarMenu() {
  const menuMobile = document.querySelector('.menu-mobile  .icon');

  menuMobile.addEventListener('click', ()=> {
      const menuPrincipal = document.querySelector('.contenedor-menu');
      menuPrincipal.classList.toggle('mostrar-menu');
});
}
mostrarMenu();


function cambiarTextoLetra() {
  const textoBlog = document.querySelector('#reply-title');
  textoBlog.textContent = 'Deja un comentario en nuestro post';
  

}

cambiarTextoLetra();






});



   
   

   


