<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runner;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function swapIfGreater(&$x, &$y) {
    if ($y > $x) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
}

function calc($x, $y)
{
    swapIfGreater($x, $y);
    $gcd = 1;
    for($i = 2; $i <= $y; $i++) {
        if($x % $i === 0 && $y % $i === 0) {
            $gcd = $i;
        }
    }
    return $gcd;
}

function runGame()
{
    $generateGameData = function () {
        $x = random_int(1, 99);
        $y = random_int(1, 99);
        $question = sprintf('%d %d', $x, $y);
        $correctAnswer = (string) calc($x, $y);
        return [$question, $correctAnswer];
    };

    runner(DESCRIPTION, $generateGameData);
}
