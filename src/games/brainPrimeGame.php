<?php

namespace Php\Project1\Games\BrainPrimeGame;

use function Php\Project1\Index\startGame;

function startBrainPrime()
{
    $introLine = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";
    define("MIN_NUM_RANGE", 1);
    define("MAX_NUM_RANGE", 20);
    $getRoundData = function () {
        $question = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $isPrime = gmp_prob_prime($question);
        $correctAnswer = $isPrime == 0 ? 'no' : 'yes';
        return [$question, $correctAnswer];
    };
    startGame($introLine, $getRoundData);
}
