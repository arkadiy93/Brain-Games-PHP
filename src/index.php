<?php

namespace Php\Project1\Index;

use function \cli\line;
use function \cli\prompt;

define("TOTAL_GAME_ROUNDS", 3);

function printIntroLine($description)
{
    line("Welcome to the Brain Game!");
    line("$description\n");
}

function getName()
{
    return prompt('May I have your name?');
}

function playGame(string $description, callable $getRoundData)
{
    printIntroLine($description);
    $name = getName();
    line("Hello, %s! \n", $name);
    for ($i = 1; $i <= TOTAL_GAME_ROUNDS; $i++) {
        [$question, $correctAnswer] = $getRoundData();
        line("Question: $question");
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            return;
        }
    }
      line("Congratulations, $name!");
}
