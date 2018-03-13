<?php
/**
 * @brief PHP POO exercice 2.
 * @author Hans Vanpee <hans@vanpee.fr>
 *
 * Objectif : encapsuler les détails d'implémentation dans une classe.
 *
 * Mots clés : visibilité, public, private, constructeur, destructeur.
 *
 */
/*
 * Exercice : modifiez la classe Actor et cachez les attributs firstName
 * et lastName, ajoutez un constructeur pour initialiser les objets de la
 * classe, améliorez la création du tableau actors.
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * @brief Store actor details.
 */
class Actor
{
    private $_firstName;
    private $_lastName;
    /**
     * @brief output actor's full name in <p> tag.
     */
    public function __construct($new_firstName, $new_lastName)
    {
        $this->_firstName=$new_firstName;
        $this->_lastName=$new_lastName;
    }
    function fullName()
    {
        echo "<p>".$this->_firstName." ".$this->_lastName."</p>";
    }
}
$actors = [];
$actors[] = new Actor('John', 'Gielgud');
// $actors[0]->firstName = 'John';
// $actors[0]->lastName = 'Gielgud';
$actors[] = new Actor('Laurence', 'Olivier');
// $actors[1]->firstName = 'Laurence';
// $actors[1]->lastName = 'Olivier';
$actors[] = new Actor('Vivien', 'Leigh');
// $actors[2]->firstName = 'Vivien';
// $actors[2]->lastName = 'Leigh';
echo "<h1>Actors List</h1>";
foreach ($actors as $actor) {
    $actor->fullName();
}
// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4:
?>