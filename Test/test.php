<?php

class Player
{
    public $name;
    public $hp = 100;

    public function roar()
    {
        return $this->name . " кричит: ЗА ОРДУ!";
    }
}


$warior = new Player();
$warior->name = "Громмаш";


echo $warior->roar();
