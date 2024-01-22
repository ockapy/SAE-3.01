<?php
require_once(__DIR__.'/DAO.class.php');
require_once(__DIR__.'/Prof.class.php');

// Un élève de la BD
class Eleve {
  private string $username;
  private Prof $owner;
  private string $idgroup;
  //mdp?

  // Constructeur
  public function __construct(string $username, Prof $owner=NULL, string $idgroup) { //mdp?
    $this->username = $username;
    $this->owner = $owner;
    $this->idgroup = $idgroup;
  }

  // Getters
  public function getLogin() : string {
    return $this->username;
  }

  public function getProfRef() : Prof {
    return $this->owner;
  }

  public function getGroupe() : string {
    return $this->idgroup;
  }
  



  ////////////// Gestion de la persistance (méthodes CRUD) ////////////////

  //retourne le nombre d'élèves dans la base 
  public static function count() : int {
    $dao = DAO::get();
    $table = $dao->query("SELECT * FROM viewstudents ");//query à ajouter une fois la BD terminée
    return count($table);
  }

  ////////////// READ /////////////////////////////////////////////

  // Acces à un élève connaissant son login
  public static function read(string $username): Eleve {
    $dao = DAO::get();
    $table = $dao->query("SELECT username,owner,idgroup FROM viewstudents, groups WHERE id=idgroup and username='$username'"); //query à ajouter une fois la BD terminée

    if (count($table) == 0) {
      throw new Exception("Erreur:  élève $username non trouvé");
    }
    // Il ne peux pas y avoir plus d'une instance avec ce login
    if (count($table) > 1) {
      throw new Exception("Incohérence:  l'élève $username existe en ".count($table)." exemplaires");
    }
    // Les données de cette catégorie
    $row = $table[0];
    return new Eleve($row['username'], Prof::read($row['owner']), $row['idgroup']); //changements à faire pour ajouter les bonnes valeurs une fois la BD terminée
  }

  // Récupère des élèves étant donné un nom de groupe
  public static function readGroupe(int $idgroup) : array {
    $dao = DAO::get();
    $table = $dao->query("SELECT username,owner,idgroup FROM viewstudents, groups WHERE id=idgroup and id=$idgroup");//query a ajouter une fois la BD terminée
    $res = array();
    for($i = 0; $i < count($table); $i++){
      $row = $table[$i];
      $res[] = new Eleve($row['username'], Prof::read($row['owner']), $row['idgroup']);
    }
    return $res;
  }
}
?>
