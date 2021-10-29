let button1 = document.querySelector("btn-5")
let button4 = document.querySelector("offcanvas offcanvas-end show")

button1.addEventListener('click', => {
  button4.classList.remove('show');
});
