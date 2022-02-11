let xx = document.getElementsByClassName("equipaSelection").length

for (let i = 0; i < xx; i++) {
    document.getElementsByClassName("equipaSelection")[i].onclick = function () {
        localStorage.setItem("gameSelected", JSON.stringify(i))
    }
}
var gameSelected = JSON.parse(localStorage.getItem("gameSelected"))

var style = getComputedStyle(document.body)

document.getElementsByClassName("areaEquipaSelection")[gameSelected].style.background = style.getPropertyValue('--secundaryColor');
document.getElementsByClassName("textselected")[gameSelected].style.color = style.getPropertyValue('--primaryColor');


console.log(gameSelected)



let xxx = document.getElementsByClassName("showChangeName").length

for (let z = 0; z < xxx; z++) {
    document.getElementsByClassName("showChangeName")[z].onclick = function () {
        document.getElementsByClassName("showChangeName")[z].style.display = "none"
        document.getElementsByClassName("playerNameHolder")[z].style.display = "none"
        
        document.getElementsByClassName("btnPlayerNameInput")[z].style.display = "flex"
        document.getElementsByClassName("playerNameChanger")[z].style.display = "flex"
        document.getElementsByClassName("playerNameChanger")[z].disabled = false
        document.getElementsByClassName("cancelarChangeName")[z].style.display = "flex"
        document.getElementsByClassName("removerBtn")[z].style.display = "none"
    }
}

let xxxx = document.getElementsByClassName("cancelarChangeName").length

for (let i = 0; i < xxxx; i++) {
    document.getElementsByClassName("cancelarChangeName")[i].onclick = function () {
        document.getElementsByClassName("showChangeName")[i].style.display = "flex"
        document.getElementsByClassName("playerNameHolder")[i].style.display = "flex"
        
        document.getElementsByClassName("btnPlayerNameInput")[i].style.display = "none"
        document.getElementsByClassName("playerNameChanger")[i].style.display = "none"
        document.getElementsByClassName("playerNameChanger")[i].disabled = true
        document.getElementsByClassName("cancelarChangeName")[i].style.display = "none"
        document.getElementsByClassName("removerBtn")[i].style.display = "flex"
    }
}

let xxxxx = document.getElementsByClassName("showChangeTrophie").length

for (let z = 0; z < xxxxx; z++) {
    document.getElementsByClassName("showChangeTrophie")[z].onclick = function () {
        document.getElementsByClassName("showChangeTrophie")[z].style.display = "none"
        document.getElementsByClassName("trophieNameHolder")[z].style.display = "none"
        
        document.getElementsByClassName("btnTrophieNameInput")[z].style.display = "flex"
        document.getElementsByClassName("trophieNameChanger")[z].style.display = "flex"
        document.getElementsByClassName("trophieNameChanger")[z].disabled = false
        document.getElementsByClassName("cancelarChangeTrophie")[z].style.display = "flex"
        document.getElementsByClassName("removerBtnTrophie")[z].style.display = "none"
    }
}

let xxxxxx = document.getElementsByClassName("cancelarChangeTrophie").length

for (let z = 0; z < xxxxxx; z++) {
    document.getElementsByClassName("cancelarChangeTrophie")[z].onclick = function () {
        document.getElementsByClassName("showChangeTrophie")[z].style.display = "flex"
        document.getElementsByClassName("trophieNameHolder")[z].style.display = "flex"
        
        document.getElementsByClassName("btnTrophieNameInput")[z].style.display = "none"
        document.getElementsByClassName("trophieNameChanger")[z].style.display = "none"
        document.getElementsByClassName("trophieNameChanger")[z].disabled = true
        document.getElementsByClassName("cancelarChangeTrophie")[z].style.display = "none"
        document.getElementsByClassName("removerBtnTrophie")[z].style.display = "flex"
    }
}

document.getElementById("btnAdicionarJogador").onclick = function (){
    document.getElementById("btnCancelarAdicionarJogador").style.display = "flex"
    document.getElementById("areaInputsAdicionarJogador").style.display = "flex"
    document.getElementById("btnsubmeterPlayer").style.display = "flex"
    document.getElementById("btnAdicionarJogador").style.display = "none"

    for (let i = 0; i < document.getElementsByClassName("playerRows").length; i++) {
        document.getElementsByClassName("playerRows")[i].style.display = "none"
    }
}
document.getElementById("btnCancelarAdicionarJogador").onclick = function(){
    document.getElementById("btnCancelarAdicionarJogador").style.display = "none"
    document.getElementById("areaInputsAdicionarJogador").style.display = "none"
    document.getElementById("btnsubmeterPlayer").style.display = "none"
    document.getElementById("btnAdicionarJogador").style.display = "flex"

    for (let i = 0; i < document.getElementsByClassName("playerRows").length; i++) {
        document.getElementsByClassName("playerRows")[i].style.display = "table-row"
    }
}

document.getElementById("btnAdicionarTrofeu").onclick = function (){
    document.getElementById("btnCancelarAdicionarTrofeu").style.display = "flex"
    document.getElementById("areaInputsAdicionarTrofeu").style.display = "flex"
    document.getElementById("btnsubmeterTrofeu").style.display = "flex"
    document.getElementById("btnAdicionarTrofeu").style.display = "none"

    for (let i = 0; i < document.getElementsByClassName("trophieRows").length; i++) {
        document.getElementsByClassName("trophieRows")[i].style.display = "none"
    }
}
document.getElementById("btnCancelarAdicionarTrofeu").onclick = function(){
    document.getElementById("btnCancelarAdicionarTrofeu").style.display = "none"
    document.getElementById("areaInputsAdicionarTrofeu").style.display = "none"
    document.getElementById("btnsubmeterTrofeu").style.display = "none"
    document.getElementById("btnAdicionarTrofeu").style.display = "flex"

    for (let i = 0; i < document.getElementsByClassName("trophieRows").length; i++) {
        document.getElementsByClassName("trophieRows")[i].style.display = "table-row"
    }
}