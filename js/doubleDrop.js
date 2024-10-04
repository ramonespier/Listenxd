function toggleDropdown(event) {
    const dropdown = event.target.nextElementSibling;
    
    if (dropdown.classList.contains("mostrar")) {
        dropdown.classList.remove("mostrar");
    } else {
        dropdown.classList.add("mostrar");
    }
}