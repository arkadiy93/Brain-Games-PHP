<?php

namespace Php\Project1\Games\BrainEvenGame;

use function Php\Project1\Index\startGame;

function startBrainEven()
{
    $introLine = "Answer \"yes\" if number even otherwise answer \"no\".\n";
    define("MIN_NUM_RANGE", 1);
    define("MAX_NUM_RANGE", 20);
    $getRoundData = function () {
        $question = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $isEven = $question % 2 == 0;
        $correctAnswer = $isEven ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    startGame($introLine, $getRoundData);
}
