const institute = document.getElementById("insitute");
const student = document.getElementById("student");
const container = document.getElementById("container");

institute.addEventListener("click", () => {
    container.classList.remove("active_panel");
});
student.addEventListener("click", () => {
    container.classList.add("active_panel");
});
