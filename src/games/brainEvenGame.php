<?php

namespace Php\Project1\Games\BrainEvenGame;

use function Php\Project1\Index\startGame;

function startBrainEven()
{
    $introLine = "Answer \"yes\" if number even otherwise answer \"no\".\n";
    $getRoundData = function () {
        $minNumRange = 1;
        $maxNumRange = 20;
        $question = rand($minNumRange, $maxNumRange);
        $isEven = $question % 2 == 0;
        $correctAnswer = $isEven ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    startGame($introLine, $getRoundData);
}
