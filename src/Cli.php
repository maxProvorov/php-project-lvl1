<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greetUser() {
    line('Welcome to the Brain Games!');
}

function getUserName() {
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}