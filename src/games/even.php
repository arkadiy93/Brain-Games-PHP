<?php

namespace App\src\games\even;

use function App\src\index\playGame;

define("MIN_NUM_RANGE", 1);
define("MAX_NUM_RANGE", 20);
const DESCRIPTION = "Answer \"yes\" if number even otherwise answer \"no\".";

function isEven($a)
{
    return $a % 2 == 0;
}

function startBrainEven()
{
    $getRoundData = function () {
        $question = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION, $getRoundData);
}
