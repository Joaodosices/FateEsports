const authArea = document.getElementsByClassName("popUp-background")[0];
const popUpContent = document.getElementsByClassName("popUp-content")[0];
const formLogin = document.getElementById("formLogin");
const formRegister = document.getElementById("formRegister");
const disableBody = document.getElementById("masterPage");
const x = document.getElementsByClassName("clickProfile").length;

for (let i = 0; i < x; i++) {
    document.getElementsByClassName("clickProfile")[i].onclick = function () { 
        if (authArea.style.display = "none") {  
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
        formRegister.style.display = "grid";
        popUpContent.style.maxHeight = "26rem";
}

document.getElementsByClassName("loginBtn")[0].onclick = function () {
    formRegister.style.display = "none";
    formLogin.style.display = "grid";
    popUpContent.style.maxHeight = "20rem";
}