function myFunction() {
    var x = document.getElementById("header-conteudo");

    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}


document.getElementById("mobileLogin").onclick = function () {
    document.body.classList.add("stop-scrolling");
    var x = document.getElementById("header-conteudo");
    var z = document.getElementsByClassName("popUp-background")[0];
    x.style.display = "none";
    z.style.display = "flex";

}
  