<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runner;

const DESRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function runGame(){
    $generateGameData = function() {
        $question = random_int(1, 99);   
        $correctAnsver = $question % 2 === 0 ? 'yes' : 'no';        
        return [$question, $correctAnsver];
    }
    runner(DESRIPTION, $generateGameData);
}