const menuIcon = document.getElementById("EnfoMe_Menu");
const menu = document.getElementById("menu");
const bg_one = document.getElementById("bg_one");
const bg_two = document.getElementById("bg_two");
const menu_back = document.getElementById("EnfoMe_Menu_back");
const menu_back_bod = document.getElementById("body_container");
const res_mob = document.getElementById("res_mob");


menuIcon.addEventListener('click', () => {
    menu.classList.add('scale');
    bg_one.classList.add('bg_changer_none');
    bg_two.classList.add('bg_changer_none');
    menuIcon.classList.add('bg_changer_none');
    menu_back.classList.add('bg_changer_block');
    menu_back_bod.classList.add('bg_changer_block');
    res_mob.classList.add('bg_changer_none');

});

menu_back.addEventListener('click', () => {
    menu.classList.remove('scale');
    bg_one.classList.remove('bg_changer_none');
    bg_two.classList.remove('bg_changer_none');
    menuIcon.classList.remove('bg_changer_none');
    menu_back.classList.remove('bg_changer_block');
    menu_back_bod.classList.remove('bg_changer_block');
    res_mob.classList.remove('bg_changer_none');
});

menu_back_bod.addEventListener('click', () => {
    menu.classList.remove('scale');
    bg_one.classList.remove('bg_changer_none');
    bg_two.classList.remove('bg_changer_none');
    menuIcon.classList.remove('bg_changer_none');
    menu_back.classList.remove('bg_changer_block');
    menu_back_bod.classList.remove('bg_changer_block');
    res_mob.classList.remove('bg_changer_none');
})