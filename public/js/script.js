const navbar = document.querySelector('.header');
const navbarHeight = navbar.getBoundingClientRect().height;
const hero = document.querySelector('.hero');
const stickySearch = document.querySelector('.header__search');
/* ===============================================

        *STICKY NAVBAR

   ===============================================*/

const stickyNav = function (entries) {
  const [entry] = entries;
  console.log(entry);
  if (!entry.isIntersecting) {
    navbar.classList.add('sticky');
    stickySearch.style.visibility = 'visible';
  } else {
    navbar.classList.remove('sticky');
    stickySearch.style.display = 'block';
    stickySearch.style.visibility = 'hidden';
  }
};

const heroObserver = new IntersectionObserver(stickyNav, {
  root: null,
  threshold: 0,
  rootMargin: `-${navbarHeight}px`,
});

heroObserver.observe(hero);

/* ===============================================

        *MODAL

   ===============================================*/

const recipe = document.querySelectorAll('.picture-click');

const modal = document.querySelector('.popup-recette');

const btnCloseModal = document.querySelector('.popup-recette__close');

const openModal = function () {
  modal.classList.remove('hidden');
};

const closeModal = function () {
  modal.classList.add('hidden');
};

btnCloseModal.addEventListener('click', closeModal);
for (let i = 0; i < recipe.length; i++)
  recipe[i].addEventListener('click', openModal);

document.addEventListener('keydown', function (e) {
  // console.log(e.key);

  if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
    closeModal();
  }
});
