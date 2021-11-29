const authArea = document.getElementsByClassName("popUp-background")[0];
const formLogin = document.getElementById("formLogin");
const formRegister = document.getElementById("formRegister");

document.getElementsByClassName("clickProfile")[0].onclick = function () { 
    if (authArea.style.display = "none") {
        authArea.style.display = "flex"
    }
}
document.getElementById("closeLogin").onclick = function () {
    if (authArea.style.display = "flex") {
        authArea.style.display = "none"
    }
}
document.getElementsByClassName("registarbtn")[0].onclick = function () {
        formLogin.style.display = "none";
        formRegister.style.display = "block"
}
document.getElementsByClassName("loginBtn")[0].onclick = function () {
    formLogin.style.display = "block";
    formRegister.style.display = "none"
}