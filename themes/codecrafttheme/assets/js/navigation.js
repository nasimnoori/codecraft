document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header");
  const buttons = document.querySelectorAll(".contactbutton, .menubutton");
  const logolight = document.querySelector(".logo-light");
  const logodark = document.querySelector(".logo-dark");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      header.classList.add("bg-brandlight", "text-branddark");
      header.classList.remove("bg-branddark", "text-brandlight");
      buttons.forEach((button) => {
        button.classList.add("border-branddark", "text-branddark");
        button.classList.remove("border-brandlight", "text-brandlight");
      });
      logolight.classList.add("hidden");
      logodark.classList.remove("hidden");
    } else {
      header.classList.add("bg-branddark", "text-brandlight");
      header.classList.remove("bg-brandlight", "text-branddark");
      buttons.forEach((button) => {
        button.classList.add("border-brandlight", "text-brandlight");
        button.classList.remove("border-branddark", "text-branddark");
      });
      logolight.classList.remove("hidden");
      logodark.classList.add("hidden");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const closeMenuButton = document.getElementById("close-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");

  // Open the menu when the menu button is clicked
  mobileMenuButton.addEventListener("click", function () {
    mobileMenu.classList.remove("hidden");
  });

  // Close the menu when the close button is clicked
  closeMenuButton.addEventListener("click", function () {
    mobileMenu.classList.add("hidden");
  });
});
