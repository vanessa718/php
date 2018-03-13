<?php
/**
 * @brief PHP POO exercice 3.
 * @author Hans Vanpee <hans@vanpee.fr>
 *
 * Objectif : rendre une classe plus flexible avec des méthodes magiques.
 *
 * Mots clés : méthodes magiques, __get, __set
 *
 */
/*
 * Exercice : ajoutez un getter et un setter à la classe Actor et ajoutez
 * une propriété birthDate à un des acteurs. Affichez la date dans la
 * fonction fullName quand une valeur est présente.
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Actor
{
    private $_firstName;
    private $_lastName;
    private $extraData = array();

    
    public function __get($name)
    {
        if (isset($this->extraData[$name]))
        {
          return $this->extraData[$name];
        } else {
            trigger_error("Error: tried to access undefined property: $name");
        }
    }
    public function __set($name, $val)
    {
        $this->extraData[$name] = $val;   
    }

    public function __construct($_firstName, $_lastName)
    {
        $this->_firstName = $_firstName;
        $this->_lastName = $_lastName;
    }
    public function fullName()
    {
        if (isset($this->extraData['birthDate'])) $birthDate = " " . $this->extraData['birthDate'];
        else $birthDate = "";
        echo "<p>".$this->_firstName." ".$this->_lastName."$birthDate"."</p>";
    }
}

$actors[] = new Actor('John', 'Gielgud');
$actors[] = new Actor('Laurence', 'Olivier');
$actors[] = new Actor('Vivien', 'Leigh');
$actors[0]->birthDate=" est né le 14 avril 1904";

echo "<h1>Actors List</h1>";
foreach ($actors as $actor) {
    $actor->fullName();
}
?>

<!-- <?php
// class MaClasse
// {
//   private $attributs = [];
//   private $unAttributPrive;
  
  
//   public function afficherAttributs()
//   {
//     echo '<pre>', print_r($this->attributs, true), '</pre>';
//   }
// }

// $obj = new MaClasse;

// $obj->attribut = 'Simple test';
// $obj->unAttributPrive = 'Autre simple test';

// echo $obj->attribut;
// echo $obj->autreAtribut;
?> -->