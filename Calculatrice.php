<?php

class Calculatrice
{
    private $numb1;
    private $numb2;

    public function __construct(int $numb1, int $numb2)
    {
        $this->numb1 = $numb1;
        $this->numb2 = $numb2;
    }

    public function addition()
    {
        return $this->numb1 + $this->numb2;
    }

    public function soustraction()
    {
        return $this->numb1 - $this->numb2;
    }

    public function multiplication()
    {
        return $this->numb1 * $this->numb2;
    }

    public function division()
    {
        if ($this->numb2 === 0) {
            throw new DivisionByZeroError('Division par zéro.');
    }
        return $this->numb1 / $this->numb2;
    }

    public function setNumb2(int $number){
        $this->numb2 = $number;
        return $this;
    }
}
