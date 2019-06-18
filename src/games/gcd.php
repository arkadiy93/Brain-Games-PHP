<?php

namespace Php\Project1\Games\Gcd;

use function Php\Project1\Index\playGame;

define("MIN_NUM_RANGE", 2);
define("MAX_NUM_RANGE", 50);
define("GCD_DESCRIPTION", "Find the greatest common divisor of given numbers.");

function startBrainGcd()
{
    $getRoundData = function () {
        $randNum1 = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $randNum2 = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $question = "$randNum1 $randNum2";
        $correctAnswer = gmp_gcd($randNum1, $randNum2);
        return [$question, $correctAnswer];
    };
    playGame(GCD_DESCRIPTION, $getRoundData);
}
