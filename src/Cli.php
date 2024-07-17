<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greetUser()
{
    line('Welcome to the Brain Games!');
    echo 'May I have your name? ';
    $name = rtrim(fgets(STDIN), ":\n");
    line("Hello, %s!", $name);
    return $name;
}
