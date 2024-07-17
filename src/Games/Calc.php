<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runner;

const DESCRIPTION = 'What is the result of the expression?';
const ACTIONS = ['+', '-', '*'];

function calc(int $x, int $y, string $action): int
{
    switch ($action) {
        case '+':
            return $x + $y;
        case '-':
            return $x - $y;
        case '*':
            return $x * $y;
        default:
            throw new \Exception("Unknown action: $action");
    }
}

function runGame(): void
{
    $generateGameData = function () {
        $x = random_int(1, 99);
        $y = random_int(1, 99);
        $index = random_int(0, 2);
        $action = ACTIONS[$index];
        $question = sprintf('%d %s %d', $x, $action, $y);
        $correctAnswer = (string) calc($x, $y, $action);
        return [$question, $correctAnswer];
    };

    runner(DESCRIPTION, $generateGameData);
}
