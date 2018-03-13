<?php
class Animals
{
	protected $_crysound;
	private $_runspeed;
	private $_sleeptime;

	public function __construct($crysound, $runspeed, $sleeptime)
	{
		$this->_crysound=$crysound;
		$this->_runspeed=$runspeed;
		$this->_sleeptime=$sleeptime;
	}
	// public function cry()
	// {
	// 	return 'Je suis un animal et je fais un'.$this->_crysound;
	// }
	public function run()
	{
		return '<p>Je cours à '.$this->_runspeed.'<p>';
	}
	public function sleep()
	{
		return '<p>Je dors '.$this->_sleeptime.'<p>';
	}

}


Class Cat extends Animals
{
	private $_name;
	function __construct($name, $newRun, $newSleeptime)
	{
		 $this->_name=$name;
		 parent::__construct('miaule', $newRun, $newSleeptime);
	}
	function cry()
	{
		return '<p>Je suis un chat, je '.$this->_crysound.' et je m\'appelle '.$this->_name.'</p>';
	}	
}

Class Dog extends Animals
{
	private $_name;
	function __construct($name,$newRun, $newSleeptime)
	{
		$this->_name=$name;
		parent::__construct('aboie',$newRun, $newSleeptime);
	}	
	function cry()
	{
		return '<p>Je suis un chien, j\' '.$this->_crysound.' et je m\'appelle '.$this->_name.'</p>';
	}
}

$animals = [];
$animals[] = new Dog('Médor', '15km/h', '22h');
$animals[] = new Dog('Olaf', '13km/h', '18h');

$animals[] = new Cat('red', '15km/h', '22h');
$animals[] = new Cat('mistigri', '13km/h', '18h');
$animals[] = new Cat('poussycat', '11km/h', '15h');


foreach ($animals as $bestiole) {
	echo $bestiole->cry();
	echo $bestiole->run();
	echo $bestiole->sleep();
}



/**
* Créer des classes Dog et et Cat étendant Pet et implémentant l'interadce Animal
* 
* Methode de Animal : 
*   - Cry() // Affiche le nom du crie de l'animal
*   - Run() // Affiche la vitesse a laquelle l'animal court
* Propriété de Animal :
*    - $speed
*    - $cryName
* 
* Methode de Pet
*   - Sleep() // Affiche le temps d'une sieste d'un animal
* Proprieté de Pet
*   - SleepTime
*
* Il faut passer les paramètres $sleepTime, $speed, $cryName dans le constructeur
* 
* 
* Créer ensuite 3 chats et 2 chiens, les mettres dans un tableau
* Parcourir le tableau et afficher soit le crie, la vitesse ou son temps de sieste.
*/