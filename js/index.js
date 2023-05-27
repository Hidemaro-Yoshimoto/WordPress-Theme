const mobileMenu = document.querySelector("#js-nav-trigger");
const container = document.querySelector("#js-container");
const cover = document.querySelector('.cover');
const spNav = document.querySelector('.sp-nav');

mobileMenu.addEventListener("click", (e) => mobileMenuOpen(e));

const mobileMenuOpen = (e) => {
  e.preventDefault();

  spNav.classList.toggle('visible');

  mobileMenu.classList.toggle("menu-open");
  container.classList.toggle("move-container");

  // if(container.contains('move-container')) {
  //   cover.classList.remove('move-container');
  // }

  // document.addEventListener("touchmove", disableScroll, { passive: false });
  // document.addEventListener("mousewheel", disableScroll, { passive: false });
};

const disableScroll = (e) => e.preventDefault();

// function coverClick() {
//   mobileMenuClicked();
// };
