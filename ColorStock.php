<?php

class ColorStock 
{
    private $colors = [];

    public function addColor ($color)
    {
        if ($this->colorExists($color) === false) {
            $this->colors[] = $color; 
        } 
    }

    public function removeColor ($color)
    {
        if ($this->colorExists($color) === true) {
            $key = array_search($color, $this->colors);
            unset($this->colors[$key]);  
        }
            
    }

    public function getColorCount () : int
    {
        return count($this->colors);
        // $nColors = count($this->colors);
        // echo 'il y a '.$nColors.' disponibles dans notre Garage';            
    }

    public function colorExists() : bool
    {
        return in_array($color, $this->colors);
    }

    public function searchColorByName ($name) 
    {
    
        $tab = array_filter($this->colors, 
            function ($color) use ($name)
            { 
                return $color->getName() === $name; //CLOSURE (fonction qui retourne des fonctions)
            }

        if (count($tab) > 0) {
            reset($tab);
            return tab[0];
        }
        return null;
        
    }

    public function searchColorByHexaCode ($hexaCode)
    {
        
    }

}