<header class="header header-login">
  <a href="index.html">
  <img
    class="header__logo"
    src="<?= URLROOT ?>/img/logo-header.png"
    alt="logo du site ma recette"
    />
  </a>
  <nav class="main-nav">
    <ul class="main-nav__list">
      <li class="main-nav__list-item">
        <a href="<?= URLROOT ?>/pages">Ma recette</a>
      </li>
      <div class="header-login__icon-box">
        <input
          type="text"
          placeholder="Chercher : tarte aux fraises, gâteau au chocolat, gratin dauphinois"
          class="header-login__input"
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
