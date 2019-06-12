<?php

namespace Php\Project1\Games\BrainProgressionGame;

use function Php\Project1\Index\startGame;

function startBrainProgression()
{
    $introLine = "What number is missing in the progression?\n";
    $getRoundData = function () {
        $minNumRange = 2;
        $maxNumRange = 50;
        $minIndexRange = 0;
        $maxIndexRange = 9;
        $numbersArray = [];
        $randNum1 = rand($minNumRange, $maxNumRange);
        $randIndex = rand($minIndexRange, $maxIndexRange);
        for ($i = 0; $i < 10; $i++) {
            $number = $randNum1 + ($i * 2);
            if ($randIndex == $i) {
                $numbersArray[] = '..';
                $correctAnswer = $number;
            } else {
                $numbersArray[] = $number;
            }
        }
        $question = implode(' ', $numbersArray);
        return [$question, $correctAnswer];
    };
    startGame($introLine, $getRoundData);
}
