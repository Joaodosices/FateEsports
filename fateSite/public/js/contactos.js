// Contacts PAGE
const areaForm = document.getElementsByClassName('area-Form')[0];
const areaTexto = document.getElementsByClassName('area-Texto')[0];
const tituloPrincipal = document.getElementsByClassName('tituloPrincipal')[0];
const localizacao = document.getElementById('localizacao')[0];


const tl = gsap.timeline({duration: 0.55, ease: Power1.easeOut});

tl.fromTo('#masterPage',{opacity: 0},{opacity: 1})
tl.fromTo(tituloPrincipal,{opacity: 0, y: -30},{opacity: 1, y: 0})
tl.fromTo(areaForm,{opacity: 0, x: -50},{opacity: 1, x: 0}, '<')
tl.fromTo(areaTexto,{opacity: 0, x: 50},{opacity: 1, x: 0}, '<')
tl.fromTo(localizacao,{opacity: 0},{opacity: 1}, '<')


