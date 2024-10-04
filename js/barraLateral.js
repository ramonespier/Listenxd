function toggleBarra() {
    const barra = document.querySelector("#barraLateral");
    const menu = document.querySelector("#menu")

    if (barra.style.right === "0px") {
        barra.style.right = "-350px";
        menu.style.marginRight = "0px";

    } else {
        barra.style.right = "0px";
        menu.style.marginRight = "350px"
    }
}