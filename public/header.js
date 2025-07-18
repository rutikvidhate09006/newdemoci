document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("mobile-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const openIcon = document.getElementById("icon-open");
  const closeIcon = document.getElementById("icon-close");

  if (toggleBtn && mobileMenu && openIcon && closeIcon) {
    toggleBtn.addEventListener("click", function () {
      mobileMenu.classList.toggle("hidden");
      openIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
    });
  }

  document.querySelectorAll(".submenu-toggle").forEach((button) => {
    button.addEventListener("click", function () {
      const submenu = this.nextElementSibling;
      const icon = this.querySelector("svg");
      if (submenu && icon) {
        submenu.classList.toggle("hidden");
        icon.classList.toggle("rotate-90");
      }
    });
  });

  const submenuToggle = document.getElementById("submenu-toggle");
  const submenu = document.getElementById("submenu");
  const icon = document.getElementById("submenu-icon");

  if (submenuToggle && submenu && icon) {
    submenuToggle.addEventListener("click", function () {
      submenu.classList.toggle("hidden");
      icon.classList.toggle("rotate-180");
    });
  }

  const mainToggle = document.getElementById("main-toggle");
  const mainMenu = document.getElementById("main-menu");
  const mainIcon = document.getElementById("main-icon");

  if (mainToggle && mainMenu && mainIcon) {
    mainToggle.addEventListener("click", function () {
      mainMenu.classList.toggle("hidden");
      mainIcon.classList.toggle("rotate-180");
    });
  }

  document.querySelectorAll(".nested-toggle").forEach((toggleBtn) => {
    toggleBtn.addEventListener("click", function () {
      const submenu = this.nextElementSibling;
      const icon = this.querySelector(".nested-icon");
      if (submenu && icon) {
        submenu.classList.toggle("hidden");
        icon.classList.toggle("rotate-90");
      }
    });
  });
});
