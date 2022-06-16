<?php
class Users extends Controller
{
    public function __construct()
    {
      $this->userModel = $this->model('User');
    }

    public function register() {

      $data = [
        'nom' => '',
        'prenom' => '',
        'email_register' => '',
        'pseudo' => '',
        'mdp_register' => '',
        'nom_err' => '',
        'prenom_err' => '',
        'email_err_register' => '',
        'pseudo_err' => '',
        'mdp_err_register' => ''
      ];

      $creationCompte = false;

      if(empty($_POST['nom'])) {
        $data['nom_err'] = 'Veuillez rentrer un nom.';
      } else {
        $data['nom'] = test_input($_POST['nom']);
        if(!preg_match("/^[a-zA-Z-' ]*$/", $data['nom'])) {
          $data['nom_err'] = 'Lettres et espaces autorisés uniquement';
        }
      }


      if(empty($_POST['prenom'])) {
        $data['prenom_err'] = 'Veuillez rentrer un prenom.';
      } else {
        $data['prenom'] = test_input($_POST['prenom']);
        if(!preg_match("/^[a-zA-Z-' ]*$/", $data['prenom'])) {
          $data['prenom_err'] = 'Lettres et espaces autorisés uniquement';
        }
      }

      if(empty($_POST['pseudo'])) {
        $data['pseudo_err'] = 'Veuillez rentrer un pseudo.';
      } else {
        $data['pseudo'] = test_input($_POST['pseudo']);
      }

      if(empty($_POST['email_register'])) {
        $data['email_err_register'] = 'Une adresses email est obligatoire.';
      } else {
        $data['email_register'] = test_input($_POST['email_register']);
        if(!filter_var($data['email_register'], FILTER_VALIDATE_EMAIL)) {
          $data['email_err_register'] = 'Adresse email invalide.';
        }
      }

      if(empty($_POST['mdp_register'])) {
        $data['mdp_err_register'] = 'Entrez un mot de passe';
      }elseif(strlen($_POST['mdp_register']) < 8) {
        $data['mdp_err_register'] = 'Votre mot de passe doit contenir au moins 8 caractères';
      } else {
        $data['mdp_register'] = $_POST['mdp_register'];
      }

      return $data;

      

    }
    
    public function createUserSession($user) {
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->prenom;
      redirect('users/carnet');

    }
    
    public function login() {

      $data = [
        'email_login' => test_input($_POST['email_login']),
        'mdp_login' => test_input($_POST['mdp_login']),
        'email_err_login' => '',
        'mdp_err_login' => ''
      ];

      //Validate name
      if(empty($data['email_login'])) {
        $data['email_err_login'] = 'Entrez une adresse email';
        }
      
      //Validate password
      if(empty($data['mdp_login'])) {
       $data['mdp_err_login'] = 'Entrez un mot de passe';
      }

      // Check for user/email
      if($this->userModel->findUserByEmail($data['email_login'])) {
        // user found

      } else {
        //user not found
        $data['email_err_login'] = 'Aucun compte ne correspond à l\'adresse email indiquée.';
      }

      if(empty($data['email_err_login']) and empty($data['mdp_err_login'])) {
        echo 'pas error';
        //* on recupere l utilisateur et ses attribut
        $loggedInUser = $this->userModel->login($data['email_login'], $data['mdp_login']);
        var_dump($loggedInUser);
        if($loggedInUser) {
          echo 'loggin';
          $this->createUserSession($loggedInUser);
        } else {
          $data['mdp_err_login'] = 'Mot de passe incorrect';
          $this->view('users/index', $data);
        }
      } else {

        $this->view('users/index', $data);
      }
    }
    
    public function index()
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if(isset($_POST['register'])) {
          $data = $this->register();
          
          if(empty($data['nom_err']) && empty($data['prenom_err']) && empty($data['pseudo_err']) && empty($data['email_err_register']) && empty($data['mdp_err_register'])) {
           
            $data['mdp_register'] = password_hash($data['mdp_register'],PASSWORD_DEFAULT);
          
            if($this->userModel->register($data)) {
              // unset($_SESSION['register']);
              $data['justRegistered'] = true;
              $this->view(('users/index'), $data);

            } else {

              die('marche po');
             
            }
          } else {

            $this->view(('users/index'), $data);

          }
        }
        if(isset($_POST['connexion'])) {
          $this->login();
        }
      }


      $this->userView = $this->view('users/index', $data = ['loooool']);
    }

    public function carnet() {
      $this->view('users/carnet');
    }

    public function logout() {
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('users/index');
    }
    
}

