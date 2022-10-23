import {
  searchRecipes,
  MarmitonQueryBuilder,
  RECIPE_PRICE,
  RECIPE_DIFFICULTY,
  Recipe,
} from './node_modules/marmiton-api/dist/types/marmiton-api';
const qb = new MarmitonQueryBuilder();
// A query builder is provided to make complex queries
const query = qb
  .withTitleContaining('soja')
  .withoutOven()
  .withPrice(RECIPE_PRICE.CHEAP)
  .takingLessThan(45)
  .withDifficulty(RECIPE_DIFFICULTY.EASY)
  .build();
// Fetch the recipes
const recipes = await searchRecipes(query);
console.log(recipes);

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
