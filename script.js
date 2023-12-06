
const btnToggle = document.querySelector(".btnToggle");
const box = document.querySelector(".box");
const mouseMove = document.querySelector('.mousemove');

/* 
btnToggle.onclick = function () {
    btnToggle.classList.toggle("active");
    box.classList.toggle("active");
}
*/

window.addEventListener("mousemove", (e) => {
    mouseMove.style.left = e.pageX + "px";
    mouseMove.style.top = e.pageY + "px";
});

btnToggle.addEventListener('click', () => {
    btnToggle.classList.toggle("active");
    box.classList.toggle("active");
})