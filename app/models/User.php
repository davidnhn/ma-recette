<?php

class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Register User 
  public function register($data)
  {


    $this->db->query('INSERT INTO util (prenom, nom, pseudo, email, mdp) VALUES(:prenom, :nom, :pseudo, :email, :mdp)');
    //*Bind values
    $this->db->bind(':nom', $data['nom']);
    $this->db->bind(':prenom', $data['prenom']);
    $this->db->bind(':pseudo', $data['pseudo']);
    $this->db->bind(':email', $data['email_register']);
    $this->db->bind(':mdp', $data['mdp_register']);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //Find user by email
  public function findUserByEmail($email)
  {
    $this->db->query('SELECT * FROM util WHERE email = :email ');
    $this->db->bind(':email', $email);
    $row = $this->db->single();

    //check row 
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  // Login User 
  public function login($email, $mdp)
  {
    $this->db->query('SELECT * FROM util WHERE email = :email');
    $this->db->bind(':email', $email);
    $row = $this->db->single();
    $hashed_password = $row->mdp;
    if (password_verify($mdp, $hashed_password)) {
      return $row;
    } else {
      return false;
    }
  }
}