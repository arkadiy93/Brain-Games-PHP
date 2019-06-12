<?php

namespace Php\Project1\Index;

use function \cli\line;
use function \cli\prompt;

function startIntro($introLine)
{
    line("Welcome to the Brain Game!");
    line("{$introLine}\n");
    $name = prompt('May I have your name?');
    line("Hello, %s! \n", $name);
    return $name;
}

function startGame(string $introLine, callable $getRoundData)
{
    $name = startIntro($introLine);
    $hasWon = false;
    $maxRounds = 3;
    for ($i = 1; $i <= $maxRounds; $i++) {
        [$question, $correctAnswer] = $getRoundData();
        line("Question: {$question}");
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line('Correct!');
            $hasWon = $i == $maxRounds;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            break;
        }
    }
    if ($hasWon) {
        line("Congratulations, {$name}!");
    }
}
