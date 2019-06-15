<?php

namespace Php\Project1\Games\Even;

use function Php\Project1\Index\playGame;

define("MIN_NUM_RANGE", 1);
define("MAX_NUM_RANGE", 20);
define("DESCRIPTION", "Answer \"yes\" if number even otherwise answer \"no\".");

function checkIfNumberEven($num)
{
    return $question % 2 == 0;
}


function startBrainEven()
{
    $getRoundData = function () {
        $question = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $isEven = checkIfNumberEven($question);
        $correctAnswer = $isEven ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    $description = DESCRIPTION;
    playGame($description, $getRoundData);
}
