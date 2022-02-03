// Jogos PAGE
// const imgJogos = document.getElementsByClassName('cartas')[0];


const tl = gsap.timeline({duration: 0.55, ease: Power1.easeOut});

tl.fromTo('#masterPage',{opacity: 0},{opacity: 1})
tl.fromTo('.tituloPrincipal',{opacity: 0, y: -30}, {opacity: 1, y: 0});
tl.fromTo('.card',{opacity: 0, x: 50}, {opacity: 1, x: 0, stagger: {each: 0.1, repeat: 0}}, '<');



