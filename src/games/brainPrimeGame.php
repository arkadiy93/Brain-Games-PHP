<?php

namespace Php\Project1\Games\BrainPrimeGame;

use function Php\Project1\Index\startGame;

function startBrainPrime()
{
    $introLine = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";
    $getRoundData = function () {
        $minNumRange = 1;
        $maxNumRange = 20;
        $question = rand($minNumRange, $maxNumRange);
        $isPrime = gmp_prob_prime($question);
        $correctAnswer = $isPrime == 0 ? 'no' : 'yes';
        return [$question, $correctAnswer];
    };
    startGame($introLine, $getRoundData);
}
