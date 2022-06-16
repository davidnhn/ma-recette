<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/navbar.php';?>

<main class="main-login container grid grid__col--2">
  <?php if(isset($data['justRegistered'])):?>
    <div class="welcome_message">
      <h1>Bienvenue sur Ma Recette <?= $data['prenom']?>, tu peux maintenant te connecter !</h1>
    </div>

  <?php endif;?> 
  <div class="login <?= isset($_POST['connexion']) ? 'full-width' : '' ?> <?= isset($data['justRegistered']) ? 'welcome_login' : '' ?>">
    <h2 class="login__title <?= isset($data['justRegistered']) ? 'hidden' : '' ?>">Déjà inscrit(e) ?</h2>
    <p class="login__info <?= isset($data['justRegistered']) ? 'hidden' : '' ?>">
      Connectez-vous avec votre adresse mail et votre mot de passe ou avec
      Facebook
    </p>
    <button type="submit" class="login__facebook <?= isset($data['justRegistered']) ? 'hidden' : '' ?>">
      Continuer avec Facebook 
      <ion-icon name="logo-facebook"></ion-icon>
    </button>
    <p class="login__or <?= isset($data['justRegistered']) ? 'hidden' : '' ?>">ou</p>
    <form method="POST">
      <div>
        <input
          type="email"
          name="email_login"
          id=""
          placeholder="Votre adresse email "
          class="login__email <?= isset($data['email_err_login']) ? 'mb-0' : ''?>"
          value="<?= $data['email_login'] ?? '' ?>"
          />
          <p>
            <span class="error-message"><?= $data['email_err_login'] ?? '' ?></span>
          </p>
      </div>
      <div>
        <input
          type="password"
          name="mdp_login"
          id=""
          placeholder="Votre mot de passe"
          class="login__mdp <?= isset($data['mdp_err_login']) ? 'mb-0' : ''?>"
          value="<?= $data['mdp_login'] ?? '' ?>"
          />
          <p>
            <span class="error-message"><?= isset($data['mdp_err_login']) ? $data['mdp_err_login'] : '' ?></span>
          </p>
      </div>
      <div class="login__forgotten-password">
        <a href="#" class="login__link">J'ai oublié mon mot de passe</a>
      </div>
      <button type="submit" name="connexion" class="login__connexion" id="<?= isset($data['justRegistered']) ? 'welcome_connexion' : '' ?>">Je me connecte</button>
    </form>
  </div>

  <div class="subscribe <?= isset($_POST['connexion']) || isset($data['justRegistered']) ? 'hidden' : '' ?>">
    <h2 class="subscribe__title">Inscrivez-vous gratuitement !</h2>
    <p class="subscribe__info">
      Créez votre compte en 30 secondes et profitez de tous les services de
      Ma recette
    </p>

    <button class="subscribe__facebook">
      Continuer avec Facebook 
      <ion-icon name="logo-facebook"></ion-icon>
    </button>
    <p class="subscribe__or">ou</p>
    <form action="" class="subscribe" method="post">
      <div>
        <input
          type="text"
          placeholder="Votre prénom"
          class="subscribe__firstname"
          name="prenom"
          value="<?= $data['prenom'] ?? '' ?>"
          />
        <input
          type="text"
          placeholder="Votre nom"
          name="nom"
          class="subscribe__lastname"
          value="<?= $data['nom'] ?? '' ?>"
          />
          <p>
            <span class="error-message"><?= isset($data['nom_err']) ? $data['nom_err'] : '' ?></span>
          </p>
          <p>
            <span class="error-message"><?=  isset($data['prenom_err']) ? $data['prenom_err'] : '' ?></span>
          </p>
      </div>
      <div>
        <input
          type="email"
          placeholder="Votre adresse email"
          name="email_register"
          class="subscribe__email"
          value="<?= $data['email_register'] ?? '' ?>"
          />
          <p>
            <span class="error-message"><?= isset($data['email_err_register']) ? $data['email_err_register'] : '' ?></span>
          </p>
      </div>
      <div>
        <input
          type="text"
          name="pseudo"
          id=""
          placeholder="Choisissez un pseudo"

          class="subscribe__pseudo"
          value="<?= $data['pseudo'] ?? '' ?>"
          />
          <p>
            <span class="error-message"><?= isset($data['pseudo_err']) ? $data['pseudo_err'] : ''  ?></span>
          </p>
      </div>
      <div>
        <input
          type="password"
          name="mdp_register"
          id=""
          placeholder="Votre mot de passe"
          class="subscribe__password"
          value="<?= $data['mdp_register'] ?? '' ?>"
          />
          <p>
            <span class="error-message"><?=isset($data['mdp_err_register']) ? $data['mdp_err_register'] : ''  ?></span>
          </p>
      </div>
      <!-- <p class="subscribe__info-password">
        Le mot de passe doit contenir 8 caractères.
      </p> -->
      <button name="register" type="submit" class="subscribe__inscription">Je m'inscris</button>
    </form>
  </div>
</main>
<?php require APPROOT . '/views/inc/footer.php';?>