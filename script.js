document.addEventListener("DOMContentLoaded", () => {
  // Code pour la flip card
  const flipLinks = document.querySelectorAll(".flip-link");
  const closeButtons = document.querySelectorAll(".close");

  flipLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const card = link.closest(".card");
      card.classList.add("flip");
    });
  });

  closeButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const card = button.closest(".card");
      card.classList.remove("flip");
    });
  });

  // Code pour la navbar burger
  const burger = document.getElementById("burger");
  const navLinks = document.getElementById("nav-links");

  burger.addEventListener("click", function () {
    navLinks.classList.toggle("nav-active");
    burger.classList.toggle("active");
  });

  navLinks.addEventListener("click", function () {
    if (navLinks.classList.contains("nav-active")) {
      navLinks.classList.remove("nav-active");
      burger.classList.remove("active");
    }
  });

  // Code pour la compétence
  const skills = document.querySelectorAll(".skill");

  skills.forEach((skill) => {
    const skillLevel = skill.getAttribute("data-skill");
    const progressBarInner = skill.querySelector(".progress-bar-inner");
    const percentageSpan = skill.querySelector(".percentage");
    const levelSpan = skill.querySelector(".level");

    function getLevel(level) {
      if (level <= 25) return "Base";
      if (level <= 50) return "Débutant";
      if (level <= 75) return "Intermédiaire";
      return "Avancé";
    }

    skill.addEventListener("mouseenter", () => {
      progressBarInner.style.width = skillLevel + "%";
      percentageSpan.textContent = skillLevel + "%";
      levelSpan.textContent = getLevel(skillLevel);
    });

    skill.addEventListener("mouseleave", () => {
      progressBarInner.style.width = "0";
      percentageSpan.textContent = "0%";
      levelSpan.textContent = "Base";
    });
  });

  // Code pour cacher la navbar au défilement
  let lastScrollTop = 0;
  const scrollThreshold = 100; // Ajuste cette valeur si nécessaire
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
      navbar.classList.add("hidden");
    } else {
      navbar.classList.remove("hidden");
    }
    lastScrollTop = scrollTop;
  });
});
