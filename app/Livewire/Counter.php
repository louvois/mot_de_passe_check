<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $souhaits = [];
    public $souhait = "";

    public $nbcar = "";
    public $majuscule = "";
    public $minuscule = "";
    public $combien = 8;
    public $motdepasse;
    public $alphanumerique = "";
    public $special = "";
    public $validebutton = false;


    public function MAJUSCULE()
    {
        if(preg_match('/[A-Z]/', $this->motdepasse))

            $this->majuscule="OK";
        else
        {
            $this->majuscule="Failed";

        }
    }

    public function NOMBRE()
    {
        if (strlen($this->motdepasse)< $this->combien)
            $this->nbcar="Failed";
        else
            $this->nbcar="OK";
    }

    public function MINUSCULE()
    {
        if(preg_match('/[a-z]/', $this->motdepasse))

            $this->minuscule="OK";
        else
            $this->minuscule="Failed";
    }

    public function ALPHANUMERIQUE()
    {
        if(preg_match('/[0-9]/', $this->motdepasse))
            $this->alphanumerique="OK";
        else
            $this->alphanumerique="Failed";
    }


    public function SPECIAL()
    {
    if (preg_match("/\W/", $this->motdepasse))
        $this->special="OK";
    else
        $this->special="Failed";
    }

    public function synthese()
    {
        if (
            ($this->majuscule==="OK")&&
            ($this->nbcar==="OK")&&
            ($this->minuscule==="OK")&&
            ($this->alphanumerique==="OK")&&
            ($this->special==="OK") )
            {
            return $this->validebutton = true;
            }
    }

    public function render()
    {
        return view('livewire.counter');

    }


}
