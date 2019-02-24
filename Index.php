<?php

include "Car.php";
// include "ColorStock.php";
// include "Red.php"

// $color = new ColorStock('green');
// var_dump($color); 

$car = new Car("red");
$otherCar = new Car("pink");

// Deux instances de la classe car ==> deux variables qui
// partagent le meme type --> de la classe Car mais deux objets différents 
// dans ce cas présents, les deux objets ont leur propre espace mémoire attribué 

var_dump($car, $otherCar);
// deux moyen de verifier les types d'une instance de classe 
var_dump(get_class($car));
var_dump($car instanceof Car ); // ceci est une expression qui demande est ce que car est une instance de la classe Car (boolean : true or false)
                                // (cas d'utilisation) if ($car instaceof Car) DO something ... 

var_dump($car->color); // je veux acceder à la propriété d'une classe. 
                        //je colle un $ uniquement à la classe mais pas à la proprio 
                        // me renvoie null car je n'ai pas de valeur sur la proprio color dans ma classe 

//je veux modifier la valeur de la proprio :
$car->color = 'red';
var_dump($car->color);
$otherCar->color = 'blue';
var_dump($otherCar->color);
                  // en faisant comme cela, je n'assure pas l'integrité de mes données (en lecture et ecriture accessible de l'extérieur)      
                  // mon programme ne vérifie pas la qualité de l'information (je pourrais mettre 12 cela fonctionne également )


// ---------------------
//appelle de fonctions :
var_dump($car->start());
var_dump($car->stop());
// ---------------------


//--------------------------------------------
// appelle d'une constante de classe
// ==> Nom de la classe :: nom de la constante 
var_dump(Car::MAX_SPEED);
//--------------------------------------------

//--------------------------------------------------------------------------------------
// var_dump($car->p1);
// var_dump($car->p2);
//--------------------------------------------------------------------------------------
// je ne peux pas acceder à la valeur de ces proprio par une instance (ni ecrire)
// leur accès est vérouillé. et il en est de même pour les méthodes privées ou protégées.
// c'est le niveaux d'encapsulation !!!

var_dump($car->getP2());

$car->setColor("blue");
$otherCar->setColor("black");
var_dump($otherCar->color);
var_dump($car->color);

