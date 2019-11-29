<?php

class Archer extends Character {
    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function arrow($target) {
        $rand = rand(1, 10);
        $damage = $this->atk + $rand;
        $target->setHP($damage);
        $target->isAlive();
        $status = "$this->pseudo attaque $target->pseudo qui a $target->lifePoint points de vie!";
        return $status;
    }

    //Ceci n'a pas été réalisé dans l'exo
    public function specialArrow($target) {
        $rand = rand(1.5, 3);
        $damage = $this->atk + $rand;
        $target->setHP($damage);
        $target->isAlive();
        $status = "$this->pseudo attaque $target->pseudo qui a $target->lifePoint points de vie!";
        return $status;
    }

    public function setHP($damage) {
        $this->lifePoint-=$damage;
        }

}       
