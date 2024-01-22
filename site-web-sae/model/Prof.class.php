<?php
require_once(__DIR__.'/DAO.class.php');
require_once(__DIR__.'/Eleve.class.php');
require_once(__DIR__.'/Groupe.class.php');


// Un professeur de la BD
class Prof {
  private string $username;
  private string $firstname;
  private string $lastname; 
  private string $email;
  private string $groupe;

  // Constructeur
  public function __construct(string $username, string $firstname, string $lastname, string $email, string $groupe) {
    $this->username = $username;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->groupe = $groupe;
  }

  // Getters
  public function getLogin() : string {
    return $this->username;
  }

  public function getNom() : string {
    return $this->firstname;
  }

  public function getPrenom() : string {
    return $this->lastname;
  }

  public function getMail() : string {
    return $this->email;
  }

  public function getGroupe() : string {
    return $this->groupe;
  }
  



  ////////////// Gestion de la persistance (méthodes CRUD) ////////////////

  //retourne le nombre d'élèves dans la base 
  public static function count() : int {
    $dao = DAO::get();
    $table = $dao->query("");//query à ajouter une fois la BD terminée
    return count($table);
  }

  ////////////// READ /////////////////////////////////////////////

  // Acces à un professeur connaissant son login
  public static function read(string $username): Prof {
    $dao = DAO::get();
    $table = $dao->query("SELECT username, firstname, lastname, email, name FROM viewprofessors , groups WHERE username=owner and username='$username'"); //query à ajouter une fois la BD terminée

    if (count($table) == 0) {
      throw new Exception("Erreur: professeur $username non trouvé");
    }
    // Il ne peux pas y avoir plus d'une instance avec ce login
    if (count($table) > 1) {
      throw new Exception("Incohérence: le professeur $username existe en ".count($table)." exemplaires");
    }
    // Les données de cette catégorie
    $row = $table[0];
    return new Prof($row['username'], $row['firstname'], $row['lastname'], $row['email'], $row['name']);
  }

  // Récupère d'un prof étant donné un id de groupe
  public static function readGroupe(int $id) : Prof {
    $dao = DAO::get();
    $table = $dao->query("SELECT username, firstname, lastname, email, name FROM viewprofessors , groups WHERE username=owner and id=$id");//query a ajouter une fois la BD terminée
    if (count($table) == 0) {
      throw new Exception("Erreur: le groupe $id non trouvé");
    }
    // Il ne peux pas y avoir plus d'une instance avec ce login
    if (count($table) > 1) {
      throw new Exception("Incohérence: le groupe $id existe en ".count($table)." exemplaires");
    }
    // Les données de cette catégorie
    $row = $table[0];
    return new Prof($row['username'], $row['firstname'], $row['lastname'], $row['email'], $row['name']);
  }
}
?>