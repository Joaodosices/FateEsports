const authArea = document.getElementsByClassName("popUp-background")[0];
const formLogin = document.getElementById("formLogin");
const formRegister = document.getElementById("formRegister");
const disableBody = document.getElementById("masterPage");

document.getElementsByClassName("clickProfile")[0].onclick = function () { 
    if (authArea.style.display = "none") {
        authArea.style.display = "flex";
        disableBody.style.overflow = "hidden";
    }
}
document.getElementById("closeLogin").onclick = function () {
    if (authArea.style.display = "flex") {
        authArea.style.display = "none"
        disableBody.style.overflow = "auto";
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