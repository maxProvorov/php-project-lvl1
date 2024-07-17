<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runner;

const DESCRIPTION = 'What number is missing in the progression?';

function generateProgression($start, $step, $count): array
{
    $progression = [];
    for ($i = 0; $i < $count; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function runGame()
{
    $generateGameData = function () {
        $start = random_int(1, 89);
        $step = random_int(2, 9);
        $count = random_int(5, 10);
        $progression = generateProgression($start, $step, $count);
        $index = random_int(1, $count - 1);
        $question = $progression;
        $question[$index] = '...';
        $question = implode(', ', $question);
        $correctAnswer = (string) $progression[$index];
        return [$question, $correctAnswer];
    };
    runner(DESCRIPTION, $generateGameData);
}
