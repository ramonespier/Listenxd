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
    { src: "../music/Fade To Black (Remastered).MP3", name: "Fade to Black - Remastered" },
    { src: "../music/For Whom The Bell Tolls (Remastered).MP3", name: "For Whom The Bell Tolls - Remastered" },
    { src: "../music/Metallica - Creeping Death (HD).MP3", name: "Creeping Death - Remastered" },
    { src: "../music/B.Y.O.B.MP3", name: "B.Y.O.B" },
    { src: "../music/System Of A Down - RadioVideo (Official Audio).MP3", name: "Radio/Video" },
    { src: "../music/System Of A Down - Lost In Hollywood (Official Audio).MP3", name: "Lost in Hollywood" },
    { src: "../music/Paranoid (2012 Remaster).MP3", name: "Paranoid" },
    { src: "../music/War Pigs (2009 Remaster).MP3", name: "War Pigs" },
    { src: "../music/Iron Man (2012 Remaster).MP3", name: "Iron Man" },
    { src: "../music/In The End [Official HD Music Video] - Linkin Park.MP3", name: "In the End" },
    { src: "../music/Papercut [Official HD Music Video] - Linkin Park.MP3", name: "Papercut" },
    { src: "../music/Crawling [Official HD Music Video] - Linkin Park.MP3", name: "Crawling" },
    { src: "../music/Playboi Carti - M3tamorphosis (Audio).MP3", name: "M3tamorphosis" },
    { src: "../music/Playboi Carti - Sky (Official Audio).MP3", name: "Sky" },
    { src: "../music/Playboi Carti ft. Kanye West - Go2DaMoon (Official Audio).MP3", name: "Go2DaMoon" },
    { src: "../music/Travis Scott - SICKO MODE (Audio).MP3", name: "Sicko Mode" },
    { src: "../music/Travis Scott - BUTTERFLY EFFECT.MP3", name: "Butterfly Effect" },
    { src: "../music/Travis Scott - NO BYSTANDERS (Audio).MP3", name: "No Bystanders" },
    { src: "../music/Tyler, The Creator - See You Again (Audio) ft. Kali Uchis.MP3", name: "See You Again" },
    { src: "../music/Tyler, The Creator - Who Dat Boy.MP3", name: "Who Dat Boy" },
    { src: "../music/Tyler, The Creator - 911  Mr. Lonely (Audio).MP3", name: "911 / Mr. Lonely" },
    { src: "../music/Runaway.MP3", name: "Runaway" },
    { src: "../music/POWER.MP3", name: "Power" },
    { src: "../music/All Of The Lights.MP3", name: ">All of the Lights" }
]

function prepararMusica(index) {
    audio.src = nomes[index].src;
    nomeMusica.textContent = nomes[index].name;
    audio.play().catch(error => {
        console.error("Erro ao tentar tocar a música:", error);
    });
};

const botaoMusica = document.querySelectorAll(".botao-musica");
botaoMusica.forEach(button => {
    button.addEventListener("click", () => {
        const index = button.getAttribute('data-index');
        prepararMusica(index);
    })
});
