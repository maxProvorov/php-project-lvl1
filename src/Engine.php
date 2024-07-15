<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const MAX_CORRECT_ANSWERS = 3;

function runner($decription, $gameData) {
    
    $name = greetUser();
    line($decription);
    $countCorrect = 0;
    while($countCorrect < MAX_CORRECT_ANSWERS) {
        [$question, $correctAnsver] = $gameData;
        line('Question: %d', $question);
        $answer = prompt('Your answer');
        if($answer !== $correctAnsver) {
            line("%s is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnsver);
            line("Let's try again, %s!", $name);
            return;
        }
        line("Correct!");
        $countCorrect++;
    }
    line("Congratulations, %s!", $name);
}

function greetUser()
{
    line('Welcome to the Brain Games!');
    return prompt('May I have your name?');
}