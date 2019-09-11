<?php
Class Car
{

    public $spalva;
    public $greitis;
    private $rida;

    public function vaziuoti()
    {
        echo "Automobilis vaziuoja " . $this->greitis . " greiciu";

        $this->rida += (int)$this->greitis;
    }

    public function gautisSpalva()
    {
        return $this->spalva;
    }


    public function gautiRida()
    {
        return $this->rida;
    }
}