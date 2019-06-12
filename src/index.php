<?php

namespace Php\Project1\Index;

use function \cli\line;
use function \cli\prompt;

function askQuestions()
{
    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $minNumRange = 1;
        $maxNumRange = 20;
        $number = rand($minNumRange, $maxNumRange);
        line("Question: {$number}");
        $answer = prompt('Your answer');
        $isEven = $number % 2 == 0;
        $correctAnswer = $isEven ? 'yes' : 'no';
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return false;
        }
    }
    return true;
}
