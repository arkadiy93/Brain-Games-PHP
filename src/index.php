<?php

namespace Php\Project1\Index;

use function \cli\line;
use function \cli\prompt;

define("TOTAL_GAME_ROUNDS", 3);

function playGame(string $description, callable $getRoundData)
{
    line("Welcome to the Brain Game!");
    line("$description\n");
    $name = rompt('May I have your name?');
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
