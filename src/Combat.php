<?php

namespace App;

class Combat
{
    public $pikachu;
    public $jigglypuff;
    public $life_value;
    public $attack_value;
    public $round;

    public function startCycle($pikachu, $jigglypuff)
    {

        while ($pikachu->life_value > 0 && $jigglypuff->life_value > 0) {

            return $this->round->startRound();
        }
    }

    public function startRound($round, $pikachu, $jigglypuff)
    {
        if ($round == 1) {

            return $pikachu->attack();
            
        } else {

            return $jigglypuff->attack();
        }
    }

    public function attack($life_value, $attack_value)
    {
        $this->life_value = $life_value;
        $this->attack_value = $attack_value;

        return $life_value = $life_value - $attack_value;
    }

    public function continueWithRound($round)
    {
        $this->round = $round;

    }

   
}
