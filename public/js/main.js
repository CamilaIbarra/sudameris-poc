// MOBILE NAVBAR
const btn = document.querySelector("button.mobile-menu-btn");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});
