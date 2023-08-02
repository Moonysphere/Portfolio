/*slider*/
const items = document.querySelectorAll(".card img");
const nbSlide = items.length;
const suivant = document.querySelector(".right");
const precedent = document.querySelector(".left");

let count = 0;

function slideSuivant() {
  items[count].classList.remove("active");

  if (count < nbSlide - 1) {
    count++;
  } else {
    count = 0;
  }
  items[count].classList.add("active");
}

suivant.addEventListener("click", slideSuivant);

function slidePrecedente() {
  items[count].classList.remove("active");

  if (count > 0) {
    count--;
  } else {
    count = nbSlide - 1;
  }

  items[count].classList.add("active");
}

precedent.addEventListener("click", slidePrecedente);

/*nav*/
const navbar = document.querySelector("nav");

window.addEventListener("scroll", () => {
  // console.log(window.scrollY);

  if (window.scrollY < 720) {
    navbar.style.top = 0;
  } else if (window.scrollY > 720) {
    navbar.style.top = "-75px";
  }
});
