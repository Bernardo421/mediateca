const senha = document.getElementById("senha")
const mudar = document.getElementById("mudar_senha")

mudar.addEventListener("click", () => {
    if(senha.type === "password"){
        senha.type = ("text")
        mudar.src = "../login/image/olho.png";
    }else{
        senha.type = "password"
        mudar.src = "../login/image/olho (1).png"
    }
});