<?php

namespace Php\Project1\Games\BrainGcdGame;

use function Php\Project1\Index\startGame;

function startBrainGcd()
{
    $introLine = "Find the greatest common divisor of given numbers.\n";
    $getRoundData = function () {
        $minNumRange = 2;
        $maxNumRange = 50;
        $randNum1 = rand($minNumRange, $maxNumRange);
        $randNum2 = rand($minNumRange, $maxNumRange);
        $question = "{$randNum1} {$randNum2}";
        $correctAnswer = gmp_gcd($randNum1, $randNum2);
        return [$question, $correctAnswer];
    };
    startGame($introLine, $getRoundData);
}
