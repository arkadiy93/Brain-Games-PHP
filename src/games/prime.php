<?php

namespace BrainGames\games\prime;

use function BrainGames\index\playGame;

define("MIN_QUESTION_VAL", 1);
define("MAX_QUESTION_VAL", 20);
define("PRIME_DESCRIPTION", "Answer \"yes\" if given number is prime. Otherwise answer \"no\".");

function startBrainPrime()
{
    $getRoundData = function () {
        $question = rand(MIN_QUESTION_VAL, MAX_QUESTION_VAL);
        $isPrime = gmp_prob_prime($question);
        $correctAnswer = $isPrime == 0 ? 'no' : 'yes';
        return [$question, $correctAnswer];
    };
    playGame(PRIME_DESCRIPTION, $getRoundData);
}
