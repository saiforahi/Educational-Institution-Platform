const bar = document.getElementById("bar");
const cros = document.getElementById("cros");
const menu = document.getElementById("menu_bar");
const res = document.getElementById("res");

bar.addEventListener("click", () => {
    menu.classList.add("addHeight");
    bar.classList.add("displayNone");
    cros.classList.add("displayBlock");
    res.classList.add("displayBlock");
});

cros.addEventListener("click", () => {
    menu.classList.remove("addHeight");
    bar.classList.remove("displayNone");
    cros.classList.remove("displayBlock");
    res.classList.remove("displayBlock");
});

res.addEventListener("click", () => {
    menu.classList.remove("addHeight");
    bar.classList.remove("displayNone");
    cros.classList.remove("displayBlock");
    res.classList.remove("displayBlock");
});