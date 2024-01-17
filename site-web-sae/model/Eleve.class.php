<?php
require_once(__DIR__.'/DAO.class.php');
require_once(__DIR__.'/Prof.class.php');

// Un élève de la BD
class Eleve {
  private string $login;
  private string $nom;
  private string $prenom; 
  private Prof $profRef;
  private string $groupe;
  //mdp?

  // Constructeur
  public function __construct(string $login, string $nom, string $prenom, Prof $profRef=NULL, string $groupe) { //mdp?
    $this->login = $login;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->profRef = $profRef;
    $this->groupe = $groupe;
  }

  // Getters
  public function getLogin() : string {
    return $this->login;
  }

  public function getNom() : string {
    return $this->nom;
  }

  public function getPrenom() : string {
    return $this->login;
  }

  public function getProfRef() : Prof {
    return $this->profRef;
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

  // Acces à un élève connaissant son login
  public static function read(int $login): Eleve {
    $dao = DAO::get();
    $table = $dao->query(""); //query à ajouter une fois la BD terminée

    if (count($table) == 0) {
      throw new Exception("Erreur:  élève $login non trouvé");
    }
    // Il ne peux pas y avoir plus d'une instance avec ce login
    if (count($table) > 1) {
      throw new Exception("Incohérence:  l'élève $login existe en ".count($table)." exemplaires");
    }
    // Les données de cette catégorie
    $row = $table[0];
    return new Eleve($row[''], $row[''], $row[''], Prof::read($row['']), $row['']); //changements à faire pour ajouter les bonnes valeurs une fois la BD terminée
  }

  // Récupère des élèves étant donné un nom de groupe
  public static function readGroupe(istring $groupe) : array {
    $dao = DAO::get();
    $table = $dao->query("");//query a ajouter une fois la BD terminée
    $res = array();
    for($i = 0; $i < count($table); $i++){
      $row = $table[$i];
      $res[] = new Eleve($row[''], $row[''], $row[''], Prof::read($row['']), $row['']);
    }
    return $res;
  }
}
?>
