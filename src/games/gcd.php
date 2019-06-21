<?php

namespace BrainGames\games\gcd;

use function BrainGames\index\playGame;

define("MIN_QUESTION_VAL", 2);
define("MAX_QUESTION_VAL", 50);
define("GCD_DESCRIPTION", "Find the greatest common divisor of given numbers.");

function startBrainGcd()
{
    $getRoundData = function () {
        $randQuest1 = rand(MIN_QUESTION_VAL, MAX_QUESTION_VAL);
        $randQuest2 = rand(MIN_QUESTION_VAL, MAX_QUESTION_VAL);
        $question = "$randQuest1 $randQuest2";
        $correctAnswer = gmp_gcd($randQuest1, $randQuest2);
        return [$question, $correctAnswer];
    };
    playGame(GCD_DESCRIPTION, $getRoundData);
}
