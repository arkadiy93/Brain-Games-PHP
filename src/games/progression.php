<?php

namespace Php\Project1\Games\Progression;

use function Php\Project1\Index\playGame;

define("MIN_NUM_RANGE", 2);
define("MAX_NUM_RANGE", 50);
define("MIN_INDEX_RANGE", 0);
define("MAX_INDEX_RANGE", 9);
define("STEP", 2);
define("NUMBERS_AMOUNT", 10);
define("DESCRIPTION", "What number is missing in the progression?");

function startBrainProgression()
{
    $getRoundData = function () {
        $numbers = [];
        $randNum1 = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $randIndex = rand(MIN_INDEX_RANGE, MAX_INDEX_RANGE);
        for ($i = 0; $i < NUMBERS_AMOUNT; $i++) {
            $number = $randNum1 + ($i * STEP);
            if ($randIndex == $i) {
                $numbers[] = '..';
                $correctAnswer = $number;
            } else {
                $numbers[] = $number;
            }
        }
        $question = implode(' ', $numbers);
        return [$question, $correctAnswer];
    };
    $description = DESCRIPTION;
    playGame($description, $getRoundData);
}
