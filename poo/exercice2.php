<?php
Class Personnage
{
	private $guerrier=50;
	private $guerrier2=50;
	private $sorcier=50;
	private $sorcier2=50;
	private $frapper=50;
	private $perteVie=50;

//declaration des constantes en rapport avec le nombre de vie
	const ENSORCELLER=10;
	const ATTAQUER=15
	public function __construct($newGuerrier, $newGuerrier2, $newSorcier, $newSorcier2, $newFrapper, $newPerteVie)
	{
		$this->guerrier=$newGuerrier;
		$this->guerrier2=$newGuerrier2;
		$this->sorcier=$newSorcier;
		$this->sorcier2=$newSorcier2;
		// $this->frapper=$newFrapper;
		// $this->perteVie=$newPerteVie;
	}

	public function life()
	{
		echo '<p>'.$this->guerrier.' '.$this->guerrier2.' '.$this->sorcier.' '.$this->sorcier2.' '.$this->frapper.' '.$this->perteVie.'<p>';
	}
	// public function frapper(personnage $persoAFrapper)
	// {
	// 	$persoAFrapper->_attaques;
	// }
}

$perso=[];
// création personnage 
$perso[] = new personnage('guerrier');
$perso[] = new personnage('guerrier2');
// création personnage sorciers
$perso[]  = new personnage('sorcier');
$perso[]  = new personnage('sorcier2');
foreach ($perso as $character) {
	echo $character->life();
}
// perso1 frappe perso2
// $guerrier->frapper($guerrier2);//$guerrier1 frappe $guerrier2
// $guerrier2->perteVie();      //$guerrier2 perd Xvie
// $guerrier->frapper($sorcier);
// $sorcier->perteVie();
// $guerrier->frapper($sorcier2);
// $sorcier2->perteVie();

// $sorcier->frapper($sorcier2);
// $sorcier2->perteVie();
// $sorcier->frapper($guerrier);
// $guerrier1->perteVie();
// $sorcier->frapper($guerrier2);
// $guerrier2->perteVie();
/**
 * Jeux de sorciers et guerriers
 * 
 * Le but du jeu est de créer des "personnages" qui vont se battre
 * Ces "personnages" sont des "guerriers" et des "sorciers"
 * 
 * Le "sorcier" peut "ensorceller" un autre "personnage"
 * Lors d'une attaque de sorcier l'autre "personnage" perds 10 points de vie
 * 
 * Le "guerrier" peut "attaquer" un autre "personnage"
 * Lors d'une attaque de guerrier l'autre "personnage" perds 15 points de vie
 * 
 * 
 * Faire un formulaire qui demande le nombre de sorcier et le nombre de guerrier
 * Demander le nombre de point de vie et le  nom de chaque personnage
 * 
 * 
 * Créer autant de personnage qu'indiquer dans le formulaire, parametrer leurs nom et point de vie
 * et faite les se battre.
 * 
 * Le jeu s'arrete quand il ne reste plus qu'un personnage.
 * 
 * */
