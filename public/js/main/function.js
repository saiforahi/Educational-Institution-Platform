const btn = document.getElementById("edit_btn");
const btn_update = document.getElementById("update_btn");
const edit_btn = document.getElementById("edit_profile_btn");
const update_btn = document.getElementById("update_profile_btn");
const name = document.edit_profile_name.edit_name;
const email = document.edit_profile_name.edit_email;
const number = document.edit_profile_name.edit_number;
const password = document.edit_profile_name.edit_password;

btn.addEventListener("click", () => {
    name.removeAttribute("readonly");
    email.removeAttribute("readonly");
    number.removeAttribute("readonly");
    password.removeAttribute("readonly");
    password.setAttribute("type", "text");
    edit_btn.classList.add("remove");
    update_btn.classList.add("visible");
});

btn_update.addEventListener("click", () => {
    name.setAttribute("readonly");
    email.setAttribute("readonly");
    number.setAttribute("readonly");
    password.setAttribute("readonly");
    password.setAttribute("type", "password");
    edit_btn.classList.remove("remove");
    update_btn.classList.remove("visible");
});