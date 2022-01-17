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
 

   


  