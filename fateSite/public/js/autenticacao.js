const authArea = document.getElementsByClassName("popUp-background")[0];
const formLogin = document.getElementById("formLogin");
const formRegister = document.getElementById("formRegister");
const disableBody = document.getElementById("masterPage");
const x = document.getElementsByClassName("clickProfile").length;

for (let i = 0; i < x; i++) {
    document.getElementsByClassName("clickProfile")[i].onclick = function () { 
        if (authArea.style.display = "none") {
            console.log("entrar");
            authArea.style.display = "flex";
            disableBody.style.overflow = "hidden";
        }
    }
}

document.getElementById("closeLogin").onclick = function () {
    console.log("sair");
        authArea.style.display = "none"
        disableBody.style.overflow = "auto";
}

document.getElementsByClassName("registarbtn")[0].onclick = function () {
        formLogin.style.display = "none";
        formRegister.style.display = "block"
}

document.getElementsByClassName("loginBtn")[0].onclick = function () {
    formLogin.style.display = "block";
    formRegister.style.display = "none"
}