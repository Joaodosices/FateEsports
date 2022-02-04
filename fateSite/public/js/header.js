function myFunction() {
    var x = document.getElementById("header-conteudo");

    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}


// // Correcao para quando carregar no butao login no mobile
// // Mas com esta solucao é possivel dar scroll para fora da area do log in que é um erro

// document.getElementById("mobileLogin").onclick = function () {
//     var x = document.getElementById("header-conteudo");
//     var z = document.getElementsByClassName("popUp-background")[0];
//     x.style.display = "none";
//     z.style.display = "flex";
// }
  