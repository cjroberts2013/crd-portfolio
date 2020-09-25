const menu = document.querySelector(".menu");
const closeNav = document.querySelector(".close-nav");
const sidebar = document.querySelector(".sidebar");

menu.addEventListener("click", () => {
	sidebar.classList.toggle("show-sidebar");
});

closeNav.addEventListener("click", () => {
	sidebar.classList.remove("show-sidebar");
});
