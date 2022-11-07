<?php

class Recipe
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getAllRecipes()
  {
    $this->db->query('SELECT * FROM recette');
    return $this->db->resultSet();
  }

  public function getSavedRecipes($identifier)
  {
    $this->db->query('SELECT * FROM recette JOIN saved_recipe ON recette.id = saved_recipe.recipe_id JOIN util ON saved_recipe.utilisateur_id = util.id WHERE util.id = :id ');

    $this->db->bind(':id', $identifier);

    return $this->db->resultSet();
  }
}