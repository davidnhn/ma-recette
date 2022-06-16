const navbar = document.querySelector(".header");
const navbarHeight = navbar.getBoundingClientRect().height;
const hero = document.querySelector(".hero");
const stickySearch = document.querySelector(".header__search");
/* ===============================================

        *STICKY NAVBAR

   ===============================================*/

const stickyNav = function (entries) {
  const [entry] = entries;
  console.log(entry);
  if (!entry.isIntersecting) {
    navbar.classList.add("sticky");
    stickySearch.style.visibility = "visible";
  } else {
    navbar.classList.remove("sticky");
    stickySearch.style.display = "block";
    stickySearch.style.visibility = "hidden";
  }
};

const heroObserver = new IntersectionObserver(stickyNav, {
  root: null,
  threshold: 0,
  rootMargin: `-${navbarHeight}px`,
});

heroObserver.observe(hero);
