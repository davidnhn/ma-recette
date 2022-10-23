<section class="hero">
  <div class="bg-video">
    <video class="bg-video__content" autoplay muted loop>
      <source src="img/bg-background.mp4" />
      Your browser is not supported!
    </video>
  </div>
  <header class="header">
    <a href="">
      <img
          class="header__logo"
          src="img/logo-header.png"
          alt="logo du site ma recette"
          />
        </a>
        <nav class="main-nav">
          <ul class="main-nav__list">
            <li class="main-nav__list-item">
              <a href="#">Ma recette</a>
          </li>
          <div class="header__search">
            <input
              type="text"
              placeholder="Chercher : tarte aux fraises ..."
              />
              <ion-icon class="icon-search" name="search-outline"></ion-icon>
          </div>
          <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="main-nav__list-item">
          <a href="<?= URLROOT ?>/users/carnet">Mon carnet perso</a>
        </li>
        <li class="main-nav__list-item">
          <a href="<?= URLROOT ?>/users/logout">Se deconnecter</a>
        </li>
        <?php else: ?>
      <li class="main-nav__list-item">
        <a href="<?= URLROOT ?>/users/index"
          >
          <ion-icon name="person-outline"></ion-icon>
          Se connecter /
          Inscription
        </a
          >
      </li>
      <?php endif; ?>
        </ul>
      </nav>
    </header>
      <div class="hero-box">
        <h1 class="hero-box__title">Bienvenue sur <span>Ma recette</span> !</h1>
        <div class="hero-box__search">
          <input
          type="text"
          placeholder="Chercher : tarte aux fraises, gâteau"
          />
          <ion-icon class="icon-search" name="search-outline"></ion-icon>
        </div>
      </div>
    </section>