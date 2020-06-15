<?php

use PHPUnit\Framework\TestCase;
use App\Combat;

class CombarTest extends TestCase
{
        public function test_cycle_continue_while_life_more_than_zero()
        {
            $combat= new Combat();

            $expected= $round->startRound();

            $response= $round->startRound();

            $this->assertEquals($expected, $response);


        }

        public function test_cycle_finish_when_life_less_than_zero()
        {

        }
        

        public function test_if_round_is_1_Pikachu_attack ()
        {                   

            $expected= 45;

            $response= $pikachu->attack(100, 55);

            $this->assertEquals($expected, $response);
        }

        
        public function test_if_round_is_0_Jigli_attack ()
        {
                    

            $expected= 55;

            $response= $jigglypuff->attack(100, 45);

            $this->assertEquals($expected, $response);
        }

        public function test_after_one_round_switch_to_other()
        {


        }


}