// HOME PAGE
const tituloH11 = document.getElementsByClassName('titulo-h1')[0];
const tituloH21 = document.getElementsByClassName('titulo-h2')[0];
const callToAction = document.getElementsByClassName('callToAction')[0];
const heroLandingImg = document.getElementsByClassName('heroLanding--AreaImg')[0];
const areaSeta = document.getElementsByClassName('areaSeta')[0];


const tl = gsap.timeline({duration: 0.55, ease: Power1.easeOut});

tl.fromTo('#masterPage',{opacity: 0},{opacity: 1})
tl.fromTo(tituloH11,{opacity: 0, x: -30},{opacity: 1, x: 0})
tl.fromTo(tituloH21,{opacity: 0, x: -30},{opacity: 1, x: 0}, '<')
tl.fromTo(heroLandingImg,{opacity: 0, x: 30},{opacity: 1, x: 0}, '<')
tl.fromTo(callToAction,{opacity: 0},{opacity: 1}, '<')
tl.fromTo(areaSeta,{opacity: 0, y: 30},{opacity: 1, y: 0}, '<')
tl.fromTo('.ondeEstamos--texto',{opacity: 0, x: -30}, {opacity: 1, x: 0}, '<')
tl.fromTo('.imgJogo',{opacity: 0, x: 30}, {opacity: 1, x: 0, stagger: {each: 0.1, repeat: 0}}, '<');
