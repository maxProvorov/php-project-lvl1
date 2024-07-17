<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runner;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2, $sqrt = sqrt($number); $i <= $sqrt; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGame()
{
    $generateGameData = function () {
        $question = random_int(2, 99);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    runner(DESCRIPTION, $generateGameData);
}
