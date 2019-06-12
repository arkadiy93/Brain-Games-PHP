<?php

namespace Php\Project1\Games\BrainGcdGame;

use function Php\Project1\Index\startGame;

function startBrainGcd()
{
    $introLine = "Find the greatest common divisor of given numbers.\n";
    define("MIN_NUM_RANGE", 2);
    define("MAX_NUM_RANGE", 50);
    $getRoundData = function () {
        $randNum1 = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $randNum2 = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $question = "{$randNum1} {$randNum2}";
        $correctAnswer = gmp_gcd($randNum1, $randNum2);
        return [$question, $correctAnswer];
    };
    startGame($introLine, $getRoundData);
}
