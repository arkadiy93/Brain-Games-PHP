<?php

namespace Php\Project1\Games\Prime;

use function Php\Project1\Index\playGame;

define("MIN_NUM_RANGE", 1);
define("MAX_NUM_RANGE", 20);
define("DESCRIPTION", "Answer \"yes\" if given number is prime. Otherwise answer \"no\".");

function startBrainPrime()
{
    $getRoundData = function () {
        $question = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $isPrime = gmp_prob_prime($question);
        $correctAnswer = $isPrime == 0 ? 'no' : 'yes';
        return [$question, $correctAnswer];
    };
    $description = DESCRIPTION;
    playGame($description, $getRoundData);
}
