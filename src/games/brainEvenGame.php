<?php

namespace Php\Project1\Games\brainEvenGame;

use function \cli\line;
use function \cli\prompt;
use function Php\Project1\Index\askQuestions;

function startGame()
{
    line("Welcome to the Brain Game!");
    line("Answer \"yes\" if number even otherwise answer \"no\". \n");
    $name = prompt('May I have your name?');
    line("Hello, %s! \n", $name);
    $hasWon = askQuestions();
    if ($hasWon) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}
