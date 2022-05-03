const floatMenu = document.querySelector(".float-menu");
const floatToggle = document.querySelector(".float-toggle");
var floatLink = document.getElementById("float-link");

document.querySelector(".float-toggle").onclick = function () {
  this.classList.toggle("active");
  floatMenu.classList.toggle("active");
  console.log(floatLink);
};

for (const i of floatLink) {
  floatLink[i].addEventListener("click", function () {
    floatMenu.classList.toggle("active");
    floatToggle.classList.toggle("active");
  });
}
