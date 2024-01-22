<?php
require_once(__DIR__.'/DAO.class.php');
require_once(__DIR__.'/Prof.class.php');
require_once(__DIR__.'/Eleve.class.php');


// Un Groupe de la BD
class Groupe {
  private string $id;
  private string $name;
  private Prof $owner;
  //mdp?

  // Constructeur
  public function __construct(string $id, string $name, Prof $owner=NULL) { //mdp?
    $this->id = $id;
    $this->name = $name;
    $this->owner = $owner;
  }

  // Getters
  public function getId() : string {
    return $this->id;
  }

  public function getName() : string {
    return $this->name;
  }

  public function getOwner() : Prof {
    return $this->owner;
  }

  



  ////////////// Gestion de la persistance (méthodes CRUD) ////////////////

  //retourne le nombre d'élèves dans la base 
  public static function count() : int {
    $dao = DAO::get();
    $table = $dao->query("SELECT * FROM groups");//query à ajouter une fois la BD terminée
    return count($table);
  }

  ////////////// READ /////////////////////////////////////////////

  // Acces à un Groupe connaissant son id
  public static function read(int $id): Groupe {
    $dao = DAO::get();
    $table = $dao->query("SELECT * FROM groups where id=$id"); 

    if (count($table) == 0) {
      throw new Exception("Erreur:  groupe $id non trouvé");
    }
    // Il ne peux pas y avoir plus d'une instance avec ce login
    if (count($table) > 1) {
      throw new Exception("Incohérence:  le groupe $id existe en ".count($table)." exemplaires");
    }
    // Les données de cette catégorie
    $row = $table[0];
    return new Groupe($row['id'], $row['name'], Prof::read($row['owner'])); 
  }

  // Récupère des groupe étant donné un nom d'un prof
  public static function readGroupes(string $prof) : Groupe {
    $dao = DAO::get();
    $table = $dao->query("SELECT * FROM groups WHERE owner='$prof'");
    $res = array();
    for($i = 0; $i < count($table); $i++){
      $row = $table[$i];
      $res[] = new Groupe($row['id'], $row['name'], Prof::read($row['owner'])); 
    }
    return $res;
  }
}
?>
