// Animação Pagina Parcerias
const container = document.getElementsByClassName('container')[0];
const textoinicio = document.getElementsByClassName('textoinicio')[0];
const gridmarcas = document.getElementById('grid-marcas')[0];


const tl = gsap.timeline({duration: 0.55, ease: Power1.easeOut});


tl.fromTo(container,{opacity: 0, y: -30},{opacity: 1, y: 0})
tl.fromTo(textoinicio,{opacity: 0, x: -50},{opacity: 1, x: 0}, '<')
tl.fromTo('.grid-item',{opacity: 0, x: 50},{opacity: 1, x: 0}, '<')
tl.fromTo(gridmarcas,{opacity: 0},{opacity: 1}, '<')


