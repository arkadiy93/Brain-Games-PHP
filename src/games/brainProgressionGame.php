<?php

namespace Php\Project1\Games\BrainProgressionGame;

use function Php\Project1\Index\startGame;

function startBrainProgression()
{
    $introLine = "What number is missing in the progression?\n";
    define("MIN_NUM_RANGE", 2);
    define("MAX_NUM_RANGE", 50);
    define("MIN_INDEX_RANGE", 0);
    define("MAX_INDEX_RANGE", 9);
    define("STEP", 2);
    define("ARRAY_LENGTH", 10);
    $getRoundData = function () {
        $numbersArray = [];
        $randNum1 = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $randIndex = rand(MIN_INDEX_RANGE, MAX_INDEX_RANGE);
        for ($i = 0; $i < ARRAY_LENGTH; $i++) {
            $number = $randNum1 + ($i * STEP);
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
