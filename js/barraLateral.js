function toggleBarra() {
    const barra = document.querySelector("#barraLateral");
    const menu = document.querySelector("#menu")

    if (barra.style.right === "0px") {
        barra.style.right = "-350px";
        menu.style.marginRight = "0px";
        menu.style.transition = "0.3s"

    } else {
        barra.style.right = "0px";
        menu.style.marginRight = "350px"
        menu.style.transition = "0.3s"
    }
}

const audio = document.querySelector("#audio");
const nomeMusica = document.querySelector(".nomeMusica")

const nomes = [
    { src: "#", name: "Fade to Black - Remastered" },
    { src: "#", name: "For Whom The Bell Tolls - Remastered" },
    { src: "#", name: "Creeping Death - Remastered" },
    { src: "#", name: "B.Y.O.B" },
    { src: "#", name: "Radio/Video" },
    { src: "#", name: "Lost in Hollywood" },
    { src: "#", name: "Paranoid" },
    { src: "#", name: "War Pigs" },
    { src: "#", name: "Iron Man" },
    { src: "#", name: "In the End" },
    { src: "#", name: "Papercut" },
    { src: "#", name: "Crawling" },
    { src: "#", name: "M3tamorphosis" },
    { src: "#", name: "Sky" },
    { src: "#", name: "Go2DaMoon" },
    { src: "#", name: "Sicko Mode" },
    { src: "#", name: "Butterfly Effect" },
    { src: "#", name: "No Bystanders" },
    { src: "#", name: "See You Again" },
    { src: "#", name: "Who Dat Boy" },
    { src: "#", name: "911 / Mr. Lonely" },
    { src: "#", name: "Runaway" },
    { src: "#", name: "Power" },
    { src: "#", name: ">All of the Lights" }
]

function prepararMusica(index) {
    audio.src = nomes[index].src;
    nomeMusica.textContent = nomes[index].name;
    audio.play();
}

const botaoMusica = document.querySelectorAll(".botao-musica");
botaoMusica.forEach(button => {
    button.addEventListener("click", () => {
        const index = button.getAttribute('data-index');
        prepararMusica(index);
    })
})


