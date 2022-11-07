<?php

class Pages extends Controller
{
  // on execute la methode model() qui require notre fichier models/Recipe.php et retourne une instanciation du modele
  public function __construct()
  {
    $this->recipeModel = $this->model('Recipe');
  }

  public function index()
  {

    $recipes = $this->recipeModel->getAllRecipes();

    $this->view('pages/index', $recipes);
  }
  public function login()
  {
    $data = ['title' => 'About'];
    $this->view('pages/login', $data);
  }
}