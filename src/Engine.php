<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\greetUser;
use function BrainGames\Cli\getUserName;
use function cli\line;
use function cli\prompt;

const MAX_CORRECT_ANSWERS = 3;

function runner($description, $generateGameData)
{
    greetUser();
    $name = getUserName();
    line($description);
    $countCorrect = 0;

    while ($countCorrect < MAX_CORRECT_ANSWERS) {
        [$question, $correctAnswer] = $generateGameData();
        line('Question: %s', $question);
        $answer = prompt('Your answer');

        if ($answer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
        } else {
            line("Correct!");
            $countCorrect++;
        }
    }

    line("Congratulations, %s!", $name);
}
