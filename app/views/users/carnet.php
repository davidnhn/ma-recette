
<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/navbar.php';?>
<h1>Bien joué <?= $_SESSION['user_name'] ?? ''?> !</h1>

<div class="carnet"> 
  <h1 class="carnet__titre">Mon carnet de recettes</h1>
</div>

<div class="container carnet__grid">
  <div class="saved-recipe">
    <div class="saved-recipe__header">
      <i class="fa-solid fa-bookmark"></i>
      <h2>Recettes à garder sous le coude</h2>
    </div>
  <form class="saved-recipe__form" action="">
    <select name="Categories" id="">
      <option value="">Entrées</option>
    </select>
    <div class="saved-recipe__search">
      <i class="fa-solid fa-magnifying-glass"></i>
       <input type="text" placeholder="Tarte, orange">
    </div>   
  </form>
  <div>

    <div class="saved-recipe__items">
      <img class="saved-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="saved-recipe__desc">

        <p class="saved-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="saved-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can saved-recipe__trash"></i>
    </div>
    <div class="saved-recipe__items">
      <img class="saved-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="saved-recipe__desc">

        <p class="saved-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="saved-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can saved-recipe__trash"></i>
    </div>
    <div class="saved-recipe__items">
      <img class="saved-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="saved-recipe__desc">

        <p class="saved-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="saved-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can saved-recipe__trash"></i>
    </div>
    <div class="saved-recipe__items">
      <img class="saved-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="saved-recipe__desc">

        <p class="saved-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="saved-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can saved-recipe__trash"></i>
    </div>
    <div class="saved-recipe__items">
      <img class="saved-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="saved-recipe__desc">

        <p class="saved-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="saved-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can saved-recipe__trash"></i>
    </div>
  
</div>
  </div>
  
  
  <div class="carnet__dragndrop">
    <img class="carnet__dotted-arrow" src="../img/dragndrop.png" alt="">
    <p>Glisser et déposer</p>
  </div>

  

   
   

  <div class="fav-recipe">
    <div class="fav-recipe__header">
      <i class="fa-solid fa-heart"></i>
      <h2>Mes recettes favorites</h2>
    </div>
  <form class="fav-recipe__form" action="">
      <select name="Categories" id="">
        <option value="">Entrées</option>
      </select>
      <div class="fav-recipe__search">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Tarte, orange">
      </div>
  </form>
  <div>
  <div class="fav-recipe__items">
      <img class="fav-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="fav-recipe__desc">

        <p class="fav-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="fav-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can fav-recipe__trash"></i>
    </div>
  <div class="fav-recipe__items">
      <img class="fav-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="fav-recipe__desc">

        <p class="fav-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="fav-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can fav-recipe__trash"></i>
    </div>
  <div class="fav-recipe__items">
      <img class="fav-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="fav-recipe__desc">

        <p class="fav-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="fav-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can fav-recipe__trash"></i>
    </div>
  <div class="fav-recipe__items">
      <img class="fav-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="fav-recipe__desc">

        <p class="fav-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="fav-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can fav-recipe__trash"></i>
    </div>
  <div class="fav-recipe__items">
      <img class="fav-recipe__img" src="<?= URLROOT ?>/img/repas.jpg" alt="">
      <div class="fav-recipe__desc">

        <p class="fav-recipe__title">Filet mignon de porc à la moutarde</p>
        <p class="fav-recipe__cat">Plat principal</p>
      </div>
      <i class="fa-solid fa-trash-can fav-recipe__trash"></i>
    </div>
  </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php';?>