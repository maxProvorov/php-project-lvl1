<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greetUser()
{
    line('Welcome to the Brain Games!');
    line('May I have your name?');
    $name = prompt('');
    return $name;
}
