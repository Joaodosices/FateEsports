document.getElementById("alterar").onclick = function () {
        document.getElementById("fname").disabled = false;
        document.getElementById("lname").disabled = false;
        document.getElementById("email").disabled = false;

        let x = document.getElementById("submeter");
        if (x.style.display === "inline-block") {
            x.style.display = "none";
        } else {
            x.style.display = "inline-block";
        }
};

document.getElementById("alterarpass").onclick = function () {
    document.getElementById("pass_atual").disabled = false;
    document.getElementById("pass_nova").disabled = false;

    let x = document.getElementById("submeterpass");
        if (x.style.display === "inline-block") {
            x.style.display = "none";
        } else {
            x.style.display = "inline-block";
        }
}



// Animação Pagina Perfil
const container = document.getElementsByClassName('container')[0];



const tl = gsap.timeline({duration: 0.55, ease: Power1.easeOut});


tl.fromTo(container,{opacity: 0, y: -30},{opacity: 1, y: 0})

 

   


  