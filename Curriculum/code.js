"use strict";

const btn = document.querySelector('#oscuro');

btn.addEventListener('click', () => {
	document.body.classList.toggle('dark');
	btn.classList.toggle('active');
})

const lin1 = document.querySelector('.linea1');
const lin2 = document.querySelector('.linea2');
const lin3 = document.querySelector('.linea3');
const menu = document.querySelector('.menu_hamburguesa');


document.querySelector('.menu_hamburguesa').addEventListener('click', () => {
    lin1.classList.toggle('activalinea1');
    lin2.classList.toggle('activalinea2');
    lin3.classList.toggle('activalinea3');
    menu.classList.toggle('menu-activo');
});


const navMenu = document.getElementById('menu');

document.querySelector('.menu_hamburguesa').addEventListener('click', () => {
    navMenu.classList.toggle('menu-abierto');
});