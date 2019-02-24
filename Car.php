<?php
declare(strict_type=1); // pour déclarer le type strict du php



// déclaration d'une classe en PHP  
// pas de parenthese comme dans une fonction ! (pas dans une fonction)
class Car 
{
    const MAX_SPEED = 200; // une constante de classe 
    
    // contenu de la classe (propriétés et méthodes)
    // Propriétés 
    public $color; // une variable dans une classe ==> une propriété 
    protected $p1 ;
    private $p2 = "private";
    private $colors = ['blue', 'red', 'black'];
    
    
    // -------------------------------------------------------
    // ------------------ Méthodes ------------------------ 
    // --------------------------------------------------
    public function __construct(string $color) // constructeur 
    {
        // $this->color = 'red';
        // ou public $color = red; 
        if ($this-> hasColor($color))
        {
            $this->color = $color;
        } else 
        {   
            $this->color = $this->getRandomColor();
        }
        // $this->color = $this->getRandomColor();
        



    }
    ////fzq'f
    
    public function getRandomColor()
    {
        return $this->colors[array_rand($this->colors, 1)]; 
    }
    
    public function setColor($color ) //si l'on veut qu'une couleur soit instancié par défault lorsque pas d'argument lancé dans l'instanciation d'un objet on lui passe l'argument = null dnas le construct ($color = null)
    {
        //controle d'intégrité (verif du choix de la couleur lorsqu'elle est bien présente dans mon tblx $colors)
        if (in_array($color, $this->colors)){
            $this->color = $color;  
        }
    }
    
    public function __destruct() // destucteur 
    {
        echo "Car destructed <br />";
    }
    
    public function start ()
    {
        return "started";
    }
    
    public function stop ()
    {
        return "stopped";
    }
    
    //verifier que la couleur souhaitée est bien présente dans la palette de couleur proposée 
    private function hasColor($color)
    {
        return in_array($color, $this->colors);
    }
    
    //GETTER - SETTER
    public function getP2()
    {
        return $this->p2; // le this renvoie la valeur de ma propre propriété. 
        //elle pointe vers la valeur de sa classe 
    }

}